<?php
use CorianderCore\Core\Image\ImageHandler;
?>
<div class="mx-auto max-w-6xl px-5 font-poppins sm:px-8 lg:px-10">
    <article>
        <a href="/fr/my-work" class="mt-6 inline-flex min-h-11 items-center gap-2 text-sm font-semibold text-dark-green transition hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:text-accent-green">
            <span aria-hidden="true">&larr;</span> Retour aux réalisations
        </a>

        <header class="pb-8 pt-6 sm:pb-10">
            <p class="text-sm font-medium text-dark-green dark:text-accent-green">Étude de cas <span class="ml-2 text-black/55 dark:text-white/55">&middot; 2026</span></p>
            <h1 class="mt-3 font-concert-one text-4xl leading-tight text-black dark:text-white sm:text-5xl">Steambot Chronicles Archive</h1>
            <p class="mt-5 max-w-3xl text-lg leading-relaxed text-black/75 dark:text-white/75">Que reste-t-il d'un jeu quand son site officiel disparaît ? J'ai réuni les contenus de Steambot Chronicles dans une archive, avec un configurateur 3D pour explorer ses véhicules.</p>
        </header>

        <section class="border-y border-dark-green/15 py-5 dark:border-accent-green/20" aria-labelledby="resources-title">
            <h2 id="resources-title" class="text-sm font-semibold text-dark-green dark:text-accent-green">Ressources du projet</h2>
            <div class="mt-3 flex flex-wrap gap-3">
                <a href="https://steambot-chronicles.com/" target="_blank" rel="noopener noreferrer" class="inline-flex min-h-11 items-center rounded-md bg-dark-green px-4 py-2 text-sm font-semibold text-white transition hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:bg-accent-green dark:text-black">Voir le site internet<span class="sr-only"> (nouvel onglet)</span></a>
                <a href="https://steambot-chronicles.com/trotmobile" target="_blank" rel="noopener noreferrer" class="inline-flex min-h-11 items-center rounded-md border border-dark-green/40 px-4 py-2 text-sm font-semibold text-dark-green transition hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:border-accent-green/40 dark:text-accent-green">Essayer le configurateur 3D<span class="sr-only"> (nouvel onglet)</span></a>
            </div>
        </section>

        <section id="intro" data-language-scroll-anchor class="grid items-center gap-8 py-12 sm:py-16 lg:grid-cols-[minmax(0,0.85fr)_minmax(0,1.15fr)] lg:gap-12" aria-labelledby="intro-title">
            <div>
                <h2 id="intro-title" class="font-concert-one text-3xl text-dark-green dark:text-accent-green sm:text-4xl">Pourquoi cette archive</h2>
                <div class="mt-5 space-y-4 text-base leading-relaxed text-black/80 dark:text-white/80">
                    <p>Steambot Chronicles est mon jeu préféré depuis l'enfance. Son site officiel n'existe plus aujourd'hui, mais des archives permettent encore d'en retrouver une partie des contenus.</p>
                    <p>J'ai voulu les réunir sur un site consacré au jeu : illustrations, captures, scans, musique et crédits. L'idée était de donner aux fans un endroit où les retrouver, et aux personnes qui découvrent le jeu une façon d'en explorer l'univers.</p>
                    <p>Je développe et maintiens ce site avec CorianderPHP et l'aide d'agents IA. Je définis les fonctionnalités et les choix d'interface, puis je guide les ajustements et vérifie le résultat sur ordinateur et mobile.</p>
                </div>
            </div>
            <figure id="project-preview" data-language-scroll-anchor class="order-first min-w-0 lg:order-none">
                <?= ImageHandler::render('/public/assets/img/case-studies/steambotChronicles/screenshot-streambotChronicles.jpg', [
                    'alt' => 'Page d’accueil de Steambot Chronicles Archive.',
                    'pictureClass' => 'block w-full',
                    'class' => 'h-auto w-full rounded-lg object-contain',
                    'loading' => 'eager',
                    'decoding' => 'async',
                    'draggable' => 'false',
                ]) ?>
                <figcaption class="mt-3 text-sm leading-relaxed text-black/55 dark:text-white/55">La page d'accueil présente le jeu et les contenus disponibles dans l'archive.</figcaption>
            </figure>
        </section>

        <section id="3d" data-language-scroll-anchor class="border-t border-dark-green/15 py-12 dark:border-accent-green/20 sm:py-16" aria-labelledby="3d-title">
            <div class="max-w-3xl">
                <h2 id="3d-title" class="font-concert-one text-3xl text-dark-green dark:text-accent-green sm:text-4xl">Assembler un Trotmobile dans le navigateur</h2>
                <p class="mt-5 text-lg leading-relaxed text-black/80 dark:text-white/80">Les Trotmobiles sont les véhicules personnalisables du jeu. J'ai voulu proposer une autre manière de les découvrir : choisir des pièces, essayer les couleurs et regarder le résultat dans une scène 3D.</p>
            </div>
            <div class="mt-8 grid items-start gap-8 lg:grid-cols-[minmax(0,1.35fr)_minmax(0,0.65fr)] lg:gap-10">
                <figure class="min-w-0">
                    <?= ImageHandler::render('/public/assets/img/case-studies/steambotChronicles/builder-steambotChronicles.png', [
                        'alt' => 'Configurateur de Trotmobiles avec le modèle 3D, les catégories et les miniatures des pièces.',
                        'pictureClass' => 'block w-full',
                        'class' => 'h-auto w-full rounded-lg border border-dark-green/15 object-contain dark:border-accent-green/20',
                        'loading' => 'lazy',
                        'decoding' => 'async',
                        'draggable' => 'false',
                    ]) ?>
                    <figcaption class="mt-3 text-sm leading-relaxed text-black/55 dark:text-white/55">Le configurateur relie chaque sélection à un aperçu 3D du véhicule.</figcaption>
                </figure>
                <div class="space-y-6">
                    <div>
                        <h3 class="text-base font-semibold">Choisir les pièces</h3>
                        <p class="mt-2 text-sm leading-relaxed text-black/75 dark:text-white/75">Les catégories et leurs miniatures permettent de parcourir les pièces et de changer l'équipement.</p>
                    </div>
                    <div>
                        <h3 class="text-base font-semibold">Essayer les couleurs</h3>
                        <p class="mt-2 text-sm leading-relaxed text-black/75 dark:text-white/75">Les couleurs du jeu et les réglages d'éclairage permettent de modifier l'apparence du Trotmobile.</p>
                    </div>
                    <div>
                        <h3 class="text-base font-semibold">Comparer la taille</h3>
                        <p class="mt-2 text-sm leading-relaxed text-black/75 dark:text-white/75">Un personnage peut être affiché à côté du véhicule pour donner un repère de taille.</p>
                    </div>
                </div>
            </div>

            <div class="mt-10 grid gap-8 border-t border-dark-green/15 pt-8 dark:border-accent-green/20 md:grid-cols-2 md:gap-12">
                <div>
                    <h3 class="text-lg font-semibold">Récupérer les modèles du jeu</h3>
                    <div class="mt-3 space-y-3 text-base leading-relaxed text-black/80 dark:text-white/80">
                        <p>Les modèles proviennent des fichiers originaux du jeu PS2. Ces données ne pouvaient pas être affichées directement sur le Web : il fallait extraire la géométrie, les textures et retrouver les points de fixation des différentes pièces.</p>
                        <p>Les agents IA ont réalisé l'essentiel de cette analyse sous ma direction et aidé à construire les outils Python d'extraction. Les données obtenues sont préparées en JSON et PNG pour le rendu WebGL 2. De mon côté, j'ai défini l'expérience du configurateur et guidé les essais pour vérifier l'assemblage et l'affichage.</p>
                    </div>
                </div>
                <div id="loading" data-language-scroll-anchor>
                    <h3 class="text-lg font-semibold">Garder les changements de pièces agréables</h3>
                    <div class="mt-3 space-y-3 text-base leading-relaxed text-black/80 dark:text-white/80">
                        <p>Seules les pièces sélectionnées sont téléchargées, puis gardées en mémoire pour être réutilisées. Le personnage de comparaison n'est chargé que lorsque cette option est activée.</p>
                        <p>Changer d'équipement provoquait parfois des clignotements pendant le chargement des textures. L'aperçu précédent reste maintenant visible jusqu'à ce que les nouvelles ressources soient prêtes.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="content" data-language-scroll-anchor class="border-t border-dark-green/15 py-12 dark:border-accent-green/20 sm:py-16" aria-labelledby="content-title">
            <div class="grid gap-6 lg:grid-cols-[minmax(0,0.65fr)_minmax(0,1.35fr)] lg:gap-10">
                <h2 id="content-title" class="font-concert-one text-3xl text-dark-green dark:text-accent-green sm:text-4xl">Beaucoup de contenus, des pages légères</h2>
                <div class="space-y-4 text-base leading-relaxed text-black/80 dark:text-white/80">
                    <p>Conserver des images de qualité ne veut pas dire les charger dans chaque aperçu. J'ai préparé des miniatures adaptées à leur taille d'affichage, utilisé WebP et différé le chargement des images hors écran. Les fichiers originaux restent accessibles séparément.</p>
                    <p>Le lecteur du manuel ne charge que la couverture ou la double page consultée. J'ai aussi allégé la police de titres, simplifié les styles Tailwind et découpé les données d'éclairage du configurateur pour les charger selon les besoins.</p>
                </div>
            </div>

            <div id="performance" data-language-scroll-anchor class="mt-8 border-y border-dark-green/15 dark:border-accent-green/20">
                <div class="grid gap-3 py-5 sm:grid-cols-[minmax(0,1fr)_minmax(0,1fr)] sm:items-center sm:gap-8">
                    <div>
                        <h3 class="text-base font-semibold">Aperçus des huit scans de l'album</h3>
                        <p class="mt-1 text-sm leading-relaxed text-black/60 dark:text-white/60">97,9 % de réduction pour les aperçus.</p>
                    </div>
                    <div class="grid grid-cols-[1fr_1.25rem_1fr] items-center gap-2">
                        <dl><dt class="text-xs text-black/55 dark:text-white/55">Avant optimisation</dt><dd class="mt-1 text-xl font-semibold tabular-nums">4,7 Mo</dd></dl>
                        <span class="text-center text-black/40 dark:text-white/40" aria-hidden="true">&rarr;</span>
                        <dl><dt class="text-xs text-dark-green dark:text-accent-green">Après optimisation</dt><dd class="mt-1 text-xl font-semibold tabular-nums text-dark-green dark:text-accent-green">≈ 100 Ko</dd></dl>
                    </div>
                </div>
                <div class="grid gap-3 border-t border-dark-green/10 py-5 dark:border-accent-green/15 sm:grid-cols-[minmax(0,1fr)_minmax(0,1fr)] sm:items-center sm:gap-8">
                    <div><h3 class="text-base font-semibold">Feuille de styles</h3><p class="mt-1 text-sm leading-relaxed text-black/60 dark:text-white/60">Après simplification des utilitaires Tailwind.</p></div>
                    <div class="grid grid-cols-[1fr_1.25rem_1fr] items-center gap-2">
                        <dl><dt class="text-xs text-black/55 dark:text-white/55">Avant optimisation</dt><dd class="mt-1 text-xl font-semibold tabular-nums">≈ 61 Ko</dd></dl>
                        <span class="text-center text-black/40 dark:text-white/40" aria-hidden="true">&rarr;</span>
                        <dl><dt class="text-xs text-dark-green dark:text-accent-green">Après optimisation</dt><dd class="mt-1 text-xl font-semibold tabular-nums text-dark-green dark:text-accent-green">≈ 42 Ko</dd></dl>
                    </div>
                </div>
                <div class="grid gap-3 border-t border-dark-green/10 py-5 dark:border-accent-green/15 sm:grid-cols-[minmax(0,1fr)_minmax(0,1fr)] sm:items-center sm:gap-8">
                    <div><h3 class="text-base font-semibold">Éclairage du Trotmobile à l'ouverture</h3><p class="mt-1 text-sm leading-relaxed text-black/60 dark:text-white/60">91,3 % de réduction, avec chargement à la demande et compression gzip.</p></div>
                    <div class="grid grid-cols-[1fr_1.25rem_1fr] items-center gap-2">
                        <dl><dt class="text-xs text-black/55 dark:text-white/55">Avant optimisation</dt><dd class="mt-1 text-xl font-semibold tabular-nums">≈ 1,2 Mo</dd></dl>
                        <span class="text-center text-black/40 dark:text-white/40" aria-hidden="true">&rarr;</span>
                        <dl><dt class="text-xs text-dark-green dark:text-accent-green">Après optimisation</dt><dd class="mt-1 text-xl font-semibold tabular-nums text-dark-green dark:text-accent-green">≈ 105 Ko</dd></dl>
                    </div>
                </div>
            </div>
        </section>

        <section id="seo" data-language-scroll-anchor class="grid gap-6 border-t border-dark-green/15 py-12 dark:border-accent-green/20 sm:py-16 lg:grid-cols-[minmax(0,0.65fr)_minmax(0,1.35fr)] lg:gap-10" aria-labelledby="seo-title">
            <h2 id="seo-title" class="font-concert-one text-3xl text-dark-green dark:text-accent-green sm:text-4xl">Aider les visiteurs à trouver l'archive</h2>
            <div class="space-y-4 text-base leading-relaxed text-black/80 dark:text-white/80">
                <p>J'ai travaillé le référencement dès les pages elles-mêmes : un titre et une description adaptés à chaque vue, des URL canoniques cohérentes et des textes alternatifs pour les images. Les données structurées et les aperçus Open Graph et Twitter complètent ces informations.</p>
                <p>Le sitemap XML et le fichier robots.txt permettent aux moteurs de parcourir les pages et les collections. J'ai retiré du sitemap les positions internes du lecteur du manuel, qui ne correspondent pas à des pages à référencer séparément.</p>
            </div>
        </section>

        <section id="learning" data-language-scroll-anchor class="border-t-2 border-dark-green/30 pb-16 pt-10 dark:border-accent-green/35 sm:pb-20" aria-labelledby="learning-title">
            <div class="max-w-3xl">
                <h2 id="learning-title" class="font-concert-one text-3xl text-dark-green dark:text-accent-green sm:text-4xl">Ce que ce projet m'a appris</h2>
                <div class="mt-5 space-y-4 text-lg leading-relaxed text-black/80 dark:text-white/80">
                    <p>Cette archive m'a fait travailler ensemble la présentation des contenus, leur poids et leur chargement. Une miniature, une double page de manuel et une scène 3D demandent des choix différents pour rester faciles à consulter.</p>
                    <p>Le configurateur m'a aussi amené à guider un travail d'analyse de fichiers PS2 avec des agents IA. Il fallait définir ce que je voulais obtenir, examiner les résultats et reprendre les essais quand l'assemblage ou le rendu ne correspondait pas au jeu.</p>
                </div>
            </div>
        </section>
    </article>
</div>
