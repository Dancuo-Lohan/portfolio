<?php

use CorianderCore\Core\Image\ImageHandler;

$homeContent = [
    'introLabel' => 'Hello, I\'m',
    'presentation' => 'I develop web applications, working on both the interfaces and the code that runs on the server. I enjoy being involved in their design and talking with users to understand what they need from the software.',
    'personalProjects' => 'Most of my professional work has been on internal applications at Lyreco and Université d\'Artois. Alongside this, I develop personal projects to try new ideas and explore topics in more depth.',
    'experienceLink' => 'View my experience',
    'role' => 'Fullstack developer',
    'workLink' => 'View my work',
    'experienceTitle' => 'My experience',
    'experienceIntro' => 'After working on client websites at MiCorp, I developed internal applications at Lyreco and Université d\'Artois.',
    'experience' => [
        [
            'company' => 'Université d\'Artois',
            'role' => 'Fullstack developer',
            'contract' => 'Fixed-term contract',
            'location' => 'Arras, France',
            'start' => '2024-11',
            'end' => '2025-11',
            'period' => 'Nov. 2024 – Nov. 2025',
            'intro' => 'I helped design and develop an internal application to bring together product and public procurement information that had previously been spread across several files.',
            'points' => [
                'Worked with business users to understand their needs and design the interfaces.',
                'Built product search, a basket and an export to the existing ordering tool, with SSO authentication.',
                'Handled development, specifications, documentation, task planning and project follow-up.',
            ],
            'stack' => 'Laravel · PHP · TypeScript · Tailwind CSS · SQL · GitLab',
        ],
        [
            'company' => 'Lyreco France',
            'role' => 'Web application developer',
            'contract' => 'Apprenticeship',
            'location' => 'Marly, France',
            'start' => '2022-09',
            'end' => '2024-09',
            'period' => 'Sept. 2022 – Sept. 2024',
            'intro' => 'I designed and developed internal applications with business users. One of them was Room Calendars, which helps employees check room availability and find a meeting from a participant\'s name.',
            'points' => [
                'Created mockups, developed the back-end and front-end, and deployed applications.',
                'Integrated Microsoft Graph and Microsoft SSO, access permissions and data caching.',
                'Automated workflows starting from forms with Laserfiche, a low-code tool.',
                'Contributed to tests, CI/CD and code reviews, and supported interns and other apprentices.',
            ],
            'stack' => 'PHP · TypeScript · Tailwind CSS · Microsoft Graph · Laserfiche · GitHub',
            'link' => '/en/case-studies/roomCalendars',
            'linkLabel' => 'Read the Room Calendars case study',
        ],
        [
            'company' => 'MiCorp — FeedMi France',
            'role' => 'Web application developer',
            'contract' => 'Apprenticeship',
            'location' => 'Lille, France',
            'start' => '2021-10',
            'end' => '2022-07',
            'period' => 'Oct. 2021 – July 2022',
            'intro' => 'I worked on redesigning client websites and developing features for a meal-ordering platform, both on the user-facing interface and in the back office.',
            'points' => [
                'Implemented mockups and developed features with PHP and Yii.',
                'Presented progress to clients and adapted features based on their feedback.',
                'Took part in presenting a project to a banking partner.',
            ],
            'stack' => 'PHP · Yii · GitHub',
        ],
    ],
    'projectsTitle' => 'Explore the projects',
    'projectsIntro' => 'What needed solving? Why choose that approach? These case studies tell the part of the story you can\'t see in a screenshot.',
    'caseLabel' => 'Read case study',
    'projects' => [
        [
            'title' => 'Steambot Chronicles Archive',
            'period' => '2026',
            'context' => 'Video game archive',
            'image' => '/public/assets/img/case-studies/thumbnails-steambotChronicles.jpg',
            'alt' => 'Homepage of the Steambot Chronicles Archive website.',
            'hook' => 'What remains of a game when its websites disappear?',
            'summary' => 'I created this archive to bring together images, music and documents from my favourite game. A 3D builder also lets visitors assemble its vehicles, the Trotmobiles.',
            'url' => '/en/case-studies/steambotChronicles',
        ],
        [
            'title' => 'CorianderPHP',
            'period' => 'Since 2024',
            'context' => 'Personal R&D project',
            'image' => '/public/assets/img/case-studies/thumbnails-corianderPHP.jpg',
            'alt' => 'Preview of the CorianderPHP documentation website.',
            'hook' => 'Understanding the tools I use.',
            'summary' => 'Rather than stopping at framework APIs, I wanted to build some of the mechanisms behind them. CorianderPHP is where I learn, experiment and develop my smaller PHP projects.',
            'url' => '/en/case-studies/corianderPHP',
        ],
        [
            'title' => 'Sans Suite',
            'period' => '2026',
            'context' => 'Personal application',
            'image' => '/public/assets/img/case-studies/thumbnails-sansSuite.jpg',
            'alt' => 'Overview of the Sans Suite application.',
            'hook' => 'Record an application without a lengthy form.',
            'summary' => 'Four required fields to get started, then notes, documents and a calendar to keep track of what comes next. I built this tool for my own job search.',
            'url' => '/en/case-studies/sansSuite',
        ],
        [
            'title' => 'Room Calendars',
            'period' => '2024',
            'context' => 'Internal application · Lyreco',
            'image' => '/public/assets/img/case-studies/thumbnails-roomCalendars.jpg',
            'alt' => 'Mockup of the Room Calendars application.',
            'hook' => 'Which room is free? Where is this meeting taking place?',
            'summary' => 'At Lyreco, I built an interface that brings room availability together and helps reception teams find a meeting. Booking stays in Outlook; the application makes the information easier to check.',
            'url' => '/en/case-studies/roomCalendars',
        ],
    ],
    'skillsTitle' => 'Technical skills',
    'skills' => [
        [
            'title' => 'Back-end',
            'technologies' => [
                ['name' => 'PHP 7.4 – 8.5', 'image' => 'mainStack/php.png'],
                ['name' => 'Laravel', 'image' => 'sideStack/laravel.png'],
                ['name' => 'Symfony', 'image' => 'sideStack/symfony.png'],
                ['name' => 'Yii', 'image' => 'sideStack/yii.png'],
            ],
        ],
        [
            'title' => 'Front-end',
            'technologies' => [
                ['name' => 'TypeScript', 'image' => 'mainStack/typescript.png'],
                ['name' => 'JavaScript', 'image' => 'mainStack/javascript.png'],
                ['name' => 'HTML', 'image' => 'mainStack/html.png'],
                ['name' => 'CSS', 'image' => 'mainStack/css.png'],
                ['name' => 'Tailwind CSS', 'image' => 'mainStack/tailwind.png'],
            ],
        ],
        [
            'title' => 'Data & integrations',
            'technologies' => [
                ['name' => 'MySQL', 'image' => 'mainStack/mysql.png'],
                ['name' => 'SQLite', 'image' => 'mainStack/sqlite.png'],
                ['name' => 'Oracle', 'image' => 'mainStack/oracle.png'],
                ['name' => 'Microsoft Graph', 'image' => 'sideStack/microsoftgraphapi.png'],
                ['name' => 'SSO'],
            ],
        ],
        [
            'title' => 'Design & workflow',
            'technologies' => [
                ['name' => 'Figma', 'image' => 'mainStack/figma.png'],
                ['name' => 'Git'],
                ['name' => 'GitHub', 'image' => 'mainStack/github.png'],
                ['name' => 'GitLab'],
                ['name' => 'Tests'],
                ['name' => 'CI/CD'],
            ],
        ],
    ],
    'otherSkillsLabel' => 'Other technologies I\'ve used',
    'otherSkills' => 'Node.js, Bun, React, Next.js, Electron, Three.js, Python, Django, C#, Java, Godot, Skript, Laserfiche.',
    'educationTitle' => 'Education',
    'education' => [
        [
            'period' => '2022 – 2024',
            'title' => 'Digital project strategy and development management',
            'school' => 'ECV Digital · Lille, France',
            'level' => 'French Bac+5 qualification · RNCP34758',
        ],
        [
            'period' => '2021 – 2022',
            'title' => 'Web development bachelor\'s programme',
            'school' => 'MyDigitalSchool · Lille, France',
            'level' => 'French Bac+3 qualification',
        ],
        [
            'period' => '2019 – 2021',
            'title' => 'BTS in digital systems, IT and networks',
            'school' => 'Lycée Alphonse Benoit · L\'Isle-sur-la-Sorgue, France',
            'level' => 'French Bac+2 qualification',
        ],
    ],
    'certTitle' => 'Opquast certification',
    'certText' => 'I have been Opquast certified since 2023. The certification covers web quality: accessibility, user experience and good practices. These are things I pay attention to in my projects.',
    'certLabel' => 'View my certificate',
    'closing' => 'What does that look like in practice?',
];

