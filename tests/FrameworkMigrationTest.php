<?php
declare(strict_types=1);

use CorianderCore\Core\Router\{RouteCache, Router};
use App\Middleware\NotFoundMiddleware;
use Nyholm\Psr7\{Response, ServerRequest};
use Psr\Http\Message\{ResponseInterface, ServerRequestInterface};
use Psr\Http\Server\RequestHandlerInterface;
use PHPUnit\Framework\TestCase;

final class FrameworkMigrationTest extends TestCase
{
    private function router(): Router
    {
        $directory = PROJECT_ROOT . '/src/Views';
        return new Router($directory, new RouteCache($directory, production: false));
    }

    public function testEveryPublicViewUsesADirectGetPageAndLocalizedMetadata(): void
    {
        $router = $this->router();
        foreach (['fr', 'en'] as $locale) {
            $root = PROJECT_ROOT . '/src/Views/' . $locale;
            $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS));
            foreach ($files as $file) {
                if ($file->getFilename() !== 'index.get.php' || $file->getPath() === $root) {
                    continue;
                }
                $view = $locale . '/' . str_replace('\\', '/', substr($file->getPath(), strlen($root) + 1));
                $metadata = require $file->getPath() . '/_metadata.php';
                self::assertFileExists(PROJECT_ROOT . '/src/Views/' . $view . '/index.get.php');
                $response = $router->handle(new ServerRequest('GET', '/' . $view));
                self::assertSame(200, $response->getStatusCode(), $view);
                self::assertSame('text/html; charset=utf-8', $response->getHeaderLine('Content-Type'));
                $document = new DOMDocument();
                self::assertTrue($document->loadHTML((string) $response->getBody(), LIBXML_NOERROR | LIBXML_NOWARNING));
                $xpath = new DOMXPath($document);
                self::assertSame($locale, $document->documentElement->getAttribute('lang'));
                self::assertSame(1, $xpath->query('//title')->length);
                self::assertSame(1, $xpath->query('//h1')->length);
                self::assertSame(1, $xpath->query('//meta[@name="description"]')->length);
                $description = array_values(array_filter($metadata['meta'], static fn(array $meta): bool => ($meta['name'] ?? '') === 'description'))[0];
                self::assertSame($description['content'], $xpath->query('//meta[@name="description"]')->item(0)->getAttribute('content'));
                foreach (['canonical', 'alternate'] as $rel) {
                    $expected = count(array_filter($metadata['links'], static fn(array $link): bool => $link['rel'] === $rel));
                    self::assertSame($expected, $xpath->query('//link[@rel="' . $rel . '"]')->length, $view);
                }
                $switch = $xpath->query('//a[@data-language-switch]')->item(0);
                self::assertNotNull($switch);
                self::assertSame('/' . ($locale === 'fr' ? 'en' : 'fr') . substr('/' . $view, 3), $switch->getAttribute('href'));
                self::assertStringContainsString('https://analytics.corianderphp.com', $response->getHeaderLine('Content-Security-Policy'));
                self::assertStringContainsString('https://api.websitecarbon.com', $response->getHeaderLine('Content-Security-Policy'));
                self::assertStringContainsString('/assets/css/output.css', (string) $response->getBody());
                self::assertSame(200, $router->handle(new ServerRequest('HEAD', '/' . $view))->getStatusCode());
            }
        }
    }

    public function testLocaleNegotiationAndLegacyRedirectsRemainAvailable(): void
    {
        $router = $this->router();
        foreach (['/', '/home', '/my-work', '/case-studies/sansSuite', '/components/vertical-parallax'] as $path) {
            $view = $path === '/' ? '/home' : $path;
            $request = new ServerRequest('GET', $path, ['Accept-Language' => 'fr-FR,fr;q=0.9']);
            $response = $router->handle($request);
            self::assertSame(302, $response->getStatusCode());
            self::assertSame('/fr' . $view, $response->getHeaderLine('Location'));
            self::assertSame('Accept-Language, Cookie', $response->getHeaderLine('Vary'));
            self::assertSame('/en' . $view, $router->handle($request->withCookieParams(['portfolio_locale' => 'en']))->getHeaderLine('Location'));
        }
        self::assertSame('/en/home', $router->handle(new ServerRequest('GET', '/', ['Accept-Language' => 'de']))->getHeaderLine('Location'));
        foreach (['en', 'fr'] as $locale) {
            self::assertSame('/' . $locale . '/home', $router->handle(new ServerRequest('GET', '/' . $locale))->getHeaderLine('Location'));
        }
    }

    public function testMissingPagesAreLocalizedAndNonGetMethodsAreNotPublished(): void
    {
        $router = $this->router();
        foreach (['fr', 'en'] as $locale) {
            foreach (['/missing', '/home/metadata', '/home/_metadata', '/home/index', '/page-not-found/_notfound', '/case-studies/not-a-study'] as $suffix) {
                $response = $router->handle(new ServerRequest('GET', '/' . $locale . $suffix));
                self::assertSame(404, $response->getStatusCode());
                self::assertStringContainsString('<html lang="' . $locale . '"', (string) $response->getBody());
                self::assertStringContainsString('noindex', (string) $response->getBody());
            }
        }
        $response = $router->handle(new ServerRequest('OPTIONS', '/en/home'));
        self::assertSame(405, $response->getStatusCode());
        self::assertSame('GET, HEAD', $response->getHeaderLine('Allow'));
    }

    public function testRepeatedRenderingKeepsMetadataWithoutDoubleEscaping(): void
    {
        foreach (['fr/contact-me', 'en/contact-me', 'fr/contact-me'] as $view) {
            $metadata = require PROJECT_ROOT . '/src/Views/' . $view . '/_metadata.php';
            $document = new DOMDocument();
            self::assertTrue($document->loadHTML((string) $this->router()->handle(new ServerRequest('GET', '/' . $view))->getBody(), LIBXML_NOERROR | LIBXML_NOWARNING));
            self::assertSame($metadata['title'], $document->getElementsByTagName('title')->item(0)->textContent);
        }
    }

    public function testSitemapRouteReturnsTheExistingXml(): void
    {
        $response = $this->router()->handle(new ServerRequest('GET', '/sitemap.xml'));
        self::assertSame(200, $response->getStatusCode());
        self::assertSame('application/xml; charset=utf-8', $response->getHeaderLine('Content-Type'));
        self::assertSame(file_get_contents(PROJECT_ROOT . '/public/sitemap.xml'), (string) $response->getBody());
        self::assertStringContainsString('/fr/case-studies/steambotChronicles', (string) $response->getBody());
    }

    public function testPageModulesAreLoadedOnceAndTheirAssetsExist(): void
    {
        foreach (['fr', 'en'] as $locale) {
            foreach (['home', 'my-work', 'contact-me', 'components/vertical-parallax', 'case-studies/corianderPHP', 'page-not-found'] as $page) {
                $document = new DOMDocument();
                self::assertTrue($document->loadHTML((string) $this->router()->handle(new ServerRequest('GET', '/' . $locale . '/' . $page))->getBody(), LIBXML_NOERROR | LIBXML_NOWARNING));
                $xpath = new DOMXPath($document);
                $modules = $xpath->query('//script[@type="module"]');
                $hasPageScript = in_array($page, ['home', 'components/vertical-parallax'], true);
                self::assertSame($hasPageScript ? 2 : 1, $modules->length);
                foreach ($modules as $index => $module) {
                    $url = $module->getAttribute('src');
                    $asset = $index === 0 ? '_script.js' : $locale . '/' . $page . '/index.js';
                    self::assertStringContainsString('/assets/js/pages/' . $asset, $url);
                    self::assertNotEmpty(parse_url($url, PHP_URL_QUERY));
                    self::assertFileExists(PROJECT_ROOT . '/public/assets/js/pages/' . $asset);
                }
                $css = $xpath->query('//link[@rel="stylesheet"]')->item(0)->getAttribute('href');
                self::assertStringContainsString('/assets/css/output.css', $css);
                self::assertNotEmpty(parse_url($css, PHP_URL_QUERY));
            }
        }
    }

    public function testLocalizedErrorBodyPreservesUnrelatedHeaders(): void
    {
        $handler = new class implements RequestHandlerInterface {
            public function handle(ServerRequestInterface $request): ResponseInterface
            {
                return new Response(404, [
                    'Content-Type' => 'text/plain',
                    'Content-Length' => '3',
                    'Content-Encoding' => 'gzip',
                    'ETag' => 'old-body',
                    'X-Request-ID' => 'portfolio-upgrade-test',
                ], 'old');
            }
        };
        $response = (new NotFoundMiddleware())->process(new ServerRequest('GET', 'https://portfolio.example/fr/missing'), $handler);
        self::assertSame(404, $response->getStatusCode());
        self::assertSame('portfolio-upgrade-test', $response->getHeaderLine('X-Request-ID'));
        self::assertSame('text/html; charset=utf-8', $response->getHeaderLine('Content-Type'));
        self::assertStringContainsString('<html lang="fr"', (string) $response->getBody());
        foreach (['Content-Length', 'Content-Encoding', 'ETag'] as $header) {
            self::assertFalse($response->hasHeader($header));
        }
    }

    public function testProductionCachePreservesLocalizedRoutes(): void
    {
        $file = tempnam(sys_get_temp_dir(), 'portfolio-routes-');
        self::assertNotFalse($file);
        $directory = PROJECT_ROOT . '/src/Views';
        try {
            $cache = new RouteCache($directory, $file, production: true);
            $router = new Router($directory, $cache);
            self::assertSame(200, $router->handle(new ServerRequest('GET', '/fr/my-work'))->getStatusCode());
            self::assertSame(200, $router->handle(new ServerRequest('GET', '/en/case-studies/sansSuite'))->getStatusCode());
            $entry = require $file;
            self::assertSame(1, $entry['schema']);
            self::assertArrayHasKey('fr/my-work', $entry['map']['static']);
            self::assertSame(200, (new Router($directory, new RouteCache($directory, $file, production: true)))
                ->handle(new ServerRequest('GET', '/en/home'))->getStatusCode());
        } finally {
            foreach ([$file, $file . '.lock'] as $path) {
                if (is_file($path)) {
                    unlink($path);
                }
            }
        }
    }
}
