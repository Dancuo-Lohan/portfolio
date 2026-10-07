<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ContactViewTest extends TestCase
{
    public function testBothContactViewsKeepAccessibleExternalProfileLinks(): void
    {
        $profiles = [
            'LinkedIn' => 'https://www.linkedin.com/in/lohan-dancuo/',
            'GitHub' => 'https://github.com/Dancuo-Lohan',
        ];
        foreach (['fr', 'en'] as $locale) {
            ob_start();
            try {
                require PROJECT_ROOT . '/public/public_views/' . $locale . '/contact-me/index.php';
                $html = (string) ob_get_contents();
            } finally {
                ob_end_clean();
            }
            $document = new DOMDocument();
            self::assertTrue($document->loadHTML('<meta charset="utf-8">' . $html, LIBXML_NOERROR | LIBXML_NOWARNING));
            $xpath = new DOMXPath($document);
            self::assertSame(1, $xpath->query('//h1[@id="contact-title"]')->length);
            self::assertSame(1, $xpath->query('//*[@id="contact"][@data-language-scroll-anchor]')->length);
            self::assertSame(0, $xpath->query('//form')->length);
            self::assertSame(0, $xpath->query('//a[starts-with(@href,"mailto:")]')->length);
            self::assertStringNotContainsString('lohan@dancuo.fr', $html);
            self::assertSame(2, $xpath->query('//ul/li/a')->length);
            foreach ($profiles as $name => $url) {
                $links = $xpath->query('//a[@href="' . $url . '"]');
                self::assertSame(1, $links->length);
                $link = $links->item(0);
                self::assertStringContainsString($name, $link->textContent);
                self::assertSame('_blank', $link->getAttribute('target'));
                self::assertStringContainsString('noopener', $link->getAttribute('rel'));
                self::assertStringContainsString('noreferrer', $link->getAttribute('rel'));
                self::assertSame(1, $xpath->query('.//img', $link)->length);
                self::assertSame(1, $xpath->query('.//span[@class="sr-only"]', $link)->length);
            }
        }
    }
}
