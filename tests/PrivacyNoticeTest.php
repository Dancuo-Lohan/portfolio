<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PrivacyNoticeTest extends TestCase
{
    public function testBothNoticesExplainAnalyticsAndRetentionWithoutAnOptOutControl(): void
    {
        foreach (['fr' => '25 mois', 'en' => '25 months'] as $locale => $retention) {
            $html = $this->renderView($locale . '/legal-notice');
            self::assertStringContainsString($retention, $html);
            self::assertStringContainsString('https://umami.is/', $html);
            self::assertStringContainsString('VPS', $html);
            self::assertStringContainsString('mailto:lohan@dancuo.fr', $html);
            self::assertStringContainsString('https://www.cnil.fr/fr/plaintes', $html);

            $document = new DOMDocument();
            $document->loadHTML('<!DOCTYPE html><html><head><meta charset="UTF-8"></head><body>' . $html . '</body></html>', LIBXML_NOERROR | LIBXML_NOWARNING);
            $xpath = new DOMXPath($document);
            self::assertSame(1, $xpath->query('//section[@id="privacy"]')->length);
            self::assertSame(0, $xpath->query('//*[@data-analytics-opt-out]')->length);
            self::assertSame(0, $xpath->query('//*[@id="analytics-status"]')->length);
            self::assertSame(3, $xpath->query('//*[@id="privacy"]/ul/li')->length);
            self::assertLessThanOrEqual(320, count(preg_split('/\s+/u', trim($xpath->query('//*[@id="privacy"]')->item(0)->textContent))));

            self::assertStringContainsString('/' . $locale . '/legal-notice#privacy', $this->renderView($locale . '/terms-and-conditions'));
        }
    }

    public function testBothNoticesUseTheCurrentWebsiteHostDetails(): void
    {
        foreach (['fr', 'en'] as $locale) {
            $html = $this->renderView($locale . '/legal-notice');
            self::assertStringContainsString('https://webstrator.com/mentions/legales', $html);
            self::assertStringContainsString('SIREN', $html);
            self::assertStringContainsString('17B Rue Jacques Limouzy, 81100 Castres, France', $html);
            self::assertStringNotContainsString('141 avenue de Lavaur', $html);
        }
    }

    private function renderView(string $view): string
    {
        ob_start();
        try {
            require PROJECT_ROOT . '/public/public_views/' . $view . '/index.php';
            return (string) ob_get_contents();
        } finally {
            ob_end_clean();
        }
    }
}
