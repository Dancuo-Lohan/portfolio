<?php

use CorianderCore\Core\Image\ImageHandler;

$homeContent = [
    'introLabel' => 'Bonjour, je suis',
    'presentation' => 'Je développe des applications web, en travaillant sur les interfaces comme sur leur fonctionnement côté serveur. J\'aime être impliqué dans leur conception et échanger avec les utilisateurs pour comprendre ce qu\'ils attendent de l\'outil.',
    'personalProjects' => 'J\'ai principalement travaillé sur des applications internes chez Lyreco et à l\'Université d\'Artois. En parallèle, je développe des projets personnels pour essayer de nouvelles idées et approfondir certains sujets.',
    'experienceLink' => 'Voir mon parcours',
    'role' => 'Développeur fullstack',
    'workLink' => 'Voir mes réalisations',
    'experienceTitle' => 'Mon parcours',
    'experienceIntro' => 'Après une première expérience sur des sites clients chez MiCorp, j\'ai travaillé sur des applications internes chez Lyreco et à l\'Université d\'Artois.',
    'experience' => [
        [
            'company' => 'Université d\'Artois',
            'role' => 'Développeur fullstack',
            'contract' => 'CDD',
            'location' => 'Arras',
            'start' => '2024-11',
            'end' => '2025-11',
            'period' => 'Nov. 2024 – nov. 2025',
            'intro' => 'J\'ai participé à la conception et au développement d\'une application interne pour réunir les informations liées aux produits et aux marchés publics, auparavant réparties dans plusieurs fichiers.',
            'points' => [
                'Échanges avec les utilisateurs métier, analyse des besoins et conception des interfaces.',
                'Recherche de produits, panier et export vers l\'outil de commande existant, avec une connexion SSO.',
                'Développement, cahiers des charges, documentation, organisation des tâches et suivi du projet.',
            ],
            'stack' => 'Laravel · PHP · TypeScript · Tailwind CSS · SQL · GitLab',
        ],
        [
            'company' => 'Lyreco France',
            'role' => 'Développeur d\'applications web',
            'contract' => 'Alternance',
            'location' => 'Marly',
            'start' => '2022-09',
            'end' => '2024-09',
            'period' => 'Sept. 2022 – sept. 2024',
            'intro' => 'J\'ai conçu et développé des applications internes avec les utilisateurs métier. Room Calendars permet notamment de consulter les disponibilités des salles et de retrouver une réunion à partir d\'un participant.',
            'points' => [
                'Maquettes, développement back-end et front-end, puis mise en production.',
                'Intégration de Microsoft Graph et du SSO Microsoft, droits d\'accès et mise en cache.',
                'Automatisation de workflows à partir de formulaires avec Laserfiche, un outil low-code.',
                'Participation aux tests et à la CI/CD, revues de code et accompagnement de stagiaires et d\'alternants.',
            ],
            'stack' => 'PHP · TypeScript · Tailwind CSS · Microsoft Graph · Laserfiche · GitHub',
            'link' => '/fr/case-studies/roomCalendars',
            'linkLabel' => 'Voir l\'étude de cas Room Calendars',
        ],
        [
            'company' => 'MiCorp — FeedMi France',
            'role' => 'Développeur d\'applications web',
            'contract' => 'Alternance',
            'location' => 'Lille',
            'start' => '2021-10',
            'end' => '2022-07',
            'period' => 'Oct. 2021 – juil. 2022',
            'intro' => 'J\'ai participé à la refonte de sites clients et au développement de fonctionnalités pour une plateforme de commande de repas, côté utilisateur et back-office.',
            'points' => [
                'Intégration des maquettes et développement avec PHP et Yii.',
                'Présentation de l\'avancement aux clients et adaptation des fonctionnalités à leurs retours.',
                'Participation à la présentation d\'un projet auprès d\'un partenaire bancaire.',
            ],
            'stack' => 'PHP · Yii · GitHub',
        ],
    ],
    'projectsTitle' => 'Des projets à découvrir',
    'projectsIntro' => 'Que fallait-il résoudre ? Pourquoi ce choix technique ? Dans les études de cas, je vous raconte ce qu\'on ne voit pas dans une capture d\'écran.',
    'caseLabel' => 'Lire l\'étude de cas',
    'projects' => [
        [
            'title' => 'Steambot Chronicles Archive',
            'period' => '2026',
            'context' => 'Archive de jeu vidéo',
            'image' => '/public/assets/img/case-studies/thumbnails-steambotChronicles.jpg',
            'alt' => 'Page d\'accueil du site Steambot Chronicles Archive.',
            'hook' => 'Que reste-t-il d\'un jeu quand ses sites disparaissent ?',
            'summary' => 'J\'ai créé cette archive pour réunir des images, des musiques et des documents de mon jeu préféré. Un configurateur 3D permet aussi d\'assembler ses véhicules, les Trotmobiles.',
            'url' => '/fr/case-studies/steambotChronicles',
        ],
        [
            'title' => 'CorianderPHP',
            'period' => 'Depuis 2024',
            'context' => 'Projet personnel de R&D',
            'image' => '/public/assets/img/case-studies/thumbnails-corianderPHP.jpg',
            'alt' => 'Aperçu du site de documentation CorianderPHP.',
            'hook' => 'Comprendre les outils que j\'utilise.',
            'summary' => 'Plutôt que de m\'arrêter aux API des frameworks, j\'ai voulu construire certains de leurs mécanismes. CorianderPHP me sert à apprendre, expérimenter et développer mes petits projets PHP.',
            'url' => '/fr/case-studies/corianderPHP',
        ],
        [
            'title' => 'Sans Suite',
            'period' => '2026',
            'context' => 'Application personnelle',
            'image' => '/public/assets/img/case-studies/thumbnails-sansSuite.jpg',
            'alt' => 'Vue d\'ensemble de l\'application Sans Suite.',
            'hook' => 'Noter une candidature, sans formulaire à rallonge.',
            'summary' => 'Quatre champs obligatoires pour commencer, puis des notes, des documents et un calendrier pour suivre la suite. J\'ai construit cet outil pour ma propre recherche d\'emploi.',
            'url' => '/fr/case-studies/sansSuite',
        ],
        [
            'title' => 'Room Calendars',
            'period' => '2024',
            'context' => 'Application interne · Lyreco',
            'image' => '/public/assets/img/case-studies/thumbnails-roomCalendars.jpg',
            'alt' => 'Maquette de l\'application Room Calendars.',
            'hook' => 'Quelle salle est libre ? Où se tient cette réunion ?',
            'summary' => 'Chez Lyreco, j\'ai développé une interface qui rassemble les disponibilités et aide l\'accueil à retrouver une réunion. La réservation reste dans Outlook ; l\'application facilite la consultation.',
            'url' => '/fr/case-studies/roomCalendars',
        ],
    ],
    'skillsTitle' => 'Compétences techniques',
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
            'title' => 'Données & intégrations',
            'technologies' => [
                ['name' => 'MySQL', 'image' => 'mainStack/mysql.png'],
                ['name' => 'SQLite', 'image' => 'mainStack/sqlite.png'],
                ['name' => 'Oracle', 'image' => 'mainStack/oracle.png'],
                ['name' => 'Microsoft Graph', 'image' => 'sideStack/microsoftgraphapi.png'],
                ['name' => 'SSO'],
            ],
        ],
        [
            'title' => 'Conception & suivi',
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
    'otherSkillsLabel' => 'Autres technologies utilisées',
    'otherSkills' => 'Node.js, Bun, React, Next.js, Electron, Three.js, Python, Django, C#, Java, Godot, Skript, Laserfiche.',
    'educationTitle' => 'Formation',
    'education' => [
        [
            'period' => '2022 – 2024',
            'title' => 'Manager en stratégie et développement de projet digital',
            'school' => 'ECV Digital · Lille',
            'level' => 'Bac+5 · RNCP34758',
        ],
        [
            'period' => '2021 – 2022',
            'title' => 'Bachelor Développeur web',
            'school' => 'MyDigitalSchool · Lille',
            'level' => 'Bac+3',
        ],
        [
            'period' => '2019 – 2021',
            'title' => 'BTS Systèmes numériques, option informatique et réseaux',
            'school' => 'Lycée Alphonse Benoit · L\'Isle-sur-la-Sorgue',
            'level' => 'Bac+2',
        ],
    ],
    'certTitle' => 'Certification Opquast',
    'certText' => 'Je suis certifié Opquast depuis 2023. La certification porte sur la qualité des sites web : accessibilité, expérience utilisateur et bonnes pratiques. Des sujets auxquels je fais attention dans mes projets.',
    'certLabel' => 'Voir mon certificat',
    'closing' => 'Et concrètement, ça donne quoi ?',
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
            <p class="mt-2 text-sm leading-relaxed text-black/60 dark:text-white/60">Java pour des plugins et des mods Minecraft ; Python dans un projet scolaire d'analyse de données.</p>
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