?>
<div class="mx-auto max-w-6xl px-5 sm:px-8 lg:px-10">
    <section id="intro" data-language-scroll-anchor class="border-b border-dark-green/20 pb-10 pt-10 dark:border-accent-green/25 sm:pb-12 sm:pt-14" aria-labelledby="home-title">
        <p class="text-base text-black/65 dark:text-white/65"><?= htmlspecialchars($homeContent['introLabel']) ?></p>
        <h1 id="home-title" class="mt-2 font-concert-one text-4xl leading-tight text-black dark:text-white sm:text-6xl">
            Lohan Dancuo.
        </h1>
        <p id="home-role" class="mt-3 text-lg font-semibold text-dark-green dark:text-accent-green sm:text-xl"><?= htmlspecialchars($homeContent['role']) ?></p>
        <div id="intro-presentation" class="mt-6 max-w-3xl space-y-4 text-base leading-relaxed text-black/80 dark:text-white/80 sm:text-lg">
            <p><?= htmlspecialchars($homeContent['presentation']) ?></p>
            <p><?= htmlspecialchars($homeContent['personalProjects']) ?></p>
        </div>
        <a href="#experience" class="mt-6 inline-flex min-h-11 items-center rounded-md bg-dark-green px-4 py-2 text-sm font-semibold text-white transition hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 motion-reduce:transition-none dark:bg-accent-green dark:text-black"><?= htmlspecialchars($homeContent['experienceLink']) ?></a>
    </section>
