<div class="mx-auto max-w-screen-2xl font-poppins">
    <article class="mx-auto w-4/5">
        <div class="pt-6">
            <a href="/fr/my-work" class="inline-flex items-center gap-2 text-sm font-semibold text-dark-green transition hover:opacity-70 dark:text-accent-green">
                <span aria-hidden="true">&larr;</span>
                Retour aux réalisations
            </a>
        </div>

        <header class="grid gap-8 pt-8 lg:grid-cols-[0.85fr_1.15fr] lg:items-end">
            <div>
                <p class="font-concert-one text-sm uppercase tracking-1 text-dark-green dark:text-accent-green">
                    Étude de cas
                    <span class="ml-2 font-poppins text-xs font-medium normal-case text-black/60 dark:text-white/60">&middot; 2026</span>
                </p>
                <h1 class="mt-2 font-concert-one text-4xl tracking-1 text-dark-green dark:text-accent-green sm:text-6xl">
                    Sans Suite
                </h1>
                <p class="mt-4 max-w-2xl text-base !leading-normal text-black/70 dark:text-white/70 sm:text-xl">
                    Une application locale conçue pour suivre mes candidatures, organiser les prochaines étapes et retrouver leur historique sans dépendre d'un tableur devenu difficile à lire.
                </p>
            </div>

            <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/case-studies/sansSuite/screenshot-sansSuite.jpg', [
                'alt' => 'Vue d\'ensemble de l\'application Sans Suite.',
                'pictureClass' => 'block w-full',
                'class' => 'h-auto w-full rounded-lg border border-dark-green/15 object-contain object-top dark:border-accent-green/20',
                'loading' => 'eager',
                'decoding' => 'async',
                'draggable' => 'false',
            ]) ?>
        </header>

        <section class="mt-10 border-y border-dark-green/15 py-5 dark:border-accent-green/20">
            <div class="flex flex-col gap-4">
                <div>
                    <p class="font-concert-one text-sm uppercase tracking-1 text-dark-green dark:text-accent-green">
                        Ressources du projet
                    </p>
                    <p class="mt-1 max-w-2xl text-sm text-black/65 dark:text-white/65">
                        Le code source de l'application et les instructions nécessaires à son installation sont disponibles sur GitHub.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="https://github.com/Dancuo-Lohan/SansSuite" target="_blank" rel="noopener noreferrer" class="inline-flex rounded-md border border-dark-green/40 px-4 py-2 text-sm font-semibold text-dark-green transition hover:opacity-70 dark:border-accent-green/40 dark:text-accent-green">
                        Code source de Sans Suite
                    </a>
                </div>
            </div>
        </section>

        <section class="mt-10 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Introduction
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                J'ai commencé Sans Suite à partir d'un besoin personnel assez simple. Je suivais mes candidatures dans un fichier Excel qui contenait progressivement de plus en plus de lignes et de colonnes.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Le tableur suffisait pour enregistrer une entreprise, un poste et une date. Il devenait beaucoup moins pratique dès que je voulais conserver une annonce, plusieurs échanges, des notes ou les prochaines actions à effectuer.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Je voulais donc un outil pensé pour ce suivi, capable de garder une chronologie claire sans rendre la saisie plus lourde. Le nom « Sans Suite » fait référence aux candidatures qui restent parfois sans réponse.
            </p>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Du tableur à un suivi structuré
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                Une candidature possède son propre historique. Elle peut commencer par une annonce ou une démarche spontanée, puis être suivie d'une relance, d'un appel, d'un entretien, d'une proposition ou d'un refus plusieurs semaines plus tard.
            </p>
            <p class="mt-3 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                Dans Excel, ces informations finissaient dans une cellule très longue ou réparties entre plusieurs colonnes. Sans Suite regroupe chaque démarche dans une fiche avec son statut, son historique et les prochaines actions à effectuer.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Ajouter une candidature rapidement
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Mon premier objectif était de pouvoir ajouter une candidature rapidement. Pendant une recherche d'emploi, tenir son suivi à jour peut vite devenir une corvée. Avec un long formulaire à remplir à chaque fois, j'aurais probablement fini par remettre la saisie à plus tard.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Je n'ai donc rendu obligatoires que quatre informations : le nom de l'entreprise, son adresse ou sa ville, le poste concerné et la date de candidature. Cette dernière est préremplie avec la date du jour afin d'éviter une saisie supplémentaire dans la majorité des cas.
            </p>
            <div class="mt-6 grid gap-3 sm:grid-cols-2">
                <div class="rounded-md border border-dark-green/15 bg-white/80 px-4 py-3 text-sm font-semibold text-black/75 dark:border-accent-green/20 dark:bg-black/80 dark:text-white/75">Nom de l'entreprise</div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 px-4 py-3 text-sm font-semibold text-black/75 dark:border-accent-green/20 dark:bg-black/80 dark:text-white/75">Adresse ou ville</div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 px-4 py-3 text-sm font-semibold text-black/75 dark:border-accent-green/20 dark:bg-black/80 dark:text-white/75">Poste concerné</div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 px-4 py-3 text-sm font-semibold text-black/75 dark:border-accent-green/20 dark:bg-black/80 dark:text-white/75">Date préremplie</div>
            </div>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Les autres informations restent facultatives : le site et l'URL de l'annonce, sa description complète, la lettre de motivation envoyée, des notes personnelles ou des pièces jointes. Elles peuvent être renseignées dès la création ou ajoutées plus tard. La fiche reste donc rapide à créer, sans m'empêcher de conserver les éléments utiles pour la suite.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Organiser le suivi
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Une fois la candidature créée, sa fiche rassemble les réponses, les appels, les relances, les entretiens et les notes. Une action peut aussi être planifiée, retrouvée dans le calendrier puis marquée comme effectuée.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                La liste des candidatures affiche uniquement les informations nécessaires pour les identifier : l'entreprise, le poste, le statut, le lieu et la date. La recherche couvre aussi les notes et le contenu des annonces, tandis que les filtres permettent de réduire les résultats lorsque la liste s'allonge.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Sur mobile, le calendrier devient une liste chronologique plus facile à parcourir. Les candidatures peuvent également être exportées au format CSV afin de récupérer les données en dehors de l'application.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Faire évoluer l'interface
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Les premières versions de la vue d'ensemble affichaient davantage d'informations. En utilisant l'application, j'ai choisi de la recentrer sur les candidatures actives, celles en attente, les refus et les tâches à venir. Ce sont les informations dont j'ai besoin pour savoir rapidement où en est ma recherche.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                J'avais également séparé l'historique et les actions futures dans deux calendriers. Cette organisation obligeait à passer de l'un à l'autre pour suivre une candidature. Je les ai réunis dans une même vue : les tâches à venir apparaissent en priorité, et les actions déjà effectuées restent accessibles dans l'historique.
            </p>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Des choix adaptés au contexte
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                La recherche d'emploi peut déjà être pesante. Je ne voulais donc ni objectifs quotidiens, ni statistiques culpabilisantes, ni messages de motivation artificiels. L'interface reste sobre et les informations complémentaires apparaissent seulement lorsqu'elles deviennent utiles.
            </p>

            <div class="mt-6 grid gap-5 md:grid-cols-2">
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Pas d'objectifs artificiels</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">L'application ne fixe aucun objectif quotidien et ne transforme pas la recherche d'emploi en tableau de performance. Les actions secondaires restent discrètes tant qu'elles ne sont pas nécessaires.</p>
                </div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Données locales</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">Les candidatures et les documents restent sur la machine. Aucun compte distant ni service supplémentaire n'est nécessaire pour utiliser l'application.</p>
                </div>
            </div>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Construction technique
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                Sans Suite utilise CorianderPHP, mon framework PHP. Ce projet m'a permis de l'employer sur une application complète, au-delà de sa documentation, et de vérifier que ses choix restaient adaptés à un besoin concret.
            </p>
            <a href="/fr/case-studies/corianderPHP" class="mt-5 inline-flex items-center gap-2 rounded-md border border-dark-green/25 px-4 py-2 text-sm font-semibold text-dark-green transition hover:border-dark-green/50 hover:bg-dark-green/5 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-dark-green dark:border-accent-green/30 dark:text-accent-green dark:hover:border-accent-green/60 dark:hover:bg-accent-green/10 dark:focus-visible:outline-accent-green">
                Voir l'étude de cas du framework CorianderPHP
                <span aria-hidden="true">&rarr;</span>
            </a>

            <div class="mt-6 grid gap-5 md:grid-cols-2">
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Architecture</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">Les contrôleurs traitent les requêtes HTTP, les services regroupent la logique métier, les repositories gèrent les accès à SQLite et les vues s'occupent de l'affichage.</p>
                </div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Interface</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">TypeScript gère les interactions côté navigateur et Tailwind CSS permet de faire évoluer l'interface tout en gardant une présentation cohérente.</p>
                </div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Sécurité des données</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">Les mutations sont protégées contre les requêtes CSRF, les sorties sont échappées et les pièces jointes sont stockées hors du dossier public.</p>
                </div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Tests</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">La suite automatisée couvre les principaux comportements métier : recherche, statuts, notes, événements, archivage, tâches planifiées et export CSV.</p>
                </div>
            </div>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Le principal défi
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Le principal défi a été de faire évoluer l'application sans perdre la simplicité qui avait motivé sa création. Il aurait été facile d'ajouter davantage de champs, de statistiques et de vues, mais chaque option supplémentaire rend la saisie plus longue et l'outil plus difficile à maintenir.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Chaque ajout devait donc répondre à un besoin rencontré pendant l'utilisation, sans rallonger inutilement la saisie ni compliquer les parcours déjà en place.
            </p>
        </section>

        <section class="mt-14 max-w-4xl pb-12">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Ce que j'ai appris
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Sans Suite m'a appris à partir d'un problème concret pour construire une application adaptée à mon usage. Le passage d'un fichier Excel à une base structurée m'a obligé à distinguer une candidature, son état actuel, les événements de son historique et les actions encore à réaliser.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Le projet m'a également donné un cas concret pour éprouver CorianderPHP, organiser une architecture complète et couvrir les règles métier par des tests. Il m'a surtout confirmé qu'un outil de suivi reste utile seulement s'il est assez simple pour être tenu à jour et assez clair pour retrouver le contexte d'une candidature plusieurs semaines plus tard.
            </p>
        </section>
    </article>
</div>
