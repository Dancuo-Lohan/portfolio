<?php
$caseStudies = [
    [
        'type' => 'Étude de cas',
        'title' => 'CorianderPHP',
        'summary' => "Un framework PHP personnel développé avant tout comme projet de R&D. Il me permet d'explorer le fonctionnement interne d'un framework, de tester des choix d'architecture et d'approfondir des sujets comme le routing, les controllers, les vues, les tests ou l'automatisation des releases.",
        'context' => "Framework PHP, architecture, CLI, tests et CI/CD",
        'image' => '/public/assets/img/case-studies/thumbnails-corianderPHP.png',
        'alt' => 'Aperçu du site de documentation CorianderPHP.',
        'tags' => ['PHP', 'Composer', 'PHPUnit', 'GitHub Actions'],
        'links' => [
            ['label' => "Lire l'étude de cas", 'href' => '/fr/case-studies/corianderPHP', 'primary' => true],
        ],
    ],
    [
        'type' => 'Étude de cas',
        'title' => 'Room Calendars',
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

<div class="relative mx-auto max-w-screen-2xl pb-10 md:pb-16">
    <section class="mx-auto w-4/5 pt-8 md:pt-16">
        <div class="border-b border-dark-green/20 pb-8 dark:border-accent-green/25 md:pb-12">
            <div class="mt-3">
                <h1 class="font-concert-one text-4xl tracking-1 text-dark-green dark:text-accent-green sm:text-6xl md:text-7xl">
                    Réalisations
                </h1>
                <p class="mt-5 max-w-3xl text-base !leading-normal text-black/75 dark:text-white/75 sm:text-xl">
                    Une sélection de projets sur lesquels j'ai travaillé, avec le contexte, les choix réalisés et ce que j'en ai tiré. L'objectif n'est pas seulement de montrer le résultat final, mais aussi la manière dont j'ai abordé chaque sujet.
                </p>
            </div>
        </div>
    </section>

    <section class="mx-auto mt-10 w-4/5 md:mt-14">
        <header class="max-w-3xl">
            <p class="font-concert-one text-sm uppercase tracking-1 text-dark-green dark:text-accent-green">
                Travaux / Études de cas
            </p>
            <h2 class="mt-1 font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Projets complets
            </h2>
            <p class="mt-3 text-sm !leading-normal text-black/60 dark:text-white/60 sm:text-base">
                Des projets développés autour d'un besoin concret, avec leur contexte, les choix techniques et fonctionnels réalisés, ainsi que les enseignements que j'en ai tirés.
            </p>
        </header>

        <div class="mt-7 space-y-8">
            <?php foreach ($caseStudies as $index => $project) { ?>
                <article data-clickable-card data-card-url="<?= htmlspecialchars($project['links'][0]['href'], ENT_QUOTES, 'UTF-8') ?>" class="group/card relative grid cursor-pointer overflow-hidden border-y border-dark-green/25 bg-true-white/70 focus-within:outline focus-within:outline-2 focus-within:outline-offset-[-4px] focus-within:outline-dark-green dark:border-accent-green/25 dark:bg-true-black/45 dark:focus-within:outline-accent-green md:grid-cols-[minmax(0,22rem)_minmax(0,1fr)]">
                        <span class="pointer-events-none absolute inset-y-0 -left-32 -right-32 z-20 hidden translate-x-full bg-gradient-to-l from-dark-green/95 via-dark-green/85 to-transparent opacity-0 transition duration-300 ease-in-out group-hover/card:translate-x-0 group-hover/card:opacity-100 group-focus-within/card:translate-x-0 group-focus-within/card:opacity-100 dark:from-accent-green/95 dark:via-accent-green/80 lg:block" aria-hidden="true"></span>

                        <span class="relative z-10 block min-h-56 overflow-hidden border-b border-dark-green/15 bg-black/5 dark:border-accent-green/20 dark:bg-white/5 md:min-h-full md:border-b-0 md:border-r">
                            <?= \CorianderCore\Core\Image\ImageHandler::render($project['image'], [
                                'alt' => $project['alt'],
                                'pictureClass' => 'block h-full w-full',
                                'class' => 'h-full w-full object-contain object-center p-4 transition duration-300 group-hover/card:opacity-80',
                                'quality' => $project['quality'] ?? 80,
                                'loading' => 'lazy',
                                'decoding' => 'async',
                                'draggable' => 'false',
                            ]) ?>
                        </span>

                        <span class="relative z-30 grid gap-6 p-5 sm:p-6 lg:grid-cols-[minmax(0,1fr)_10rem] lg:p-8">
                            <span class="min-w-0">
                                <span class="flex flex-wrap items-center gap-2">
                                    <span class="rounded-md bg-true-white/60 px-2 py-0.5 font-concert-one text-xs uppercase tracking-1 text-dark-green transition duration-300 dark:bg-true-black/60 dark:text-accent-green">
                                        <?= htmlspecialchars($project['type'], ENT_QUOTES, 'UTF-8') ?>
                                    </span>
                                    <span class="h-px w-8 bg-dark-green/30 transition duration-300 dark:bg-accent-green/40 lg:group-hover/card:bg-white/60 lg:group-focus-within/card:bg-white/60 dark:lg:group-hover/card:bg-black/60 dark:lg:group-focus-within/card:bg-black/60" aria-hidden="true"></span>
                                    <span class="text-xs font-semibold text-black/55 transition duration-300 dark:text-white/55 lg:group-hover/card:text-white/75 lg:group-focus-within/card:text-white/75 dark:lg:group-hover/card:text-black/75 dark:lg:group-focus-within/card:text-black/75">
                                        <?= htmlspecialchars($project['context'], ENT_QUOTES, 'UTF-8') ?>
                                    </span>
                                </span>

                                <span class="mt-3 block font-concert-one text-3xl tracking-1 text-dark-green [text-shadow:1px_0_0_rgb(255_255_255_/_60%),-1px_0_0_rgb(255_255_255_/_60%),0_1px_0_rgb(255_255_255_/_60%),0_-1px_0_rgb(255_255_255_/_60%)] transition duration-300 dark:text-accent-green dark:[text-shadow:1px_0_0_rgb(0_0_0_/_60%),-1px_0_0_rgb(0_0_0_/_60%),0_1px_0_rgb(0_0_0_/_60%),0_-1px_0_rgb(0_0_0_/_60%)] sm:text-4xl lg:group-hover/card:text-white lg:group-focus-within/card:text-white dark:lg:group-hover/card:text-black dark:lg:group-focus-within/card:text-black">
                                    <?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?>
                                </span>
                                <span class="mt-4 block max-w-3xl text-base !leading-normal text-black/75 transition duration-300 dark:text-white/75 lg:group-hover/card:text-white/80 lg:group-focus-within/card:text-white/80 dark:lg:group-hover/card:text-black/80 dark:lg:group-focus-within/card:text-black/80">
                                    <?= htmlspecialchars($project['summary'], ENT_QUOTES, 'UTF-8') ?>
                                </span>

                                <a href="<?= htmlspecialchars($project['links'][0]['href'], ENT_QUOTES, 'UTF-8') ?>" class="mt-6 inline-flex rounded-md bg-dark-green px-4 py-2 text-sm font-semibold text-white transition dark:bg-accent-green dark:text-black lg:hidden">
                                    <?= htmlspecialchars($project['links'][0]['label'], ENT_QUOTES, 'UTF-8') ?>
                                </a>
                            </span>

                            <span class="relative hidden border-l border-dark-green/15 pl-6 transition duration-300 dark:border-accent-green/20 lg:block lg:group-hover/card:border-white/60 lg:group-focus-within/card:border-white/60 dark:lg:group-hover/card:border-black/60 dark:lg:group-focus-within/card:border-black/60">
                                <span class="block font-concert-one text-5xl text-dark-green/15 transition duration-300 dark:text-accent-green/20 lg:group-hover/card:text-white/25 lg:group-focus-within/card:text-white/25 dark:lg:group-hover/card:text-black/25 dark:lg:group-focus-within/card:text-black/25">
                                    <?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?>
                                </span>
                                <span class="mt-4 flex flex-col gap-2">
                                    <?php foreach ($project['tags'] as $tag) { ?>
                                        <span class="text-sm font-semibold text-black/55 transition duration-300 dark:text-white/55 lg:group-hover/card:text-white/75 lg:group-focus-within/card:text-white/75 dark:lg:group-hover/card:text-black/75 dark:lg:group-focus-within/card:text-black/75">
                                            <?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8') ?>
                                        </span>
                                    <?php } ?>
                                </span>
                                <a href="<?= htmlspecialchars($project['links'][0]['href'], ENT_QUOTES, 'UTF-8') ?>" class="mt-6 inline-flex whitespace-nowrap rounded-md bg-dark-green px-3 py-2 text-sm font-semibold text-white transition duration-300 dark:bg-accent-green dark:text-black lg:group-hover/card:bg-mint lg:group-hover/card:text-dark-green lg:group-focus-within/card:bg-mint lg:group-focus-within/card:text-dark-green dark:lg:group-hover/card:bg-black dark:lg:group-hover/card:text-accent-green dark:lg:group-focus-within/card:bg-black dark:lg:group-focus-within/card:text-accent-green">
                                    <?= htmlspecialchars($project['links'][0]['label'], ENT_QUOTES, 'UTF-8') ?>
                                </a>
                            </span>
                        </span>
                </article>
            <?php } ?>
        </div>
    </section>

    <section class="mx-auto mt-12 w-4/5 border-t border-dark-green/20 pt-8 dark:border-accent-green/25 md:mt-16">
        <header class="max-w-3xl">
            <p class="font-concert-one text-sm uppercase tracking-1 text-dark-green dark:text-accent-green">
                Composants / Expérimentations
            </p>
            <h2 class="mt-1 font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Composants & expérimentations
            </h2>
            <p class="mt-3 text-sm !leading-normal text-black/60 dark:text-white/60 sm:text-base">
                Des projets plus courts pour tester une idée, une interaction ou une approche technique.
            </p>
        </header>

        <div class="mt-7 space-y-5">
            <?php foreach ($components as $component) { ?>
                <article data-clickable-card data-card-url="<?= htmlspecialchars($component['links'][0]['href'], ENT_QUOTES, 'UTF-8') ?>" class="group relative block cursor-pointer overflow-hidden border-y border-dark-green/25 bg-true-white/70 transition duration-300 hover:border-dark-green/45 focus-within:outline focus-within:outline-2 focus-within:outline-offset-[-4px] focus-within:outline-dark-green dark:border-accent-green/25 dark:bg-true-black/45 dark:hover:border-accent-green/45 dark:focus-within:outline-accent-green">
                        <span class="pointer-events-none absolute inset-y-0 -left-32 -right-32 z-20 hidden -translate-x-full bg-gradient-to-r from-dark-green/95 via-dark-green/85 to-transparent opacity-0 transition duration-300 ease-in-out group-hover:translate-x-0 group-hover:opacity-100 group-focus-within:translate-x-0 group-focus-within:opacity-100 dark:from-accent-green/95 dark:via-accent-green/80 lg:block" aria-hidden="true"></span>

                        <span class="grid lg:grid-cols-[minmax(0,1fr)_20rem]">
                            <span class="relative z-30 block min-w-0 p-5 sm:p-6 lg:p-8">
                                <span class="flex flex-wrap items-center gap-2">
                                    <span class="rounded-md bg-true-white/60 px-2 py-0.5 font-concert-one text-xs uppercase tracking-1 text-dark-green transition duration-300 dark:bg-true-black/60 dark:text-accent-green">
                                        <?= htmlspecialchars($component['type'], ENT_QUOTES, 'UTF-8') ?>
                                    </span>
                                    <span class="h-px w-8 bg-dark-green/30 transition duration-300 dark:bg-accent-green/40 lg:group-hover:bg-white/60 lg:group-focus-within:bg-white/60 dark:lg:group-hover:bg-black/60 dark:lg:group-focus-within:bg-black/60" aria-hidden="true"></span>
                                    <span class="text-xs font-semibold text-black/50 transition duration-300 dark:text-white/50 lg:group-hover:text-white/75 lg:group-focus-within:text-white/75 dark:lg:group-hover:text-black/75 dark:lg:group-focus-within:text-black/75">
                                        <?= htmlspecialchars(implode(', ', $component['tags']), ENT_QUOTES, 'UTF-8') ?>
                                    </span>
                                </span>

                                <span class="mt-5 block font-concert-one text-3xl tracking-1 text-dark-green [text-shadow:1px_0_0_rgb(255_255_255_/_60%),-1px_0_0_rgb(255_255_255_/_60%),0_1px_0_rgb(255_255_255_/_60%),0_-1px_0_rgb(255_255_255_/_60%)] transition duration-300 dark:text-accent-green dark:[text-shadow:1px_0_0_rgb(0_0_0_/_60%),-1px_0_0_rgb(0_0_0_/_60%),0_1px_0_rgb(0_0_0_/_60%),0_-1px_0_rgb(0_0_0_/_60%)] sm:text-4xl lg:group-hover:text-white lg:group-focus-within:text-white dark:lg:group-hover:text-black dark:lg:group-focus-within:text-black">
                                    <?= htmlspecialchars($component['title'], ENT_QUOTES, 'UTF-8') ?>
                                </span>
                                <span class="mt-3 block max-w-3xl text-base !leading-normal text-black/75 transition duration-300 dark:text-white/75 lg:group-hover:text-white/80 lg:group-focus-within:text-white/80 dark:lg:group-hover:text-black/80 dark:lg:group-focus-within:text-black/80">
                                    <?= htmlspecialchars($component['summary'], ENT_QUOTES, 'UTF-8') ?>
                                </span>

                                <span class="mt-6 flex flex-wrap items-center gap-3">
                                    <a href="<?= htmlspecialchars($component['links'][0]['href'], ENT_QUOTES, 'UTF-8') ?>" class="inline-flex whitespace-nowrap rounded-md bg-dark-green px-3 py-2 text-sm font-semibold text-white transition duration-300 dark:bg-accent-green dark:text-black lg:group-hover:bg-mint lg:group-hover:text-dark-green lg:group-focus-within:bg-mint lg:group-focus-within:text-dark-green dark:lg:group-hover:bg-black dark:lg:group-hover:text-accent-green dark:lg:group-focus-within:bg-black dark:lg:group-focus-within:text-accent-green">
                                        <?= htmlspecialchars($component['links'][0]['label'], ENT_QUOTES, 'UTF-8') ?>
                                    </a>
                                </span>
                            </span>

                            <span class="relative z-10 block min-h-64 overflow-hidden border-t border-dark-green/15 bg-black/5 dark:border-accent-green/20 dark:bg-white/5 lg:border-l lg:border-t-0">
                                <?= \CorianderCore\Core\Image\ImageHandler::render($component['image'], [
                                    'alt' => $component['alt'],
                                    'pictureClass' => 'block h-full w-full',
                                    'class' => 'h-full w-full object-contain object-center p-4 ' . ($component['imageClass'] ?? ''),
                                    'quality' => $component['quality'] ?? 80,
                                    'loading' => 'lazy',
                                    'decoding' => 'async',
                                    'draggable' => 'false',
                                ]) ?>
                            </span>
                        </span>
                </article>
            <?php } ?>
        </div>
    </section>
</div>