</div>

<section id="projects" data-language-scroll-anchor class="scroll-mt-24 py-9 sm:py-12" aria-labelledby="projects-title">
    <div class="mx-auto max-w-6xl px-5 sm:px-8 lg:px-10">
        <h2 id="projects-title" class="font-concert-one text-3xl text-black dark:text-white sm:text-4xl"><?= htmlspecialchars($homeContent['projectsTitle']) ?></h2>
        <p class="mt-3 max-w-2xl text-base leading-relaxed text-black/70 dark:text-white/70"><?= htmlspecialchars($homeContent['projectsIntro']) ?></p>
        <div class="mt-8 grid gap-x-8 gap-y-10 md:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($homeContent['projects'] as $index => $project) { ?>
                <article id="<?= $index === 0 ? 'project-steambot' : 'project-' . $index ?>" data-language-scroll-anchor data-clickable-card data-card-url="<?= htmlspecialchars($project['url'], ENT_QUOTES, 'UTF-8') ?>" class="group/project relative isolate cursor-pointer before:pointer-events-none before:absolute before:-inset-3 before:-z-10 before:rounded-md before:bg-gradient-to-br before:from-transparent before:from-40% before:to-dark-green/10 before:opacity-0 before:transition-opacity before:duration-300 before:ease-in-out hover:before:opacity-100 focus-within:before:opacity-100 motion-reduce:before:transition-none dark:before:to-accent-green/10 <?= $index === 0 ? 'grid min-w-0 gap-4 md:col-span-2 md:grid-cols-[minmax(0,1.2fr)_minmax(0,1fr)] md:gap-x-10 lg:col-span-3' : 'grid min-w-0 grid-rows-[auto_auto_1fr] gap-4 border-t border-black/15 pt-5 dark:border-white/15' ?>">
                    <div class="<?= $index === 0 ? 'md:col-start-2 md:row-start-1 md:self-end' : '' ?>">
                        <p class="flex flex-wrap items-baseline gap-x-3 gap-y-1 text-xs leading-relaxed text-black/60 dark:text-white/65">
                            <span><?= htmlspecialchars($project['context']) ?></span>
                            <span class="tabular-nums"><?= htmlspecialchars($project['period']) ?></span>
                        </p>
                        <h3 class="mt-2 font-concert-one <?= $index === 0 ? 'text-3xl lg:text-4xl' : 'text-2xl sm:text-3xl md:text-2xl lg:text-3xl' ?> text-black dark:text-white">
                            <span class="bg-[linear-gradient(currentColor,currentColor)] bg-no-repeat [background-position:left_bottom] [background-size:0%_2px] pb-1 transition-[background-size] duration-300 ease-in-out group-hover/project:[background-size:100%_2px] group-focus-within/project:[background-size:100%_2px] motion-reduce:transition-none"><?= htmlspecialchars($project['title']) ?></span>
                        </h3>
                    </div>
                    <div class="<?= $index === 0 ? 'md:col-start-1 md:row-span-2 md:row-start-1 md:self-center' : '' ?> mx-auto block w-[88%] max-w-[17.5rem] rounded-md md:w-full md:max-w-none">
                        <?= ImageHandler::render($project['image'], [
                            'alt' => $project['alt'],
                            'pictureClass' => 'block',
                            'class' => 'aspect-[8/5] h-auto w-full rounded-md object-contain',
                            'loading' => $index === 0 ? 'eager' : 'lazy',
                            'decoding' => 'async',
                            'draggable' => 'false',
                        ]) ?>
                    </div>
                    <div class="<?= $index === 0 ? 'md:col-start-2 md:row-start-2 md:self-start' : 'flex flex-col' ?>">
                        <p class="<?= $index === 0 ? 'text-lg' : 'text-base' ?> font-semibold leading-snug text-black dark:text-white"><?= htmlspecialchars($project['hook']) ?></p>
                        <p class="mt-3 text-sm leading-relaxed text-black/75 dark:text-white/75"><?= htmlspecialchars($project['summary']) ?></p>
                        <div class="<?= $index === 0 ? 'mt-4' : 'mt-auto pt-4' ?>">
                            <a href="<?= htmlspecialchars($project['url']) ?>" class="inline-flex min-h-11 items-center text-sm font-semibold text-dark-green underline decoration-dark-green/35 underline-offset-4 hover:decoration-dark-green focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:text-accent-green dark:decoration-accent-green/40 dark:hover:decoration-accent-green">
                                <?= htmlspecialchars($homeContent['caseLabel']) ?><span class="sr-only">: <?= htmlspecialchars($project['title']) ?></span>
                            </a>
                        </div>
                    </div>
                </article>
            <?php } ?>
        </div>
    </div>
