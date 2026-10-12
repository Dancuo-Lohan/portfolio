<?php
declare(strict_types=1);

use App\Modules\Localization\Localization;
use CorianderCore\Core\Router\Router;
use Nyholm\Psr7\ServerRequest;
use PHPUnit\Framework\TestCase;

final class LocalizedViewsTest extends TestCase
{
    public function testEveryLocalizedViewHasCounterpartAndMetadata(): void
    {
        $viewsByLocale = [];

        foreach (Localization::supportedLocales() as $locale) {
            $localeRoot = PROJECT_ROOT . '/src/Views/' . $locale;
            self::assertDirectoryExists($localeRoot);

            $viewsByLocale[$locale] = $this->findViews($localeRoot);
            self::assertNotEmpty($viewsByLocale[$locale], sprintf('No views found for locale "%s".', $locale));

            foreach ($viewsByLocale[$locale] as $view) {
                self::assertFileExists(
                    $localeRoot . '/' . $view . '/_metadata.php',
                    sprintf('Missing _metadata.php for %s/%s.', $locale, $view)
                );
            }
        }

        $englishViews = $viewsByLocale['en'];
        $frenchViews = $viewsByLocale['fr'];

        self::assertSame([], array_values(array_diff($englishViews, $frenchViews)), 'Missing French translated views.');
        self::assertSame([], array_values(array_diff($frenchViews, $englishViews)), 'Missing English translated views.');
    }

    public function testRootContainsOnlyLayoutsScriptsMiddlewareAndPublicHandlers(): void
    {
        $allowed = ['_footer.php', '_header.php', '_middleware.php', '_script.ts', 'case-studies', 'components', 'contact-me.get.php', 'en', 'fr', 'home.get.php', 'index.get.php', 'legal-notice.get.php', 'my-work.get.php', 'page-not-found.get.php', 'sitemap.xml.get.php', 'terms-and-conditions.get.php'];
        $entries = array_values(array_diff(scandir(PROJECT_ROOT . '/src/Views') ?: [], ['.', '..']));
        sort($entries);

        self::assertSame($allowed, $entries);
    }

    public function testLocaleHelpersResolveFallbacksAndSwitchUrls(): void
    {
        self::assertSame('fr', Localization::preferredLocale('fr-FR,fr;q=0.9,en;q=0.8'));
        self::assertSame('en', Localization::preferredLocale('de-DE,de;q=0.9'));
        self::assertSame('fr', Localization::preferredLocale('en-US,en;q=0.9', 'fr'));
        self::assertSame('home', Localization::stripLocale('fr/home'));
        self::assertSame('/en/case-studies/roomCalendars', Localization::switchPath('fr/case-studies/roomCalendars', 'en'));
    }

    public function testNewCaseStudiesHaveAlignedSectionsAndDiscoveryLinks(): void
    {
        $sitemap = simplexml_load_file(PROJECT_ROOT . '/public/sitemap.xml');
        self::assertNotFalse($sitemap);
        $sitemap->registerXPathNamespace('s', 'http://www.sitemaps.org/schemas/sitemap/0.9');

        foreach (['steambotChronicles'] as $study) {
            $anchorsByLocale = [];

            foreach (Localization::supportedLocales() as $locale) {
                $root = PROJECT_ROOT . '/src/Views/' . $locale;
                $path = '/' . $locale . '/case-studies/' . $study;
                $source = file_get_contents($root . '/case-studies/' . $study . '/index.get.php');
                self::assertNotFalse($source);

                $document = new DOMDocument();
                self::assertTrue($document->loadHTML($source, LIBXML_NOERROR | LIBXML_NOWARNING));
                self::assertSame(1, $document->getElementsByTagName('h1')->length);
                $anchorsByLocale[$locale] = [];
                foreach ((new DOMXPath($document))->query('//*[@data-language-scroll-anchor]') as $anchor) {
                    $anchorsByLocale[$locale][] = $anchor->getAttribute('id');
                }
                self::assertNotEmpty($anchorsByLocale[$locale]);

                foreach (['home', 'my-work'] as $view) {
                    self::assertStringContainsString($path, (string) file_get_contents($root . '/' . $view . '/index.get.php'));
                }
                self::assertStringContainsString(
                    'href="https://lohan.dancuo.fr' . $path . '"',
                    (string) (new Router())->handle(new ServerRequest('GET', '/' . $locale . '/case-studies/' . $study))->getBody()
                );
                self::assertCount(1, $sitemap->xpath('//s:url[s:loc="https://lohan.dancuo.fr' . $path . '"]'));
                self::assertFileExists(PROJECT_ROOT . '/public/assets/js/pages/_script.js');
            }

            self::assertSame($anchorsByLocale['fr'], $anchorsByLocale['en']);
        }
    }

