<?php
declare(strict_types=1);

use Modules\Localization\Localization;
use PHPUnit\Framework\TestCase;

final class LocalizedViewsTest extends TestCase
{
    public function testEveryLocalizedViewHasCounterpartAndMetadata(): void
    {
        $viewsByLocale = [];

        foreach (Localization::supportedLocales() as $locale) {
            $localeRoot = PROJECT_ROOT . '/public/public_views/' . $locale;
            self::assertDirectoryExists($localeRoot);

            $viewsByLocale[$locale] = $this->findViews($localeRoot);
            self::assertNotEmpty($viewsByLocale[$locale], sprintf('No views found for locale "%s".', $locale));

            foreach ($viewsByLocale[$locale] as $view) {
                self::assertFileExists(
                    $localeRoot . '/' . $view . '/metadata.php',
                    sprintf('Missing metadata.php for %s/%s.', $locale, $view)
                );
            }
        }

        $englishViews = $viewsByLocale['en'];
        $frenchViews = $viewsByLocale['fr'];

        self::assertSame([], array_values(array_diff($englishViews, $frenchViews)), 'Missing French translated views.');
        self::assertSame([], array_values(array_diff($frenchViews, $englishViews)), 'Missing English translated views.');
    }

    public function testOnlySharedLayoutAndLocaleRootsLiveAtPublicViewsRoot(): void
    {
        $allowed = ['en', 'footer.php', 'fr', 'header.php'];
        $entries = array_values(array_diff(scandir(PROJECT_ROOT . '/public/public_views') ?: [], ['.', '..']));
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
                $root = PROJECT_ROOT . '/public/public_views/' . $locale;
                $path = '/' . $locale . '/case-studies/' . $study;
                $source = file_get_contents($root . '/case-studies/' . $study . '/index.php');
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
                    self::assertStringContainsString($path, (string) file_get_contents($root . '/' . $view . '/index.php'));
                }
                self::assertStringContainsString(
                    'href="https://lohan.dancuo.fr' . $path . '"',
                    (string) file_get_contents($root . '/case-studies/' . $study . '/metadata.php')
                );
                self::assertCount(1, $sitemap->xpath('//s:url[s:loc="https://lohan.dancuo.fr' . $path . '"]'));
                self::assertFileExists(PROJECT_ROOT . '/public/assets/js/case-studies/' . $study . '/index.js');
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
                $metadata = (static function (string $path): string {
                    require $path;
                    return $metadata;
                })(PROJECT_ROOT . '/public/public_views/' . $locale . '/case-studies/' . $study . '/metadata.php');
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
            $root = PROJECT_ROOT . '/public/public_views/' . $locale;
            self::assertFileDoesNotExist($root . '/case-studies/estrilion/index.php');
            foreach (['home', 'my-work'] as $view) {
                $source = (string) file_get_contents($root . '/' . $view . '/index.php');
                self::assertStringNotContainsString('estrilion', strtolower($source));
                self::assertStringContainsString('thumbnails-steambotChronicles.jpg', $source);
            }
        }
    }

    public function testPerformanceComparisonsLabelBothStagesInEachLanguage(): void
    {
        $labelsByLocale = [
            'fr' => ['Avant optimisation', 'Après optimisation'],
            'en' => ['Before optimisation', 'After optimisation'],
        ];

        foreach ($labelsByLocale as $locale => $labels) {
            $source = file_get_contents(PROJECT_ROOT . '/public/public_views/' . $locale . '/case-studies/steambotChronicles/index.php');
            self::assertNotFalse($source);
            $document = new DOMDocument();
            self::assertTrue($document->loadHTML('<meta charset="utf-8">' . $source, LIBXML_NOERROR | LIBXML_NOWARNING));
            $xpath = new DOMXPath($document);
            $comparisons = $xpath->query('//*[@id="performance"]/div');
            self::assertSame(3, $comparisons->length);

            foreach ($comparisons as $comparison) {
                $terms = $xpath->query('.//dt', $comparison);
                $values = $xpath->query('.//dd', $comparison);
                self::assertSame(2, $terms->length);
                self::assertSame(2, $values->length);
                foreach ($labels as $index => $label) {
                    self::assertSame($label, trim($terms->item($index)->textContent));
                    self::assertNotEmpty(trim($values->item($index)->textContent));
                }
            }
        }
    }

    public function testSteambotCopyKeepsSoloAuthorshipAndExplainsLightingMeasurement(): void
    {
        foreach (['fr', 'en'] as $locale) {
            $source = (string) file_get_contents(PROJECT_ROOT . '/public/public_views/' . $locale . '/case-studies/steambotChronicles/index.php');
            self::assertDoesNotMatchRegularExpression('/\b(nous|we)\b/iu', $source);
            $document = new DOMDocument();
            self::assertTrue($document->loadHTML('<meta charset="utf-8">' . $source, LIBXML_NOERROR | LIBXML_NOWARNING));
            $xpath = new DOMXPath($document);
            $lighting = $xpath->query('//*[@id="performance"]/div')->item(2);
            self::assertStringContainsString('Trotmobile', $lighting->textContent);
            self::assertStringContainsString('gzip', $lighting->textContent);
            self::assertStringContainsString('105', $lighting->textContent);
            $intro = $xpath->query('//*[@id="intro"]')->item(0);
            self::assertStringContainsString($locale === 'fr' ? 'crédits' : 'credits', $intro->textContent);
            self::assertStringContainsString($locale === 'fr' ? 'Voir le site internet' : 'Visit the website', $source);
            self::assertStringContainsString($locale === 'fr' ? "Les agents IA ont réalisé l'essentiel de cette analyse" : 'AI agents carried out most of this analysis', $source);
        }
    }

    public function testSteambotKeepsLocalizedNavigationAndProjectResources(): void
    {
        foreach (['fr', 'en'] as $locale) {
            $documents = [];
            foreach (['corianderPHP', 'steambotChronicles'] as $study) {
                $source = (string) file_get_contents(PROJECT_ROOT . '/public/public_views/' . $locale . '/case-studies/' . $study . '/index.php');
                $document = new DOMDocument();
                self::assertTrue($document->loadHTML('<meta charset="utf-8">' . $source, LIBXML_NOERROR | LIBXML_NOWARNING));
                $documents[$study] = new DOMXPath($document);
            }
            $archive = $documents['steambotChronicles'];
            self::assertSame(1, $archive->query('//h1')->length);
            self::assertSame(1, $archive->query('//a[@href="/' . $locale . '/my-work"]')->length);
            $archiveLinks = $archive->query('//section[@aria-labelledby="resources-title"]//a');
            self::assertSame(2, $archiveLinks->length);
            foreach ($archiveLinks as $link) {
                self::assertSame('_blank', $link->getAttribute('target'));
                self::assertStringContainsString('noopener', $link->getAttribute('rel'));
            }
            self::assertSame(1, $archive->query('//figure[@id="project-preview"]')->length);
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
            if (!$file instanceof SplFileInfo || $file->getFilename() !== 'index.php') {
                continue;
            }

            $directory = str_replace('\\', '/', $file->getPath());
            $views[] = ltrim(substr($directory, strlen($localeRoot)), '/');
        }

        sort($views);
        return $views;
    }
}