</section>

<section id="experience" data-language-scroll-anchor class="scroll-mt-24 bg-[#EDF2F5] py-12 dark:bg-[#1C252B] sm:py-16" aria-labelledby="experience-title">
    <div class="mx-auto max-w-6xl px-5 sm:px-8 lg:px-10">
        <div class="max-w-2xl">
            <h2 id="experience-title" class="font-concert-one text-3xl text-black dark:text-white sm:text-4xl"><?= htmlspecialchars($homeContent['experienceTitle']) ?></h2>
            <p class="mt-3 text-sm leading-relaxed text-black/65 dark:text-white/65"><?= htmlspecialchars($homeContent['experienceIntro']) ?></p>
        </div>
        <ol class="mt-8">
            <?php foreach ($homeContent['experience'] as $experience) { ?>
                <li id="experience-<?= htmlspecialchars($experience['start']) ?>" data-language-scroll-anchor class="relative grid gap-4 border-l border-black/20 pb-9 pl-6 last:pb-0 dark:border-white/20 md:grid-cols-[14rem_minmax(0,1fr)] md:gap-10 md:pl-8">
                    <span class="absolute -left-[5px] top-1 h-[9px] w-[9px] rounded-full bg-[#48677C] dark:bg-[#96BDD4]" aria-hidden="true"></span>
                    <div>
                        <p class="text-xs font-medium tabular-nums text-black/60 dark:text-white/60">
                            <time datetime="<?= htmlspecialchars($experience['start']) ?>"><?= htmlspecialchars(explode(' – ', $experience['period'])[0]) ?></time>
                            <span aria-hidden="true">&ndash;</span>
                            <time datetime="<?= htmlspecialchars($experience['end']) ?>"><?= htmlspecialchars(explode(' – ', $experience['period'])[1]) ?></time>
                        </p>
                        <h3 class="mt-3 font-concert-one text-2xl text-black dark:text-white"><?= htmlspecialchars($experience['company']) ?></h3>
                        <p class="mt-2 text-sm font-semibold text-black dark:text-white"><?= htmlspecialchars($experience['role']) ?></p>
                        <p class="mt-2 text-xs leading-relaxed text-black/55 dark:text-white/60"><?= htmlspecialchars($experience['contract']) ?> · <?= htmlspecialchars($experience['location']) ?></p>
                    </div>
                    <div class="min-w-0">
                        <p class="text-sm leading-relaxed text-black/85 dark:text-white/85"><?= htmlspecialchars($experience['intro']) ?></p>
                        <ul class="mt-4 list-disc space-y-2 pl-4 text-sm leading-relaxed text-black/70 marker:text-[#48677C] dark:text-white/70 dark:marker:text-[#96BDD4]">
                            <?php foreach ($experience['points'] as $point) { ?>
                                <li><?= htmlspecialchars($point) ?></li>
                            <?php } ?>
                        </ul>
                        <p class="mt-4 text-xs font-medium leading-relaxed text-black/55 dark:text-white/60"><?= htmlspecialchars($experience['stack']) ?></p>
                        <?php if (isset($experience['link'])) { ?>
                            <a href="<?= htmlspecialchars($experience['link']) ?>" class="mt-3 inline-flex min-h-11 items-center gap-3 text-sm font-semibold text-dark-green underline underline-offset-4 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:text-accent-green"><?= htmlspecialchars($experience['linkLabel']) ?></a>
                        <?php } ?>
                    </div>
                </li>
            <?php } ?>
        </ol>
    </div>
