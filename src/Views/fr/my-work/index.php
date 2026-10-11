<?php
$caseStudies = [
    [
        'type' => 'Étude de cas',
        'title' => 'Steambot Chronicles Archive',
        'period' => '2026',
        'summary' => 'Un site consacré à Steambot Chronicles pour retrouver les informations, images, musiques et documents du jeu, avec des ressources allégées pour le Web et un configurateur 3D interactif.',
        'context' => 'Archive communautaire, performance, SEO, 3D',
        'image' => '/public/assets/img/case-studies/thumbnails-steambotChronicles.jpg',
        'alt' => 'Page d\'accueil du site Steambot Chronicles Archive.',
        'tags' => ['PHP', 'TypeScript', 'WebGL 2', 'SEO'],
        'links' => [
            ['label' => 'Lire l\'étude de cas', 'href' => '/fr/case-studies/steambotChronicles', 'primary' => true],
        ],
    ],
    [
        'type' => 'Étude de cas',
        'title' => 'CorianderPHP',
        'period' => 'Depuis 2024',
        'summary' => "Un framework PHP personnel développé avant tout comme projet de R&D. Il me permet d'explorer le fonctionnement interne d'un framework, de tester des choix d'architecture et d'approfondir des sujets comme le routing, les controllers, les vues, les tests ou l'automatisation des releases.",
        'context' => "Framework PHP, architecture, CLI, tests et CI/CD",
        'image' => '/public/assets/img/case-studies/thumbnails-corianderPHP.jpg',
        'alt' => 'Aperçu du site de documentation CorianderPHP.',
        'tags' => ['PHP', 'Composer', 'PHPUnit', 'GitHub Actions'],
        'links' => [
            ['label' => "Lire l'étude de cas", 'href' => '/fr/case-studies/corianderPHP', 'primary' => true],
        ],
    ],
    [
        'type' => 'Étude de cas',
        'title' => 'Sans Suite',
        'period' => '2026',
        'summary' => "Une application locale conçue pour suivre mes candidatures, organiser les prochaines étapes et retrouver leur historique sans dépendre d'un tableur devenu difficile à lire.",
        'context' => 'Application locale, SQLite, UX',
        'image' => '/public/assets/img/case-studies/thumbnails-sansSuite.jpg',
        'alt' => "Vue d'ensemble de l'application Sans Suite.",
        'tags' => ['PHP', 'SQLite', 'TypeScript', 'CorianderPHP'],
        'links' => [
            ['label' => "Lire l'étude de cas", 'href' => '/fr/case-studies/sansSuite', 'primary' => true],
        ],
    ],
    [
        'type' => 'Étude de cas',
        'title' => 'Room Calendars',
        'period' => '2024',
        'summary' => "Une application interne conçue pour rendre la consultation des disponibilités de salles plus rapide. Elle permet notamment de rechercher une réunion ou une salle sans avoir à comparer manuellement plusieurs calendriers dans Outlook.",
        'context' => 'Application interne, Microsoft Graph API, UX',
        'image' => '/public/assets/img/case-studies/thumbnails-roomCalendars.jpg',
        'alt' => 'Maquette du projet RoomCalendars.',
        'tags' => ['PHP', 'TypeScript', 'Microsoft Graph', 'Maquettage'],
        'links' => [
            ['label' => "Lire l'étude de cas", 'href' => '/fr/case-studies/roomCalendars', 'primary' => true],
        ],
    ],
];

