<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class WorkViewTest extends TestCase
{
    public function testCaseStudyOrderAndCardLinksMatchInBothLanguages(): void
    {
        $studies = [
            'steambotChronicles' => 'Steambot Chronicles Archive',
            'corianderPHP' => 'CorianderPHP',
            'sansSuite' => 'Sans Suite',
            'roomCalendars' => 'Room Calendars',
        ];
        foreach (['fr', 'en'] as $locale) {
            ob_start();
            try {
                require PROJECT_ROOT . '/public/public_views/' . $locale . '/my-work/index.php';
                $html = (string) ob_get_contents();
            } finally {
                ob_end_clean();
            }
            $document = new DOMDocument();
            self::assertTrue($document->loadHTML('<meta charset="utf-8">' . $html, LIBXML_NOERROR | LIBXML_NOWARNING));
            $xpath = new DOMXPath($document);
            self::assertSame(1, $xpath->query('//h1')->length);
            $cards = $xpath->query('//*[@id="case-studies"]//article');
            self::assertSame(4, $cards->length);
            foreach (array_keys($studies) as $index => $slug) {
                $card = $cards->item($index);
                $url = '/' . $locale . '/case-studies/' . $slug;
                self::assertSame($url, $card->getAttribute('data-card-url'));
                self::assertTrue($card->hasAttribute('data-clickable-card'));
                self::assertSame($studies[$slug], trim($xpath->query('.//h3', $card)->item(0)->textContent));
                $links = $xpath->query('.//a', $card);
                self::assertSame(1, $links->length);
                self::assertSame($url, $links->item(0)->getAttribute('href'));
                self::assertSame(0, $xpath->query('.//a//h3', $card)->length);
            }
            foreach ($xpath->query('//article') as $card) {
                $gradients = $xpath->query('.//*[@data-card-gradient]', $card);
                self::assertSame(1, $gradients->length);
                $gradient = $gradients->item(0);
                self::assertSame('true', $gradient->getAttribute('aria-hidden'));
                $classes = $gradient->getAttribute('class');
                self::assertStringContainsString('group-hover/card:translate-x-0', $classes);
                self::assertStringContainsString('group-focus-within/card:translate-x-0', $classes);
                self::assertStringContainsString('motion-reduce:transition-none', $classes);
                self::assertStringContainsString(str_contains($card->getAttribute('data-card-url'), '/components/') ? 'bg-gradient-to-r' : 'bg-gradient-to-l', $classes);
                $images = $xpath->query('.//img', $card);
                self::assertSame(1, $images->length);
                self::assertSame('lazy', $images->item(0)->getAttribute('loading'));
                self::assertStringContainsString('object-contain', $images->item(0)->getAttribute('class'));
                self::assertStringContainsString('rounded-md', $images->item(0)->getAttribute('class'));
            }
            self::assertSame(1, $xpath->query('//*[@id="components"]//article')->length);
        }
    }
}