    public function testRecentCaseStudiesHaveShareImages(): void
    {
        $sitemap = simplexml_load_file(PROJECT_ROOT . '/public/sitemap.xml');
        self::assertNotFalse($sitemap);
        $sitemap->registerXPathNamespace('s', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        foreach (['steambotChronicles', 'sansSuite'] as $study) {
            foreach (Localization::supportedLocales() as $locale) {
                $pageUrl = 'https://lohan.dancuo.fr/' . $locale . '/case-studies/' . $study;
                self::assertCount(1, $sitemap->xpath('//s:url[s:loc="' . $pageUrl . '"]'));
                $metadata = (string) (new Router())->handle(new ServerRequest('GET', '/' . $locale . '/case-studies/' . $study))->getBody();
                $document = new DOMDocument();
                self::assertTrue($document->loadHTML('<meta charset="utf-8">' . $metadata, LIBXML_NOERROR | LIBXML_NOWARNING));
                $xpath = new DOMXPath($document);
                $image = $xpath->query('//meta[@property="og:image"]')->item(0);
                self::assertNotNull($image);
                $url = $image->getAttribute('content');
                self::assertStringStartsWith('https://lohan.dancuo.fr/assets/', $url);
                self::assertFileExists(PROJECT_ROOT . '/public' . parse_url($url, PHP_URL_PATH));
                self::assertSame($url, $xpath->query('//meta[@name="twitter:image"]')->item(0)->getAttribute('content'));
                self::assertSame('summary_large_image', $xpath->query('//meta[@name="twitter:card"]')->item(0)->getAttribute('content'));
                self::assertNotEmpty($xpath->query('//meta[@property="og:image:alt"]')->item(0)->getAttribute('content'));
            }
        }
    }

    public function testWithdrawnProjectIsNoLongerPublishedOrLinked(): void
    {
        self::assertStringNotContainsString('estrilion', (string) file_get_contents(PROJECT_ROOT . '/public/sitemap.xml'));
        foreach (Localization::supportedLocales() as $locale) {
            $root = PROJECT_ROOT . '/src/Views/' . $locale;
            self::assertFileDoesNotExist($root . '/case-studies/estrilion/index.get.php');
            foreach (['home', 'my-work'] as $view) {
                $source = (string) file_get_contents($root . '/' . $view . '/index.get.php');
                self::assertStringNotContainsString('estrilion', strtolower($source));
                self::assertStringContainsString('thumbnails-steambotChronicles.jpg', $source);
            }
        }
    }

    public function testSteambotPerformanceExplainsTheLoadingStrategyWithoutAnIsolatedComparison(): void
    {
        foreach (['fr', 'en'] as $locale) {
            $source = (string) file_get_contents(PROJECT_ROOT . '/src/Views/' . $locale . '/case-studies/steambotChronicles/index.get.php');
            $document = new DOMDocument();
            self::assertTrue($document->loadHTML('<meta charset="utf-8">' . $source, LIBXML_NOERROR | LIBXML_NOWARNING));
            $xpath = new DOMXPath($document);
            self::assertSame(0, $xpath->query('//*[@id="preview-comparison"]')->length);
            $performance = $xpath->query('//*[@id="performance"]')->item(0)->textContent;
            self::assertStringContainsString($locale === 'fr' ? 'converties automatiquement en WebP' : 'converted to WebP automatically', $performance);
            self::assertStringContainsString($locale === 'fr' ? "plus d'une centaine de modèles 3D" : 'more than one hundred 3D models', $performance);
            self::assertStringContainsString('YouTube', $performance);
        }
    }

    public function testSteambotSeparatesItsOwnerRoleFromAiAnalysis(): void
    {
        foreach (['fr', 'en'] as $locale) {
            $source = (string) file_get_contents(PROJECT_ROOT . '/src/Views/' . $locale . '/case-studies/steambotChronicles/index.get.php');
            self::assertDoesNotMatchRegularExpression('/\\b(nous|we)\\b/iu', $source);
            $document = new DOMDocument();
            self::assertTrue($document->loadHTML('<meta charset="utf-8">' . $source, LIBXML_NOERROR | LIBXML_NOWARNING));
            $xpath = new DOMXPath($document);
            $role = $xpath->query('//*[@id="project-role"]')->item(0);
            self::assertNotNull($role);
            self::assertStringContainsString('CorianderPHP', $role->textContent);
            self::assertStringContainsString($locale === 'fr' ? 'agents IA' : 'AI agents', $role->textContent);
            self::assertSame(1, $xpath->query('ancestor::*[@id="intro"]', $role)->length);
            self::assertStringContainsString('Steambot Chronicles', $xpath->query('//header[@id="overview"]')->item(0)->textContent);
            $extraction = $xpath->query('//*[@id="extraction"]')->item(0);
            self::assertStringContainsString('PS2', $extraction->textContent);
            self::assertStringContainsString($locale === 'fr' ? 'Les agents IA ont analysé' : 'AI agents analysed', $extraction->textContent);
            $learning = $xpath->query('//*[@id="learning"]')->item(0)->textContent;
            self::assertStringContainsString($locale === 'fr' ? 'mieux travailler avec des agents IA' : 'work more effectively with AI agents', $learning);
            self::assertStringContainsString($locale === 'fr' ? 'écrire principalement en anglais' : 'Writing mainly in English', $learning);
        }
    }

    public function testSteambotNarrativeAndScreenshotsStayAligned(): void
    {
        foreach (['fr', 'en'] as $locale) {
            $html = (string) (new Router())->handle(new ServerRequest('GET', '/' . $locale . '/case-studies/steambotChronicles'))->getBody();
            $document = new DOMDocument();
            self::assertTrue($document->loadHTML($html, LIBXML_NOERROR | LIBXML_NOWARNING));
            $xpath = new DOMXPath($document);
            $sections = $xpath->query('//main//article/section[@data-language-scroll-anchor]');
            self::assertSame(['project-links', 'intro', 'intent', 'research', 'design', '3d', 'community', 'performance', 'visibility', 'learning'], array_map(
                static fn (DOMElement $section): string => $section->getAttribute('id'),
                iterator_to_array($sections)
            ));
            $images = $xpath->query('//figure//img');
            self::assertSame(5, $images->length);
            foreach ($images as $image) {
                self::assertNotEmpty($image->getAttribute('alt'));
                self::assertGreaterThan(0, (int) $image->getAttribute('width'));
                self::assertGreaterThan(0, (int) $image->getAttribute('height'));
                $eager = $image->parentNode->parentNode->getAttribute('id') === 'project-preview';
                self::assertSame($eager ? 'eager' : 'lazy', $image->getAttribute('loading'));
            }
            self::assertSame(1, $xpath->query('//*[@id="builder-preview"]/figcaption/p')->length);
            self::assertSame(1, $xpath->query('//*[@id="builder-preview"]/figcaption/a')->length);
            self::assertSame(1, $xpath->query('//*[@id="builder-preview"]//img')->length);
            self::assertStringContainsString('builder-editor.jpg', $xpath->query('//*[@id="builder-preview"]//img')->item(0)->getAttribute('src'));
            self::assertSame(1, $xpath->query('//*[@id="character-preview"]//img')->length);
            self::assertStringContainsString('character-viewer.jpg', $xpath->query('//*[@id="character-preview"]//img')->item(0)->getAttribute('src'));
            self::assertSame(0, $xpath->query('//img[contains(@src, "manual-reader.jpg")]')->length);
            self::assertSame(1, $xpath->query('//a[@href="https://baymard.com/research-articles/use-visual-filters-for-visually-distinct-product-attributes"]')->length);
            self::assertStringContainsString('YouTube', $xpath->query('//*[@id="performance"]')->item(0)->textContent);
        }
    }

    public function testSteambotUsesTheSharedCaseStudyOpening(): void
    {
        foreach (['fr' => 'Ressources du projet', 'en' => 'Project resources'] as $locale => $heading) {
            $html = (string) (new Router())->handle(new ServerRequest('GET', '/' . $locale . '/case-studies/steambotChronicles'))->getBody();
            $document = new DOMDocument();
            self::assertTrue($document->loadHTML($html, LIBXML_NOERROR | LIBXML_NOWARNING));
            $xpath = new DOMXPath($document);
            $header = $xpath->query('//main//article/header')->item(0);
            self::assertNotNull($header);
            self::assertContains('lg:grid-cols-[0.85fr_1.15fr]', explode(' ', $header->getAttribute('class')));
            self::assertContains('w-4/5', explode(' ', $header->parentNode->getAttribute('class')));
            self::assertSame(1, $xpath->query('./div/h1', $header)->length);
            self::assertSame(1, $xpath->query('./figure[@id="project-preview"]', $header)->length);
            self::assertSame(0, $xpath->query('.//a | .//*[@id="project-role"]', $header)->length);
            $resources = $xpath->query('./following-sibling::*[1]', $header)->item(0);
            self::assertSame('project-links', $resources->getAttribute('id'));
            self::assertSame($heading, trim($xpath->query('./div/div/h2', $resources)->item(0)->textContent));
            self::assertSame(1, $xpath->query('.//a[@href="https://steambot-chronicles.com/"]', $resources)->length);
        }
    }

    public function testSteambotKeepsRequestedCopyAndContextualisesProjectScale(): void
    {
        $french = (string) file_get_contents(PROJECT_ROOT . '/src/Views/fr/case-studies/steambotChronicles/index.get.php');
        self::assertStringContainsString(
            "J'ai créé un site où retrouver les archives de Steambot Chronicles et redécouvrir le jeu autrement : feuilleter son manuel, parcourir ses illustrations et explorer ses modèles en 3D.",
            $french
        );
        self::assertStringContainsString(
            "Steambot Chronicles est mon jeu préféré depuis l'enfance. Son site officiel a disparu, mais il reste des images, des musiques et des documents que je voulais réunir au même endroit.",
            $french
        );

        foreach (['fr', 'en'] as $locale) {
            $html = (string) (new Router())->handle(new ServerRequest('GET', '/' . $locale . '/case-studies/steambotChronicles'))->getBody();
            $document = new DOMDocument();
            self::assertTrue($document->loadHTML($html, LIBXML_NOERROR | LIBXML_NOWARNING));
            $xpath = new DOMXPath($document);
            self::assertSame(0, $xpath->query('//*[@id="intro"]//dl')->length);
            self::assertStringContainsString('155', $xpath->query('//*[@id="research"]')->item(0)->textContent);
            self::assertStringContainsString($locale === 'fr' ? "plus d'une centaine de modèles 3D" : 'more than one hundred 3D models', $xpath->query('//*[@id="performance"]')->item(0)->textContent);
            self::assertSame(0, $xpath->query('//*[@id="learning"]//aside')->length);
        }
    }

    public function testSteambotKeepsLocalizedNavigationAndProjectLinks(): void
    {
        foreach (['fr', 'en'] as $locale) {
            $html = (string) (new Router())->handle(new ServerRequest('GET', '/' . $locale . '/case-studies/steambotChronicles'))->getBody();
            $document = new DOMDocument();
            self::assertTrue($document->loadHTML($html, LIBXML_NOERROR | LIBXML_NOWARNING));
            $xpath = new DOMXPath($document);
            self::assertSame(1, $xpath->query('//h1')->length);
            self::assertSame(1, $xpath->query('//main//a[@href="/' . $locale . '/my-work"]')->length);
            $links = $xpath->query('//main//a[starts-with(@href, "https://steambot-chronicles.com/")]');
            self::assertSame(5, $links->length);
            foreach ($links as $link) {
                self::assertSame('_blank', $link->getAttribute('target'));
                self::assertStringContainsString('noopener', $link->getAttribute('rel'));
            }
            self::assertSame(0, $xpath->query('//main//a[@href="https://steambot-chronicles.com/manual"]')->length);
            self::assertSame(0, $xpath->query('//main//a[@href="https://steambot-chronicles.com/game"]')->length);
            self::assertSame(0, $xpath->query('//main//a[@href="https://steambot-chronicles.com/gallery?category=all"]')->length);
            self::assertSame(0, $xpath->query('//main//a[@href="https://steambot-chronicles.com/about"]')->length);
            self::assertSame(2, $xpath->query('//main//a[@href="https://steambot-chronicles.com/trotmobile"]')->length);
            $builderLink = $xpath->query('//*[@id="builder-preview"]//a')->item(0);
            self::assertStringContainsString($locale === 'fr' ? 'Créer votre Trotmobile' : 'Build your Trotmobile', $builderLink->textContent);
            self::assertSame(1, $xpath->query('//main//a[@href="https://steambot-chronicles.com/characters"]')->length);
            self::assertSame(1, $xpath->query('//*[@id="learning"]//a[@href="https://steambot-chronicles.com/"]')->length);
        }
    }

    /**
     * @return string[]
     */
    private function findViews(string $localeRoot): array
    {
        $views = [];
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($localeRoot, FilesystemIterator::SKIP_DOTS)
        );

        foreach ($iterator as $file) {
            if (!$file instanceof SplFileInfo || $file->getFilename() !== 'index.get.php' || $file->getPath() === $localeRoot) {
                continue;
            }

            $directory = str_replace('\\', '/', $file->getPath());
            $views[] = ltrim(substr($directory, strlen($localeRoot)), '/');
        }

        sort($views);
        return $views;
    }
}