</section>

<div class="mx-auto max-w-6xl px-5 sm:px-8 lg:px-10">
    <section id="skills" data-language-scroll-anchor class="scroll-mt-24 py-12 sm:py-16" aria-labelledby="skills-title">
        <h2 id="skills-title" class="font-concert-one text-3xl text-black dark:text-white sm:text-4xl"><?= htmlspecialchars($homeContent['skillsTitle']) ?></h2>
        <dl class="mt-8 grid gap-x-12 gap-y-9 lg:grid-cols-2">
            <?php foreach ($homeContent['skills'] as $skill) { ?>
                <div class="min-w-0 border-t border-dark-green/15 pt-5 dark:border-accent-green/20">
                    <dt class="text-lg font-semibold text-black dark:text-white"><?= htmlspecialchars($skill['title']) ?></dt>
                    <dd class="mt-4">
                        <ul class="flex flex-wrap gap-x-5 gap-y-4">
                            <?php foreach ($skill['technologies'] as $technology) { ?>
                                <li class="flex min-h-9 items-center gap-2.5">
                                    <?php if (isset($technology['image'])) { ?>
                                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-md bg-true-white">
                                            <?= ImageHandler::render('/public/assets/img/' . $technology['image'], [
                                                'alt' => '',
                                                'pictureClass' => 'block',
                                                'class' => 'h-8 w-8 object-contain',
                                                'loading' => 'lazy',
                                                'decoding' => 'async',
                                                'convert' => false,
                                                'draggable' => 'false',
                                            ]) ?>
                                        </span>
                                    <?php } ?>
                                    <span class="text-sm font-medium text-black dark:text-white"><?= htmlspecialchars($technology['name']) ?></span>
                                </li>
                            <?php } ?>
                        </ul>
                    </dd>
                </div>
            <?php } ?>
        </dl>
        <div id="other-technologies" data-language-scroll-anchor class="mt-7 border-t border-black/15 pt-5 dark:border-white/15">
            <h3 class="text-sm font-semibold text-black/75 dark:text-white/75"><?= htmlspecialchars($homeContent['otherSkillsLabel']) ?></h3>
            <p class="mt-3 max-w-4xl text-base leading-relaxed text-black dark:text-white"><?= htmlspecialchars($homeContent['otherSkills']) ?></p>
            <p class="mt-2 text-sm leading-relaxed text-black/60 dark:text-white/60">Java for Minecraft plugins and mods; Python in a data analysis project during my studies.</p>
        </div>
    </section>

    <section id="education" data-language-scroll-anchor class="scroll-mt-24 border-t border-black/15 py-12 dark:border-white/15 sm:py-16" aria-labelledby="education-title">
        <div class="grid gap-10 lg:grid-cols-[minmax(0,1fr)_18rem]">
            <div>
                <h2 id="education-title" class="font-concert-one text-3xl text-black dark:text-white sm:text-4xl"><?= htmlspecialchars($homeContent['educationTitle']) ?></h2>
                <ol class="mt-7 space-y-6">
                    <?php foreach ($homeContent['education'] as $education) { ?>
                        <li class="grid gap-2 sm:grid-cols-[7rem_minmax(0,1fr)] sm:gap-5">
                            <p class="text-xs font-medium tabular-nums text-black/60 dark:text-white/60"><?= htmlspecialchars($education['period']) ?></p>
                            <div>
                                <h3 class="text-sm font-semibold text-black dark:text-white"><?= htmlspecialchars($education['title']) ?></h3>
                                <p class="mt-1 text-sm text-black/60 dark:text-white/60"><?= htmlspecialchars($education['school']) ?></p>
                                <p class="mt-1 text-xs text-black/55 dark:text-white/60"><?= htmlspecialchars($education['level']) ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ol>
            </div>
            <aside class="self-start border-l-2 border-[#48677C]/40 pl-5 dark:border-[#96BDD4]/40">
                <?= ImageHandler::render('/public/assets/img/opquast.png', [
                    'alt' => $currentLocale === 'fr' ? 'Badge Opquast.' : 'Opquast badge.',
                    'pictureClass' => 'block',
                    'class' => 'h-auto w-20 object-contain',
                    'loading' => 'lazy',
                    'decoding' => 'async',
                ]) ?>
                <h3 class="mt-4 text-sm font-semibold"><?= htmlspecialchars($homeContent['certTitle']) ?></h3>
                <p class="mt-2 text-sm leading-relaxed text-black/65 dark:text-white/65"><?= htmlspecialchars($homeContent['certText']) ?></p>
                <a href="https://directory.opquast.com/fr/certificat/7XJFKT/" target="_blank" rel="noopener noreferrer" class="mt-3 inline-flex min-h-11 items-center gap-3 text-sm font-semibold text-dark-green underline underline-offset-4 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:text-accent-green"><?= htmlspecialchars($homeContent['certLabel']) ?><span class="sr-only">(<?= $currentLocale === 'fr' ? 'nouvel onglet' : 'new tab' ?>)</span></a>
            </aside>
        </div>
    </section>

    <section id="work-cta" data-language-scroll-anchor class="py-14 sm:py-20">
        <span class="block w-full">
            <h2 class="block font-concert-one text-3xl text-black dark:text-white sm:text-4xl">
                <?= htmlspecialchars($homeContent['closing']) ?>
            </h2>
            <a href="/<?= htmlspecialchars($currentLocale) ?>/my-work" class="group relative mt-8 inline-flex min-w-[min(100%,22rem)] max-w-full items-center gap-4 pb-5 pr-14 font-poppins text-base font-semibold text-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-8 focus-visible:outline-dark-green dark:text-white dark:focus-visible:outline-accent-green sm:pr-20 sm:text-xl md:text-2xl">
                <?= htmlspecialchars($homeContent['workLink']) ?>
                <span class="pointer-events-none absolute bottom-0 left-0 h-px w-full bg-dark-green/20 dark:bg-accent-green/25" aria-hidden="true"></span>
                <span class="pointer-events-none absolute bottom-0 left-0 h-1 w-14 bg-dark-green transition-[width] duration-500 ease-in-out group-hover:w-full group-focus-visible:w-full motion-reduce:transition-none dark:bg-accent-green" aria-hidden="true"></span>
                <span class="absolute right-8 inline-block text-3xl leading-none transition-[right] duration-500 ease-in-out group-hover:right-0 group-focus-visible:right-0 motion-reduce:transition-none" aria-hidden="true">&rarr;</span>
            </a>
        </span>
    </section>
</div>
