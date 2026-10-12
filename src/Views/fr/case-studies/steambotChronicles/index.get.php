<?php
use CorianderCore\Core\Image\ImageHandler;
?>
<div class="mx-auto max-w-screen-2xl font-poppins">
    <article class="mx-auto w-4/5">
        <div class="pt-6">
            <a href="/fr/my-work" class="inline-flex min-h-11 items-center gap-2 text-sm font-semibold text-dark-green transition hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:text-accent-green">
                <span aria-hidden="true">&larr;</span>
                Retour aux réalisations
            </a>
        </div>

        <header id="overview" data-language-scroll-anchor class="grid gap-8 pt-8 lg:grid-cols-[0.85fr_1.15fr] lg:items-end">
            <div class="min-w-0">
                <p class="font-concert-one text-sm uppercase tracking-1 text-dark-green dark:text-accent-green">
                    Étude de cas
                    <span class="ml-2 font-poppins text-xs font-medium normal-case text-black/60 dark:text-white/60">&middot; 2026</span>
                </p>
                <h1 class="mt-2 font-concert-one text-4xl tracking-1 text-dark-green dark:text-accent-green sm:text-6xl">Steambot Chronicles Archive</h1>
                <p class="mt-4 max-w-2xl text-base !leading-normal text-black/70 dark:text-white/70 sm:text-xl">J'ai créé un site où retrouver les archives de Steambot Chronicles et redécouvrir le jeu autrement : feuilleter son manuel, parcourir ses illustrations et explorer ses modèles en 3D.</p>
            </div>
            <figure id="project-preview" class="min-w-0">
                <?= ImageHandler::render('/public/assets/img/case-studies/steambotChronicles/homepage.jpg', [
                    'alt' => 'Page d\'accueil de Steambot Chronicles Archive, avec la présentation du jeu et une illustration originale.',
                    'pictureClass' => 'block w-full',
                    'class' => 'h-auto w-full rounded-lg border border-dark-green/15 object-contain object-top dark:border-accent-green/20',
                    'loading' => 'eager',
                    'decoding' => 'async',
                    'draggable' => 'false',
                ]) ?>
            </figure>
        </header>

        <section id="project-links" data-language-scroll-anchor class="mt-10 border-y border-dark-green/15 py-5 dark:border-accent-green/20" aria-labelledby="resources-title">
            <div class="flex flex-col gap-4">
                <div>
                    <h2 id="resources-title" class="font-concert-one text-sm uppercase tracking-1 text-dark-green dark:text-accent-green">Ressources du projet</h2>
                    <p class="mt-1 max-w-2xl text-sm text-black/65 dark:text-white/65">Un projet personnel, de la recherche des archives à la conception du site.</p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="https://steambot-chronicles.com/" target="_blank" rel="noopener noreferrer" class="inline-flex min-h-11 items-center justify-center rounded-md bg-dark-green px-4 py-2 text-sm font-semibold text-white transition hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:bg-accent-green dark:text-black">Voir le site internet<span class="sr-only"> (nouvel onglet)</span></a>
                    <a href="https://steambot-chronicles.com/trotmobile" target="_blank" rel="noopener noreferrer" class="inline-flex min-h-11 items-center justify-center rounded-md border border-dark-green/40 px-4 py-2 text-sm font-semibold text-dark-green transition hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:border-accent-green/40 dark:text-accent-green">Essayer le constructeur 3D<span class="sr-only"> (nouvel onglet)</span></a>
                </div>
            </div>
        </section>

        <section id="intro" data-language-scroll-anchor class="mt-14" aria-labelledby="intro-title">
            <div class="max-w-4xl">
                <h2 id="intro-title" class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">Introduction</h2>
                <div class="mt-6 space-y-5 text-base leading-relaxed sm:text-lg text-black/80 dark:text-white/80">
                    <p>Steambot Chronicles est mon jeu préféré depuis l'enfance. Son site officiel a disparu, mais il reste des images, des musiques et des documents que je voulais réunir au même endroit.</p>
                    <p>À l'origine du projet, je cherchais un fond d'écran. Un besoin tout simple, pour un jeu que je connais depuis des années. Pourtant, les premiers résultats de recherche ne me permettaient pas de retrouver facilement une image originale, sans le filigrane d'un site de presse.</p>
                    <p>Cette recherche a été le point de départ du site : réunir les ressources du jeu et leur donner une présentation qui rende justice à cet univers.</p>
                    <p id="project-role">J'ai porté le projet seul : recherche des ressources, sélection des images, direction artistique et conception des interfaces. Pour le développement, je me suis appuyé sur CorianderPHP, mon framework PHP, et sur des agents IA, notamment pour comprendre les fichiers du jeu et reconstruire ses modèles 3D.</p>
                    <p>PHP facilite le déploiement chez mon hébergeur, et ce projet public me permet de mettre mon framework à l'épreuve. J'utilise Tailwind CSS pour la mise en forme et TypeScript pour les interactions.</p>
                </div>
            </div>
        </section>

        <section id="intent" data-language-scroll-anchor class="mt-14 max-w-4xl" aria-labelledby="intent-title">
            <p class="text-sm font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">Intention</p>
            <h2 id="intent-title" class="mt-2 font-concert-one text-3xl leading-tight text-dark-green dark:text-accent-green sm:text-4xl">Donner envie de revenir au jeu</h2>
            <div class="mt-6 space-y-5 text-base leading-relaxed text-black/80 dark:text-white/80 sm:text-lg">
                <p>Steambot Chronicles mêle exploration, musique et personnalisation de véhicules dans une aventure sur PlayStation 2. Cette liberté fait partie de ce qui m'a marqué. Pour lui consacrer un site, je voulais faire une place à chacune de ces expériences : retrouver une illustration, écouter un morceau ou essayer de construire son propre Trotmobile.</p>
                <p>J'ai pensé le projet d'abord pour les fans, qui connaissent déjà cet univers et cherchent ses ressources. Les images et la musique leur offrent des points d'entrée familiers. Pour les visiteurs qui découvrent le jeu, la présentation de son univers et les outils 3D donnent une raison de s'y intéresser. Il fallait donc réunir les contenus, puis les organiser pour que chacun puisse commencer par ce qui l'attire.</p>
            </div>
        </section>

        <section id="research" data-language-scroll-anchor class="mt-14" aria-labelledby="research-title">
            <div class="grid max-w-4xl gap-6">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">Recherche</p>
                    <h2 id="research-title" class="mt-2 font-concert-one text-3xl leading-tight text-dark-green dark:text-accent-green sm:text-4xl">Retrouver les images, une page après l'autre</h2>
                </div>
                <div class="space-y-5 text-base leading-relaxed text-black/80 sm:text-lg dark:text-white/80">
                    <p>Pour constituer cette collection, j'ai commencé par chercher les images originales du jeu. Les recherches sur le Web ont donné peu de résultats ; les anciens sites officiels, conservés dans la Wayback Machine, se sont révélés bien plus riches. J'ai parcouru leurs pages une à une, en explorant les versions anglaise, japonaise et coréenne.</p>
                    <p>Ce travail demandait de regarder les images autant que de les collecter. Ma connaissance du jeu m'aidait à reconnaître son style et les illustrations que j'avais déjà vues. Les filigranes officiels de l'éditeur étaient aussi des repères : je cherchais les ressources d'origine, plutôt que les copies marquées par les sites qui les avaient relayées.</p>
                    <p>La galerie réunit aujourd'hui 155 éléments, dont des artworks, des fonds d'écran, des captures et des vidéos. Derrière cette collection, il y a surtout le plaisir de remettre en lumière des images devenues difficiles à trouver, parfois même oubliées des fans.</p>
                </div>
            </div>

            <figure id="gallery-preview" class="mt-8 min-w-0 w-full max-w-4xl lg:w-3/4">
                <?= ImageHandler::render('/public/assets/img/case-studies/steambotChronicles/gallery-page.jpg', [
                    'alt' => 'Page Galerie de Steambot Chronicles Archive, avec les catégories et une grille d\'illustrations du jeu.',
                    'pictureClass' => 'block w-full',
                    'class' => 'h-auto w-full rounded-lg border border-dark-green/15 object-contain dark:border-accent-green/20',
                    'loading' => 'lazy',
                    'decoding' => 'async',
                    'draggable' => 'false',
                ]) ?>
                <figcaption class="mt-3 max-w-4xl text-sm leading-relaxed text-black/65 dark:text-white/65">La galerie rassemble les ressources retrouvées et permet de les parcourir par catégorie : personnages, Trotmobiles, fonds d'écran ou documents à imprimer.</figcaption>
            </figure>
        </section>

        <section id="design" data-language-scroll-anchor class="mt-14" aria-labelledby="design-title">
            <div class="grid max-w-4xl gap-8">
                <div class="max-w-4xl">
                    <p class="text-sm font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">Direction artistique et architecture</p>
                    <h2 id="design-title" class="mt-2 font-concert-one text-3xl leading-tight text-dark-green dark:text-accent-green sm:text-4xl">Reconnaître le jeu au premier regard</h2>
                    <div class="mt-5 space-y-5 text-base leading-relaxed text-black/80 sm:text-lg dark:text-white/80">
                        <p>Une fois les ressources réunies, elles ont guidé la direction artistique. J'ai prélevé leurs couleurs, puis fait le tri pour composer la palette du site. Sur la page d'accueil, ces couleurs dialoguent avec les illustrations affichées : le visiteur entre dans un univers visuel qui appartient déjà au jeu.</p>
                        <p>Le choix de l'image d'accueil comptait particulièrement. Je voulais une illustration reconnaissable par les fans, mais qu'ils n'auraient pas forcément vue auparavant. Associée au texte, elle devait donner une première impression mémorable et susciter l'envie de découvrir la suite.</p>
                        <p>Pour que cette première impression mène à une véritable visite, j'ai organisé les pages autour de plusieurs façons d'aborder le jeu. La page « Le jeu » présente son univers ; la galerie laisse les images éveiller les souvenirs ; la page « À propos » raconte la raison d'être du site. La musique et la galerie sont accessibles après quelques instants de défilement sur l'accueil. Le manuel et les crédits se trouvent dans la rubrique Archive, pour ceux qui souhaitent poursuivre l'exploration.</p>
                    </div>
                </div>
            </div>

            <figure id="game-preview" class="mt-8 min-w-0 w-full max-w-4xl lg:w-3/4">
                <?= ImageHandler::render('/public/assets/img/case-studies/steambotChronicles/game-page.jpg', [
                    'alt' => 'Page Le jeu de Steambot Chronicles Archive, avec la présentation de l\'univers et une capture de Vanilla et Connie sur la plage.',
                    'pictureClass' => 'block w-full',
                    'class' => 'h-auto w-full rounded-lg border border-dark-green/15 object-contain dark:border-accent-green/20',
                    'loading' => 'lazy',
                    'decoding' => 'async',
                    'draggable' => 'false',
                ]) ?>
                <figcaption class="mt-3 max-w-4xl text-sm leading-relaxed text-black/65 dark:text-white/65">La page « Le jeu » donne un premier aperçu de l'aventure. Le texte et les captures permettent de découvrir cet univers avant d'en explorer les archives.</figcaption>
            </figure>
        </section>

        <section id="3d" data-language-scroll-anchor class="mt-14" aria-labelledby="3d-title">
            <div class="max-w-4xl">
                <p class="text-sm font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">Conception de l'interaction</p>
                <h2 id="3d-title" class="mt-2 font-concert-one text-3xl leading-tight text-dark-green dark:text-accent-green sm:text-4xl">Construire le Trotmobile que l'on aurait aimé piloter</h2>
                <p class="mt-5 text-lg leading-relaxed text-black/80 dark:text-white/80">Parmi ces points d'entrée, le constructeur occupe une place particulière. Ce que j'aimais le plus dans Steambot Chronicles, c'était construire un Trotmobile à mon image. Le véhicule changeait avec mes envies et mes activités : un grand plateau pour transporter des fossiles, un bras-pioche ou une foreuse pour les extraire. Choisir ses pièces, c'était déjà choisir sa manière de jouer. J'ai voulu retrouver ce plaisir dans le navigateur.</p>
            </div>

            <figure id="builder-preview" class="mt-8 min-w-0 w-full max-w-4xl lg:w-3/4">
                <?= ImageHandler::render('/public/assets/img/case-studies/steambotChronicles/builder-editor.jpg', [
                    'alt' => 'Constructeur de Trotmobiles avec le modèle 3D, les catégories et les miniatures des pièces.',
                    'pictureClass' => 'block w-full',
                    'class' => 'h-auto w-full rounded-lg border border-dark-green/15 object-contain dark:border-accent-green/20',
                    'loading' => 'lazy',
                    'decoding' => 'async',
                    'draggable' => 'false',
                ]) ?>
                <figcaption class="mt-4 flex flex-col items-start gap-3">
                    <p class="max-w-2xl text-base leading-relaxed text-black/80 dark:text-white/80">Les pièces sont présentées avec leur image et leur nom, à côté du Trotmobile. Chaque choix se retrouve directement sur le modèle 3D.</p>
                    <a href="https://steambot-chronicles.com/trotmobile" target="_blank" rel="noopener noreferrer" class="inline-flex min-h-11 shrink-0 items-center justify-center rounded-md bg-dark-green px-4 py-2 text-center text-sm font-semibold text-white transition hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:bg-accent-green dark:text-black">Créer votre Trotmobile<span class="sr-only"> (nouvel onglet)</span></a>
                </figcaption>
            </figure>

            <h3 class="mt-10 max-w-4xl text-xl font-semibold text-black dark:text-white">Voir les pièces avant de les choisir</h3>

            <div class="mt-8 max-w-4xl space-y-5 text-base leading-relaxed text-black/80 dark:text-white/80 sm:text-lg">
                <p>Ma première version proposait des listes déroulantes pour remplacer les pièces. J'ai ensuite essayé une approche plus directe : cliquer sur une partie du véhicule et accéder à ses options sur le modèle, comme dans un environnement de création 3D. Ces essais m'ont permis d'explorer la place que l'interaction devait prendre dans l'interface.</p>
                <p>J'ai finalement retenu des miniatures accompagnées du nom des pièces. Pour choisir entre plusieurs bras ou plusieurs plateaux, leur silhouette est une information essentielle. Les voir côte à côte permet de comparer leur apparence avant de les équiper. Le libellé apporte ensuite la précision que l'image seule ne donne pas.</p>
                <p>Le constructeur permet ainsi de changer toutes les pièces, les couleurs et les emblèmes, avec un rendu proche de celui du jeu. J'ai concentré le travail sur la personnalisation. Ajouter les mouvements aurait demandé un chantier important pour un apport limité à ce que je voulais proposer : le plaisir de composer son propre véhicule.</p>
            </div>

            <p class="mt-4 max-w-4xl border-l-2 border-dark-green/25 pl-5 text-sm leading-relaxed text-black/65 dark:border-accent-green/30 dark:text-white/65">Ce choix rejoint les observations du <a href="https://baymard.com/research-articles/use-visual-filters-for-visually-distinct-product-attributes" target="_blank" rel="noopener noreferrer" class="font-semibold text-dark-green underline decoration-dark-green/35 underline-offset-4 transition hover:opacity-70 dark:text-accent-green dark:decoration-accent-green/35">Baymard Institute<span class="sr-only"> (nouvel onglet)</span></a> : lorsque des options se distinguent surtout par leur apparence, la combinaison d'une image et d'un libellé les rend plus faciles à reconnaître que du texte seul.</p>

            <div id="extraction" class="mt-10 max-w-4xl">
                <h3 class="text-xl font-semibold text-black dark:text-white">Des fichiers PS2 au navigateur</h3>
                <div class="mt-3 space-y-5 text-base leading-relaxed text-black/80 dark:text-white/80 sm:text-lg">
                    <p>Derrière cette interface, un autre travail était nécessaire : comprendre les fichiers d'un jeu PS2 pour faire apparaître ses véhicules dans le navigateur. Les modèles devaient être reconstruits à partir des données du jeu, puis associés à leurs textures. Il fallait aussi interpréter les shaders pour retrouver un rendu proche de l'original.</p>
                    <p>Les agents IA ont analysé ces fichiers et m'ont aidé à comprendre la façon dont les modèles et leurs textures étaient représentés. Cette aide a rendu possible une partie du projet qui, sans elle, aurait été de loin la plus complexe. J'ai pu consacrer davantage de temps aux contenus et à l'expérience que je souhaitais créer.</p>
                </div>
            </div>

        </section>

        <section id="community" data-language-scroll-anchor class="mt-14" aria-labelledby="community-title">
                <div class="max-w-4xl">
                    <p class="text-sm font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">Retour de la communauté</p>
                    <h2 id="community-title" class="mt-2 font-concert-one text-3xl leading-tight text-dark-green dark:text-accent-green sm:text-4xl">Quand les fans font évoluer le projet</h2>
                    <p class="mt-4 text-base leading-relaxed text-black/80 dark:text-white/80 sm:text-lg">Après avoir partagé le site avec la communauté, un fan m'a envoyé sa propre collection d'artworks. Ce moment a donné une autre dimension au projet : les recherches que j'avais commencées pour moi devenaient utiles à d'autres, et leurs archives venaient enrichir les miennes.</p>
                    <p class="mt-4 text-base leading-relaxed text-black/80 dark:text-white/80 sm:text-lg">Les premiers échanges avec les fans ont fait apparaître une envie que je n'avais pas placée au centre du projet : retrouver aussi les personnages et leurs différentes tenues. J'ai ajouté cette idée à ma liste, puis intégré un visionneur dédié. C'est une évolution directement née des personnes auxquelles le site s'adresse.</p>
                </div>
                <figure id="character-preview" class="mt-8 min-w-0 w-full max-w-4xl lg:w-3/4">
                    <?= ImageHandler::render('/public/assets/img/case-studies/steambotChronicles/character-viewer.jpg', [
                        'alt' => 'Visionneur 3D de Vanilla avec une grille de tenues à sélectionner.',
                        'pictureClass' => 'block w-full',
                        'class' => 'h-auto w-full rounded-lg border border-dark-green/15 object-contain dark:border-accent-green/20',
                        'loading' => 'lazy',
                        'decoding' => 'async',
                        'draggable' => 'false',
                    ]) ?>
                    <figcaption class="mt-3">
                        <a href="https://steambot-chronicles.com/characters" target="_blank" rel="noopener noreferrer" class="inline-flex min-h-11 items-center justify-center rounded-md border border-dark-green/40 px-4 py-2 text-sm font-semibold text-dark-green transition hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:border-accent-green/40 dark:text-accent-green">Explorer les personnages<span class="sr-only"> (nouvel onglet)</span></a>
                    </figcaption>
                </figure>
        </section>

        <section id="performance" data-language-scroll-anchor class="mt-14" aria-labelledby="performance-title">
            <div class="grid max-w-4xl gap-6">
                <div class="max-w-4xl">
                    <p class="text-sm font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">Performance</p>
                    <h2 id="performance-title" class="mt-2 font-concert-one text-3xl leading-tight text-dark-green dark:text-accent-green sm:text-4xl">Charger au rythme de la visite</h2>
                </div>
                <div>
                    <div class="mt-5 space-y-5 text-base leading-relaxed text-black/80 sm:text-lg dark:text-white/80">
                        <p>Ces ajouts enrichissent le site, mais augmentent aussi le nombre de ressources à charger. Pour garder la visite fluide, j'ai limité les téléchargements à ce qui doit être affiché. Les images des pages sont converties automatiquement en WebP pour alléger leur affichage, tandis que les ressources originales restent disponibles séparément.</p>
                        <p>Le site propose plus d'une centaine de modèles 3D, chargés uniquement lorsqu'ils doivent être affichés. Le lecteur du manuel charge la double page consultée, et le lecteur YouTube attend le lancement de la vidéo. Le contenu arrive ainsi au fil de la visite.</p>
                    </div>
                </div>
            </div>

        </section>

        <section id="visibility" data-language-scroll-anchor class="mt-14 grid max-w-4xl gap-6" aria-labelledby="visibility-title">
                <div class="max-w-4xl">
                    <p class="text-sm font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">Référencement</p>
                    <h2 id="visibility-title" class="mt-2 font-concert-one text-3xl leading-tight text-dark-green dark:text-accent-green sm:text-4xl">Permettre au prochain fan de trouver le site</h2>
                </div>
                <div class="space-y-5 text-base leading-relaxed text-black/80 sm:text-lg dark:text-white/80">
                    <p>Le référencement est aujourd'hui le travail qui me demande le plus d'attention. Le projet est né d'une recherche infructueuse ; il doit à son tour pouvoir être trouvé par quelqu'un qui cherche une illustration ou des informations sur Steambot Chronicles.</p>
                    <p>Je travaille donc le contenu des pages, leurs titres, les textes alternatifs des images et le sitemap. Les pages consacrées au jeu, à la galerie et au projet donnent aussi des raisons de visiter le site au-delà d'un fichier à télécharger. Le domaine est encore récent : je préfère laisser le temps au site d'être découvert avant de juger ses résultats.</p>
                </div>
        </section>

        <section id="learning" data-language-scroll-anchor class="mt-14 pb-16 sm:pb-20" aria-labelledby="learning-title">
            <div class="grid max-w-4xl gap-6">
                <div class="max-w-4xl">
                    <p class="text-sm font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">Bilan</p>
                    <h2 id="learning-title" class="mt-2 font-concert-one text-3xl leading-tight text-dark-green dark:text-accent-green sm:text-4xl">Ce que je retiens du projet</h2>
                </div>
                <div>
                    <div class="mt-5 space-y-5 text-base leading-relaxed text-black/80 sm:text-lg dark:text-white/80">
                        <p>Ce projet m'a appris à mieux travailler avec des agents IA. Pour concevoir une page, je leur demande souvent un premier jet : avoir une proposition sous les yeux m'aide à dépasser la page blanche et à préciser mon intention. Je peux alors dire ce qui fonctionne, ce qui manque et ce que je veux modifier. Pour le classement et l'optimisation des images, je délègue aussi une première passe, puis je vérifie et corrige. Leur aide me laisse davantage de temps pour les choix créatifs, à condition de garder cette étape de relecture.</p>
                        <p>Les échanges avec les fans m'amènent à écrire principalement en anglais et à expliquer mes choix à des personnes qui connaissent bien le jeu. Leurs demandes me permettent de faire évoluer le site à partir d'usages concrets.</p>
                        <p>J'aimerais poursuivre ce travail avec un guide du jeu illustré de mes propres captures. Il faudra d'abord que je termine une partie à 100 %. Après avoir réuni les archives et recréé une partie de la personnalisation, ce guide apporterait une autre façon de partager ma connaissance de Steambot Chronicles.</p>
                    </div>
                    <a href="https://steambot-chronicles.com/" target="_blank" rel="noopener noreferrer" class="mt-7 inline-flex min-h-11 items-center justify-center rounded-md bg-dark-green px-4 py-2 text-sm font-semibold text-white transition hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:bg-accent-green dark:text-black">Voir le projet<span class="sr-only"> (nouvel onglet)</span></a>
                </div>
            </div>
        </section>
    </article>
</div>
