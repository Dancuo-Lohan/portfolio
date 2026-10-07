<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class HomeViewTest extends TestCase
{
    public function testHomeSectionsStayAlignedWithoutASecondNavigation(): void
    {
        $anchorsByLocale = [];
        foreach (['fr', 'en'] as $locale) {
            $xpath = $this->renderHome($locale);
            self::assertSame(1, $xpath->query('//h1')->length);
            self::assertSame(0, $xpath->query('//*[@id="mindset"]')->length);
            foreach (['intro', 'projects', 'experience', 'skills', 'education'] as $id) {
                self::assertSame(1, $xpath->query('//*[@id="' . $id . '"]')->length);
            }
            self::assertSame(0, $xpath->query('//nav')->length);
            foreach ($xpath->query('//*[@data-language-scroll-anchor]') as $anchor) {
                $anchorsByLocale[$locale][] = $anchor->getAttribute('id');
            }
        }
        self::assertSame($anchorsByLocale['fr'], $anchorsByLocale['en']);
    }

    public function testProjectImagesAndLinksKeepTheirLocalizedDestination(): void
    {
        foreach (['fr', 'en'] as $locale) {
            $xpath = $this->renderHome($locale);
            $projects = $xpath->query('//*[@id="projects"]//article');
            self::assertSame(4, $projects->length);
            $titles = [];
            foreach ($projects as $index => $project) {
                self::assertTrue($project->hasAttribute('data-clickable-card'));
                self::assertStringStartsWith('/' . $locale . '/case-studies/', $project->getAttribute('data-card-url'));
                self::assertSame(0, $xpath->query('.//h3/a', $project)->length);
                self::assertSame(1, $xpath->query('.//a', $project)->length);
                self::assertSame(0, $xpath->query('.//a//img', $project)->length);
                self::assertSame($project->getAttribute('data-card-url'), $xpath->query('.//a', $project)->item(0)->getAttribute('href'));
                $titles[] = trim($xpath->query('.//h3', $project)->item(0)->textContent);
                self::assertGreaterThanOrEqual(2, $xpath->query('.//div[last()]/p', $project)->length);
                $images = $xpath->query('.//img', $project);
                self::assertSame(1, $images->length);
                $image = $images->item(0);
                self::assertSame($index === 0 ? 'eager' : 'lazy', $image->getAttribute('loading'));
                self::assertStringContainsString('object-contain', $image->getAttribute('class'));
                self::assertNotEmpty($image->getAttribute('alt'));
                foreach ($xpath->query('.//a', $project) as $link) {
                    self::assertStringStartsWith('/' . $locale . '/case-studies/', $link->getAttribute('href'));
                }
            }
            self::assertSame(['Steambot Chronicles Archive', 'CorianderPHP', 'Sans Suite', 'Room Calendars'], $titles);
        }
    }

    public function testIntroductionKeepsAPersonalPresentationAndExperienceLink(): void
    {
        foreach (['fr', 'en'] as $locale) {
            $xpath = $this->renderHome($locale);
            $intro = $xpath->query('//*[@id="intro"]')->item(0);
            self::assertStringContainsString('Lohan Dancuo.', $xpath->query('.//h1', $intro)->item(0)->textContent);
            $role = $xpath->query('.//*[@id="home-role"]', $intro);
            self::assertSame(1, $role->length);
            self::assertSame($locale === 'fr' ? 'Développeur fullstack' : 'Fullstack developer', trim($role->item(0)->textContent));
            self::assertSame(1, $xpath->query('.//a[@href="#experience"]', $intro)->length);
            $presentation = $xpath->query('.//*[@id="intro-presentation"]', $intro)->item(0);
            self::assertNotNull($presentation);
            self::assertSame(2, $xpath->query('./p', $presentation)->length);
            self::assertStringContainsString('Lyreco', $presentation->textContent);
            self::assertStringContainsString('Artois', $presentation->textContent);
            self::assertSame(1, $xpath->query('//*[@id="intro"]/../following-sibling::*[1][@id="projects"]')->length);
        }
    }

    public function testOnlyTheWorkCtaKeepsItsArrow(): void
    {
        foreach (['fr', 'en'] as $locale) {
            $xpath = $this->renderHome($locale);
            self::assertSame(1, $xpath->query('//*[@id="work-cta"]//a')->length);
            self::assertSame('block w-full', $xpath->query('//*[@id="work-cta"]/span')->item(0)->getAttribute('class'));
            self::assertStringNotContainsString('text-6xl', $xpath->query('//*[@id="work-cta"]//h2')->item(0)->getAttribute('class'));
            foreach ($xpath->query('//a[not(ancestor::*[@id="work-cta"])]') as $link) {
                self::assertStringNotContainsString(html_entity_decode('&rarr;'), $link->textContent);
                self::assertStringNotContainsString(html_entity_decode('&nearr;'), $link->textContent);
            }
            self::assertSame(1, $xpath->query('//*[@id="project-steambot"]//img')->length);
        }
    }

    public function testSkillsKeepVisibleNamesAlongsideTheirLogosWithoutDisclosure(): void
    {
        $titles = [
            'fr' => ['Autres technologies utilisées'],
            'en' => ["Other technologies I've used"],
        ];
        foreach ($titles as $locale => $expected) {
            $xpath = $this->renderHome($locale);
            $headings = $xpath->query('//*[@id="skills"]//h3');
            self::assertSame(1, $headings->length);
            foreach ($headings as $index => $heading) {
                self::assertSame($expected[$index], trim($heading->textContent));
                $paragraph = $xpath->query('./following-sibling::p', $heading)->item(0);
                self::assertNotNull($paragraph);
                self::assertLessThanOrEqual(50, count(preg_split('/\s+/u', trim($paragraph->textContent))));
            }
            self::assertSame(0, $xpath->query('//*[@id="skills"]//a[@href="/' . $locale . '/case-studies/steambotChronicles"]')->length);
            self::assertSame(0, $xpath->query('//*[@id="projects"]//a[@href="/' . $locale . '/my-work"]')->length);
            self::assertSame(0, $xpath->query('//*[@id="skills"]//details')->length);
            $logos = $xpath->query('//*[@id="skills"]//img');
            self::assertGreaterThan(0, $logos->length);
            foreach ($logos as $logo) {
                self::assertSame('lazy', $logo->getAttribute('loading'));
                self::assertSame('', $logo->getAttribute('alt'));
                self::assertNotEmpty(trim($xpath->query('./ancestor::li[1]', $logo)->item(0)->textContent));
            }
            self::assertSame(4, $xpath->query('//*[@id="skills"]//dl/dt | //*[@id="skills"]//dl/div/dt')->length);
            $other = $xpath->query('//*[@id="other-technologies"]')->item(0);
            self::assertStringContainsString('Java', $other->textContent);
            self::assertStringContainsString('Python', $other->textContent);
            self::assertStringContainsString('Minecraft', $other->textContent);
        }
    }

    public function testLyrecoExperienceIncludesFormBasedLowCodeAutomation(): void
    {
        foreach (['fr', 'en'] as $locale) {
            $xpath = $this->renderHome($locale);
            $experience = $xpath->query('//*[@id="experience-2022-09"]')->item(0);
            self::assertNotNull($experience);
            $points = $xpath->query('.//li', $experience);
            self::assertSame(4, $points->length);
            self::assertStringContainsString('Laserfiche', $points->item(2)->textContent);
            self::assertStringContainsString('low-code', $points->item(2)->textContent);
            self::assertStringContainsString($locale === 'fr' ? 'formulaires' : 'forms', $points->item(2)->textContent);
            $certificate = $xpath->query('//*[@id="education"]//aside')->item(0);
            self::assertStringContainsString('Opquast', $certificate->textContent);
            self::assertStringContainsString('2023', $certificate->textContent);
        }
    }

    public function testCarbonBadgeStartsHiddenOnlyOnHomeAndStillLoadsItsScript(): void
    {
        foreach (['fr', 'en'] as $locale) {
            foreach (['home', 'contact-me'] as $view) {
                $__corianderRequestedView = $locale . '/' . $view;
                ob_start();
                try {
                    require PROJECT_ROOT . '/public/public_views/footer.php';
                    $html = (string) ob_get_contents();
                } finally {
                    ob_end_clean();
                }
                $document = new DOMDocument();
                self::assertTrue($document->loadHTML($html, LIBXML_NOERROR | LIBXML_NOWARNING));
                self::assertSame($view === 'home', $document->getElementById('wcb')->hasAttribute('hidden'));
                self::assertStringContainsString('website-carbon-badges@1.1.3/b.min.js', $html);
            }
        }
    }

    private function renderHome(string $currentLocale): DOMXPath
    {
        ob_start();
        try {
            require PROJECT_ROOT . '/public/public_views/' . $currentLocale . '/home/index.php';
            $html = (string) ob_get_contents();
        } finally {
            ob_end_clean();
        }
        $document = new DOMDocument();
        self::assertTrue($document->loadHTML('<meta charset="utf-8">' . $html, LIBXML_NOERROR | LIBXML_NOWARNING));
        return new DOMXPath($document);
    }
}
