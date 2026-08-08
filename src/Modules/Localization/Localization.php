<?php
declare(strict_types=1);

namespace Modules\Localization;

final class Localization
{
    public const DEFAULT_LOCALE = 'en';
    public const SUPPORTED_LOCALES = ['en', 'fr'];

    /**
     * @return string[]
     */
    public static function supportedLocales(): array
    {
        return self::SUPPORTED_LOCALES;
    }

    public static function normalizeLocale(?string $locale): ?string
    {
        if ($locale === null) {
            return null;
        }

        $locale = strtolower(trim($locale));
        $locale = str_replace('_', '-', $locale);
        $locale = explode('-', $locale)[0] ?? '';

        return in_array($locale, self::SUPPORTED_LOCALES, true) ? $locale : null;
    }

    public static function preferredLocale(?string $acceptLanguage, ?string $cookieLocale = null): string
    {
        $cookieLocale = self::normalizeLocale($cookieLocale);
        if ($cookieLocale !== null) {
            return $cookieLocale;
        }

        foreach (self::parseAcceptLanguage($acceptLanguage) as $locale) {
            $normalized = self::normalizeLocale($locale);
            if ($normalized !== null) {
                return $normalized;
            }
        }

        return self::DEFAULT_LOCALE;
    }

    /**
     * @return string[]
     */
    private static function parseAcceptLanguage(?string $acceptLanguage): array
    {
        if (!is_string($acceptLanguage) || trim($acceptLanguage) === '') {
            return [];
        }

        $locales = [];
        foreach (explode(',', $acceptLanguage) as $part) {
            $segments = explode(';q=', trim($part));
            $locale = trim($segments[0] ?? '');
            $quality = isset($segments[1]) ? (float) $segments[1] : 1.0;
            if ($locale !== '') {
                $locales[] = ['locale' => $locale, 'quality' => $quality];
            }
        }

        usort($locales, static fn(array $a, array $b): int => $b['quality'] <=> $a['quality']);

        return array_map(static fn(array $entry): string => $entry['locale'], $locales);
    }

    public static function localeFromViewPath(string $viewPath): ?string
    {
        $firstSegment = explode('/', trim($viewPath, '/'))[0] ?? '';
        return self::normalizeLocale($firstSegment);
    }

    public static function stripLocale(string $viewPath): string
    {
        $segments = array_values(array_filter(explode('/', trim($viewPath, '/')), 'strlen'));
        if ($segments !== [] && self::normalizeLocale($segments[0]) !== null) {
            array_shift($segments);
        }

        return implode('/', $segments) ?: 'home';
    }

    public static function localizedPath(string $viewPath, string $locale): string
    {
        $locale = self::normalizeLocale($locale) ?? self::DEFAULT_LOCALE;
        return '/' . $locale . '/' . self::stripLocale($viewPath);
    }

    public static function switchPath(string $viewPath, string $targetLocale): string
    {
        return self::localizedPath(self::stripLocale($viewPath), $targetLocale);
    }

    public static function activeMenu(string $viewPath): string
    {
        $viewPath = self::stripLocale($viewPath);

        if (str_starts_with($viewPath, 'components/') || str_starts_with($viewPath, 'case-studies/')) {
            return 'my-work';
        }

        if (str_starts_with($viewPath, 'contact-me/')) {
            return 'contact-me';
        }

        return $viewPath;
    }

    /**
     * @return array{home:string,work:string,contact:string,legal:string,terms:string,language:string,theme:string}
     */
    public static function labels(string $locale): array
    {
        return match (self::normalizeLocale($locale) ?? self::DEFAULT_LOCALE) {
            'fr' => [
                'home' => 'Accueil',
                'work' => 'Mes projets',
                'contact' => 'Contact',
                'legal' => 'Mentions légales',
                'terms' => 'Conditions générales',
                'language' => 'Langue',
                'theme' => 'Changer le thème',
            ],
            default => [
                'home' => 'Home',
                'work' => 'My work',
                'contact' => 'Contact me',
                'legal' => 'Legal notice',
                'terms' => 'Terms and conditions',
                'language' => 'Language',
                'theme' => 'Change page theme',
            ],
        };
    }
}
