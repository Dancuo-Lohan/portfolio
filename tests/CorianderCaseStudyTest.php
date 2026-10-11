<?php
declare(strict_types=1);

use CorianderCore\Core\Router\Router;
use Nyholm\Psr7\ServerRequest;
use PHPUnit\Framework\TestCase;

final class CorianderCaseStudyTest extends TestCase
{
    public function testRoutingExamplesUseTheSameCurrentContractsInBothLanguages(): void
    {
        $expectedCode = [
            '[id].get.php',
            '_metadata.php',
            '/about',
            '/articles/42',
            'src/Views/articles/[id].get.php',
            '/articles/42',
            "\$request->getAttribute('id')",
            'src/Views/articles/show.php',
        ];
        $classesByLocale = [];
        foreach (['fr', 'en'] as $locale) {
            $response = (new Router())->handle(new ServerRequest('GET', '/' . $locale . '/case-studies/corianderPHP'));
            self::assertSame(200, $response->getStatusCode());
            $document = new DOMDocument();
            self::assertTrue($document->loadHTML((string) $response->getBody(), LIBXML_NOERROR | LIBXML_NOWARNING));
            $xpath = new DOMXPath($document);
            $article = $xpath->query('//main//article')->item(0);
            self::assertNotNull($article);
            $code = [];
            foreach ($xpath->query('.//code', $article) as $element) {
                $code[] = trim($element->textContent);
            }
            self::assertSame($expectedCode, $code);
            foreach (['0.2.x', '0.2.3.3', '0.3.0', '0.4.0', '0.4.1', '$metadata', '$page', 'Responses::view()'] as $contract) {
                self::assertStringContainsString($contract, $article->textContent);
            }
            foreach (['public/routes.php', 'ArticleController::show()', 'public/public_views/articles/show/index.php'] as $obsolete) {
                self::assertStringNotContainsString($obsolete, $article->textContent);
            }
            $tree = $xpath->query('.//div[contains(@class, "font-mono")]//span[not(@aria-hidden)]', $article);
            $treeNames = [];
            foreach ($tree as $element) {
                $treeNames[] = trim($element->textContent);
            }
            self::assertSame(['src', 'Views', 'about', 'index.get.php', '_metadata.php'], $treeNames);
            $titles = $xpath->query('(.//div[@role="list"])[1]//p[@class="workflow-title"]', $article);
            self::assertSame(4, $titles->length);
            self::assertSame('Handler', trim($titles->item(2)->textContent));
            foreach (['static-views', 'dynamic-views'] as $guide) {
                self::assertSame(1, $xpath->query('.//a[@href="https://www.corianderphp.com/documentation/' . $guide . '"]', $article)->length);
            }
            foreach ($xpath->query('.//*[@class]', $article) as $element) {
                $classesByLocale[$locale][] = $element->getAttribute('class');
            }
        }
        self::assertSame($classesByLocale['fr'], $classesByLocale['en']);
    }
}