$components = [
    [
        'type' => 'Composant',
        'title' => 'Vertical Parallax',
        'summary' => "Un composant de parallaxe vertical développé en TypeScript pour animer une scène au scroll sur desktop. L'objectif était de garder une logique simple, lisible et facile à intégrer sans dépendre d'une bibliothèque d'animation.",
        'context' => 'TypeScript, front-end',
        'image' => '/public/assets/img/components/vertical-parallax.png',
        'alt' => 'Aperçu du composant vertical parallax, avec une ville en pixel art.',
        'tags' => ['TypeScript', 'Front-end'],
        'links' => [
            ['label' => 'Voir le composant', 'href' => '/fr/components/vertical-parallax', 'primary' => true],
        ],
        'imageClass' => 'rendering-pixelated',
        'quality' => 100,
    ],
];
?>
<div class="mx-auto max-w-6xl px-5 pb-16 pt-9 sm:px-8 sm:pb-20 sm:pt-14 lg:px-10 lg:pt-16">
    <header class="border-b border-black/15 pb-8 dark:border-white/15 sm:pb-10">
        <h1 class="font-concert-one text-4xl leading-tight text-black dark:text-white sm:text-6xl">Réalisations</h1>
        <p class="mt-5 max-w-2xl text-base leading-relaxed text-black/70 dark:text-white/70 sm:text-lg">Une sélection de projets sur lesquels j'ai travaillé, avec leur contexte, mes choix et ce que j'en ai tiré.</p>
    </header>

    <section id="case-studies" data-language-scroll-anchor class="pt-8 sm:pt-10" aria-labelledby="case-studies-title">
        <h2 id="case-studies-title" class="font-concert-one text-3xl text-black dark:text-white sm:text-4xl">Projets complets</h2>
        <div class="mt-6 space-y-6">
            <?php foreach ($caseStudies as $project) { ?>
                <article data-clickable-card data-card-url="<?= htmlspecialchars($project['links'][0]['href'], ENT_QUOTES, 'UTF-8') ?>" class="group/card relative grid min-w-0 cursor-pointer gap-4 overflow-hidden rounded-md bg-true-white/70 p-4 focus-within:outline focus-within:outline-2 focus-within:outline-dark-green dark:bg-true-white/5 dark:focus-within:outline-accent-green md:grid-cols-[16rem_minmax(0,1fr)] lg:grid-cols-[20rem_minmax(0,1fr)] md:gap-x-8 md:gap-y-3 md:border md:border-black/15 md:p-6 dark:md:border-white/15">
                    <span data-card-gradient class="translate-x-full bg-gradient-to-l pointer-events-none absolute inset-y-0 -left-32 -right-32 z-20 hidden from-dark-green/95 via-dark-green/85 to-transparent opacity-0 transition duration-300 ease-in-out group-hover/card:translate-x-0 group-hover/card:opacity-100 group-focus-within/card:translate-x-0 group-focus-within/card:opacity-100 motion-reduce:transition-none dark:from-accent-green/95 dark:via-accent-green/80 lg:block" aria-hidden="true"></span>
                    <div class="relative z-30 min-w-0 md:col-start-2 md:row-start-1">
                        <p class="flex flex-wrap items-center gap-x-3 gap-y-1 text-xs text-black/60 dark:text-white/60">
                            <span class="rounded-md bg-true-white/60 px-2 py-0.5 font-medium text-dark-green dark:bg-true-black/60 dark:text-accent-green"><?= htmlspecialchars($project['type'], ENT_QUOTES, 'UTF-8') ?></span>
                            <span class="tabular-nums transition-colors duration-300 motion-reduce:transition-none lg:group-hover/card:text-white lg:group-focus-within/card:text-white dark:lg:group-hover/card:text-black dark:lg:group-focus-within/card:text-black"><?= htmlspecialchars($project['period'], ENT_QUOTES, 'UTF-8') ?></span>
                        </p>
                        <h3 class="mt-2 font-concert-one text-2xl leading-tight text-dark-green dark:text-accent-green [text-shadow:1px_0_0_rgb(255_255_255_/_60%),-1px_0_0_rgb(255_255_255_/_60%),0_1px_0_rgb(255_255_255_/_60%),0_-1px_0_rgb(255_255_255_/_60%)] dark:[text-shadow:1px_0_0_rgb(0_0_0_/_60%),-1px_0_0_rgb(0_0_0_/_60%),0_1px_0_rgb(0_0_0_/_60%),0_-1px_0_rgb(0_0_0_/_60%)] transition-colors duration-300 motion-reduce:transition-none lg:group-hover/card:text-white lg:group-focus-within/card:text-white dark:lg:group-hover/card:text-black dark:lg:group-focus-within/card:text-black sm:text-3xl"><?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                    </div>
                    <div class="relative z-10 mx-auto w-[84%] max-w-[17.5rem] md:col-start-1 md:row-span-3 md:row-start-1 md:w-full md:max-w-none md:self-center">
                        <?= \CorianderCore\Core\Image\ImageHandler::render($project['image'], [
                            'alt' => $project['alt'],
                            'pictureClass' => 'block overflow-hidden rounded-md',
                            'class' => 'aspect-[8/5] h-auto w-full rounded-md object-contain',
                            'quality' => $project['quality'] ?? 80,
                            'loading' => 'lazy',
                            'decoding' => 'async',
                            'draggable' => 'false',
                        ]) ?>
                    </div>
                    <p class="relative z-30 min-w-0 text-sm leading-relaxed text-black/75 dark:text-white/75 transition-colors duration-300 motion-reduce:transition-none lg:group-hover/card:text-white lg:group-focus-within/card:text-white dark:lg:group-hover/card:text-black dark:lg:group-focus-within/card:text-black md:col-start-2 md:row-start-2"><?= htmlspecialchars($project['summary'], ENT_QUOTES, 'UTF-8') ?></p>
                    <div class="relative z-30 flex min-w-0 flex-wrap items-center justify-between gap-x-5 gap-y-3 md:col-start-2 md:row-start-3">
                        <p class="min-w-0 text-xs leading-relaxed text-black/55 dark:text-white/60 transition-colors duration-300 motion-reduce:transition-none lg:group-hover/card:text-white lg:group-focus-within/card:text-white dark:lg:group-hover/card:text-black dark:lg:group-focus-within/card:text-black"><?= htmlspecialchars(implode(', ', $project['tags']), ENT_QUOTES, 'UTF-8') ?></p>
                        <a href="<?= htmlspecialchars($project['links'][0]['href'], ENT_QUOTES, 'UTF-8') ?>" class="relative z-30 inline-flex min-h-11 shrink-0 items-center rounded-md bg-dark-green px-4 py-2 text-sm font-semibold text-white hover:bg-dark-green/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:bg-accent-green dark:text-black dark:hover:bg-accent-green/90 transition-colors duration-300 motion-reduce:transition-none lg:group-hover/card:bg-mint lg:group-hover/card:text-dark-green lg:group-focus-within/card:bg-mint lg:group-focus-within/card:text-dark-green dark:lg:group-hover/card:bg-black dark:lg:group-hover/card:text-accent-green dark:lg:group-focus-within/card:bg-black dark:lg:group-focus-within/card:text-accent-green">
                            <?= htmlspecialchars($project['links'][0]['label'], ENT_QUOTES, 'UTF-8') ?><span class="sr-only"> : <?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?></span>
                        </a>
                    </div>
                </article>
            <?php } ?>
        </div>
    </section>

    <section id="components" data-language-scroll-anchor class="mt-12 border-t border-black/15 pt-8 dark:border-white/15 sm:mt-16 sm:pt-10" aria-labelledby="components-title">
        <h2 id="components-title" class="font-concert-one text-3xl text-black dark:text-white sm:text-4xl">Composants & expérimentations</h2>
        <p class="mt-3 max-w-2xl text-sm leading-relaxed text-black/65 dark:text-white/65">Des projets plus courts pour tester une idée, une interaction ou une approche technique.</p>
        <div class="mt-6 space-y-6">
            <?php foreach ($components as $component) { ?>
                <article data-clickable-card data-card-url="<?= htmlspecialchars($component['links'][0]['href'], ENT_QUOTES, 'UTF-8') ?>" class="group/card relative grid min-w-0 cursor-pointer gap-4 overflow-hidden rounded-md bg-true-white/70 p-4 focus-within:outline focus-within:outline-2 focus-within:outline-dark-green dark:bg-true-white/5 dark:focus-within:outline-accent-green md:grid-cols-[16rem_minmax(0,1fr)] lg:grid-cols-[20rem_minmax(0,1fr)] md:gap-x-8 md:gap-y-3 md:border md:border-black/15 md:p-6 dark:md:border-white/15">
                    <span data-card-gradient class="-translate-x-full bg-gradient-to-r pointer-events-none absolute inset-y-0 -left-32 -right-32 z-20 hidden from-dark-green/95 via-dark-green/85 to-transparent opacity-0 transition duration-300 ease-in-out group-hover/card:translate-x-0 group-hover/card:opacity-100 group-focus-within/card:translate-x-0 group-focus-within/card:opacity-100 motion-reduce:transition-none dark:from-accent-green/95 dark:via-accent-green/80 lg:block" aria-hidden="true"></span>
                    <div class="relative z-30 min-w-0 md:col-start-2 md:row-start-1">
                        <p class="flex items-center gap-2 text-xs font-medium text-dark-green dark:text-accent-green">
                            <span class="rounded-md bg-true-white/60 px-2 py-0.5 dark:bg-true-black/60"><?= htmlspecialchars($component['type'], ENT_QUOTES, 'UTF-8') ?></span>
                            <span class="h-px w-8 bg-dark-green/30 dark:bg-accent-green/40 lg:group-hover/card:bg-white/60 lg:group-focus-within/card:bg-white/60 dark:lg:group-hover/card:bg-black/60 dark:lg:group-focus-within/card:bg-black/60" aria-hidden="true"></span>
                        </p>
                        <h3 class="mt-2 font-concert-one text-2xl leading-tight text-dark-green dark:text-accent-green [text-shadow:1px_0_0_rgb(255_255_255_/_60%),-1px_0_0_rgb(255_255_255_/_60%),0_1px_0_rgb(255_255_255_/_60%),0_-1px_0_rgb(255_255_255_/_60%)] dark:[text-shadow:1px_0_0_rgb(0_0_0_/_60%),-1px_0_0_rgb(0_0_0_/_60%),0_1px_0_rgb(0_0_0_/_60%),0_-1px_0_rgb(0_0_0_/_60%)] transition-colors duration-300 motion-reduce:transition-none lg:group-hover/card:text-white lg:group-focus-within/card:text-white dark:lg:group-hover/card:text-black dark:lg:group-focus-within/card:text-black sm:text-3xl"><?= htmlspecialchars($component['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                    </div>
                    <div class="relative z-10 mx-auto w-[84%] max-w-[17.5rem] md:col-start-1 md:row-span-3 md:row-start-1 md:w-full md:max-w-none md:self-center">
                        <?= \CorianderCore\Core\Image\ImageHandler::render($component['image'], [
                            'alt' => $component['alt'],
                            'pictureClass' => 'block overflow-hidden rounded-md',
                            'class' => 'aspect-[8/5] h-auto w-full rounded-md object-contain ' . ($component['imageClass'] ?? ''),
                            'quality' => $component['quality'] ?? 80,
                            'loading' => 'lazy',
                            'decoding' => 'async',
                            'draggable' => 'false',
                        ]) ?>
                    </div>
                    <p class="relative z-30 min-w-0 text-sm leading-relaxed text-black/75 dark:text-white/75 transition-colors duration-300 motion-reduce:transition-none lg:group-hover/card:text-white lg:group-focus-within/card:text-white dark:lg:group-hover/card:text-black dark:lg:group-focus-within/card:text-black md:col-start-2 md:row-start-2"><?= htmlspecialchars($component['summary'], ENT_QUOTES, 'UTF-8') ?></p>
                    <a href="<?= htmlspecialchars($component['links'][0]['href'], ENT_QUOTES, 'UTF-8') ?>" class="relative z-30 inline-flex min-h-11 w-fit items-center rounded-md bg-dark-green px-4 py-2 text-sm font-semibold text-white hover:bg-dark-green/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:bg-accent-green dark:text-black dark:hover:bg-accent-green/90 transition-colors duration-300 motion-reduce:transition-none lg:group-hover/card:bg-mint lg:group-hover/card:text-dark-green lg:group-focus-within/card:bg-mint lg:group-focus-within/card:text-dark-green dark:lg:group-hover/card:bg-black dark:lg:group-hover/card:text-accent-green dark:lg:group-focus-within/card:bg-black dark:lg:group-focus-within/card:text-accent-green md:col-start-2 md:row-start-3">
                        <?= htmlspecialchars($component['links'][0]['label'], ENT_QUOTES, 'UTF-8') ?>
                    </a>
                </article>
            <?php } ?>
        </div>
    </section>
</div>
