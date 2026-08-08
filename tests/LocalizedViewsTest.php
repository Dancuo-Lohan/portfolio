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
