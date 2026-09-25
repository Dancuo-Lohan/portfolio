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
                </p>
                <h1 class="mt-2 font-concert-one text-4xl tracking-1 text-dark-green dark:text-accent-green sm:text-6xl">
                    Sans Suite
                </h1>
                <p class="mt-4 max-w-2xl text-base !leading-normal text-black/70 dark:text-white/70 sm:text-xl">
                    Une application locale conçue pour suivre mes candidatures, organiser les prochaines étapes et retrouver leur historique sans dépendre d'un tableur devenu difficile à lire.
                </p>
                <a href="https://github.com/Dancuo-Lohan/SansSuite" target="_blank" rel="noopener noreferrer" class="mt-6 inline-flex rounded-md bg-dark-green px-4 py-2 text-sm font-semibold text-white transition hover:bg-dark-green/85 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-dark-green dark:bg-accent-green dark:text-black dark:hover:bg-accent-green/80 dark:focus-visible:outline-accent-green">
                    Voir le code source
                </a>
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

        <div class="mt-10 border-t border-dark-green/15 dark:border-accent-green/20" aria-hidden="true"></div>

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
                Dans Excel, ces informations finissaient dans une cellule très longue ou réparties entre plusieurs colonnes. Sans Suite les organise autour de la candidature, de son statut et des événements qui la font évoluer.
            </p>

            <div class="workflow" role="list">
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">1</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Enregistrer l'essentiel</p>
                        <p class="workflow-description">L'entreprise, le poste, la date et le type de démarche suffisent pour commencer. L'annonce, la lettre et les notes peuvent être ajoutées plus tard.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">2</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Conserver la chronologie</p>
                        <p class="workflow-description">Les réponses, appels, relances, entretiens et notes restent regroupés sur la fiche de la candidature.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">3</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Préparer la suite</p>
                        <p class="workflow-description">Une action peut être planifiée, retrouvée dans le calendrier puis marquée comme effectuée.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Faire évoluer l'outil par l'usage
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Les premières versions m'ont permis de voir quelles informations méritaient vraiment d'apparaître dès l'ouverture. La vue d'ensemble se concentre maintenant sur les candidatures actives, celles en attente, les refus et les tâches à venir.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                J'avais d'abord séparé l'historique et les actions futures dans deux calendriers. À l'usage, cette séparation rendait le suivi moins naturel. Ils ont été réunis dans une même vue : les prochaines actions restent prioritaires, tandis que les événements passés conservent le contexte.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Cette évolution résume bien la manière dont j'ai travaillé sur Sans Suite : partir d'un besoin simple, utiliser réellement l'application, puis revoir les parcours lorsque l'organisation choisie au départ ne fonctionne pas aussi bien que prévu.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Retrouver une information rapidement
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                La liste des candidatures affiche uniquement ce qui permet de les identifier rapidement : l'entreprise, le poste, le statut, le lieu et la date. Une recherche couvre également les notes et le contenu des annonces, puis des filtres permettent d'affiner les résultats lorsque c'est nécessaire.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Le calendrier rassemble les événements passés et les tâches planifiées. Sur mobile, il devient une liste chronologique plus facile à parcourir. Les données peuvent enfin être exportées en CSV pour rester récupérables en dehors de l'application.
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
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Saisie progressive</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">Une candidature peut être créée rapidement, puis complétée si de nouveaux échanges ou un entretien rendent ces informations nécessaires.</p>
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

            <div class="mt-6 grid gap-5 md:grid-cols-2">
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Architecture</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">Les contrôleurs adaptent les requêtes HTTP, les services portent les actions métier, les repositories regroupent les accès à SQLite et les vues restent consacrées à la présentation.</p>
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
                Préparer une version publique
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Avant de publier le dépôt, j'ai simplifié son installation et retiré ce qui appartenait uniquement à l'historique de développement. Comme aucune version n'avait encore été distribuée, les migrations intermédiaires ont été regroupées en une migration initiale capable de créer directement le schéma complet.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                La base SQLite, ses fichiers temporaires, les pièces jointes et les variables d'environnement sont exclus de Git. Le code peut ainsi être consulté ou installé sans exposer les données personnelles utilisées dans ma propre instance.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Le principal défi
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Le principal défi a été de faire évoluer l'application sans perdre la simplicité qui avait motivé sa création. Il aurait été facile d'ajouter davantage de champs, de statistiques et de vues, mais chaque option supplémentaire rend la saisie plus longue et l'outil plus difficile à maintenir.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                J'ai donc conservé une approche progressive : enregistrer rapidement les informations essentielles, puis faire apparaître les fonctions complémentaires au moment où elles deviennent utiles.
            </p>
        </section>

        <section class="mt-14 max-w-4xl pb-12">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Ce que j'ai appris
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Sans Suite m'a appris à transformer un besoin quotidien en modèle applicatif. Le passage d'un fichier Excel à une base structurée m'a obligé à distinguer une candidature, son état actuel, les événements de son historique et les actions encore à réaliser.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Le projet m'a également donné un cas concret pour éprouver CorianderPHP, organiser une architecture complète et couvrir les règles métier par des tests. Il m'a surtout rappelé qu'un outil utile ne dépend pas du nombre de fonctionnalités qu'il propose, mais de la facilité avec laquelle il permet de retrouver une information et de reprendre son travail.
            </p>
        </section>
    </article>
</div>
