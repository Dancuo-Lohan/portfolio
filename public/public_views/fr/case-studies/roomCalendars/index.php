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
                    Room Calendars
                </h1>
                <p class="mt-4 max-w-2xl text-base !leading-normal text-black/70 dark:text-white/70 sm:text-xl">
                    Une application interne conçue pour consulter rapidement les disponibilités de salles et retrouver une réunion sans parcourir les calendriers Outlook un par un.
                </p>
            </div>

            <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/case-studies/roomCalendars/mockup.jpg', [
                'alt' => 'Maquette de l\'application Room Calendars.',
                'pictureClass' => 'block w-full',
                'class' => 'h-auto w-full rounded-lg border border-dark-green/15 object-cover object-top dark:border-accent-green/20',
                'loading' => 'lazy',
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
                Room Calendars est né après l'arrêt d'un outil SaaS utilisé pour la gestion des salles de réunion. Une partie du suivi avait alors été reprise directement dans Outlook.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Les informations étaient bien disponibles, mais leur consultation devenait vite fastidieuse dès qu'il fallait comparer plusieurs salles sur plusieurs jours. Même pour une vérification simple, il fallait naviguer entre différents calendriers et répéter les mêmes manipulations.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                L'accueil avait aussi besoin de retrouver rapidement une salle lorsqu'un visiteur connaissait le nom d'un participant, mais pas l'endroit où se tenait sa réunion.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Le projet devait donc répondre à deux besoins principaux : faciliter la consultation des disponibilités et permettre de retrouver une réunion à partir des informations disponibles.
            </p>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Comprendre le besoin
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                Avant de commencer le développement, j'ai pris le temps d'observer le fonctionnement d'Outlook et la manière dont les salles étaient gérées dans l'environnement Microsoft.
            </p>
            <p class="mt-3 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                Cette première analyse a confirmé plusieurs points :
            </p>
            <div class="workflow" role="list">
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">1</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Comparer plusieurs salles demandait trop de manipulations.</p>
                        <p class="workflow-description">Il fallait passer d'un calendrier à l'autre pour obtenir une vue d'ensemble. Les temps de chargement étaient peu adaptés à une consultation rapide, et plus le nombre de salles et de jours augmentait, plus la navigation devenait contraignante.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">2</div>
                    <div class="workflow-content">
                        <p class="workflow-title">La recherche ne répondait pas au besoin de l'accueil.</p>
                        <p class="workflow-description">Retrouver une réunion à partir d'un participant ou d'une information partielle restait peu pratique.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">3</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Les données existaient déjà dans l'environnement Microsoft.</p>
                        <p class="workflow-description">Les salles et leurs calendriers pouvaient être récupérés via Microsoft Graph API. Il n'était donc pas nécessaire de recréer une nouvelle source de données.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Les objectifs du projet
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                Le développement s'est organisé autour de quatre priorités :
            </p>
            <div class="workflow" role="list">
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">1</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Consulter rapidement les disponibilités</p>
                        <p class="workflow-description">Afficher plusieurs salles et plusieurs jours dans une même interface.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">2</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Retrouver une réunion</p>
                        <p class="workflow-description">Permettre à certains profils de rechercher une réunion à partir d'un participant ou d'autres informations disponibles.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">3</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Garder une interface lisible</p>
                        <p class="workflow-description">Présenter suffisamment d'informations sans transformer le calendrier en tableau difficile à parcourir.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">4</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Limiter les temps d'attente</p>
                        <p class="workflow-description">Éviter que chaque consultation dépende directement des temps de réponse de Microsoft Graph.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Concevoir avec les utilisateurs
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                J'ai travaillé par petites itérations avec le chef de projet et les futurs utilisateurs. Le calendrier a connu plusieurs versions avant d'arriver à une organisation satisfaisante.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                La difficulté principale n'était pas d'afficher les réunions, mais de rendre l'ensemble lisible en quelques secondes. Plusieurs salles, plusieurs jours et différentes informations de réunion devaient tenir dans une même interface sans donner une impression de surcharge.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Les principaux écrans ont d'abord été préparés sur Figma. Les maquettes permettaient de tester rapidement l'organisation des informations avant le développement et de rendre les échanges plus concrets.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Les retours utilisateurs ont ensuite guidé plusieurs ajustements sur l'espacement, les regroupements et la hiérarchie visuelle. Sur un outil utilisé régulièrement, quelques secondes perdues ou une information difficile à repérer finissent vite par peser dans l'usage quotidien.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Organiser le développement
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Le projet était découpé en tâches suivies avec GitHub Issues. Les sujets les plus importants étaient ensuite séparés en sous-tâches plus faciles à traiter, chacune développée sur sa propre branche avant intégration via Pull Request.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Cette organisation me permettait de garder une vision claire de l'avancement tout en travaillant séparément sur les différents sujets : intégration de Microsoft Graph, recherche, cache, droits utilisateurs ou interactions front-end.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                J'ai aussi choisi de traiter tôt la partie que je considérais comme la plus risquée : la récupération et l'organisation des données provenant de Microsoft Graph.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Si cette partie ne permettait pas d'obtenir des données fiables ou des temps de réponse satisfaisants, une grande partie de la solution aurait dû être revue. La valider en premier évitait donc de construire le reste du projet sur une base incertaine.
            </p>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Travailler avec Microsoft Graph
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                Microsoft Graph API permettait de récupérer les salles et leurs réunions, mais interroger directement l'API à chaque affichage aurait rendu l'application trop dépendante d'un service externe.
            </p>
            <p class="mt-3 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                J'ai donc mis en place plusieurs mécanismes pour garder l'interface rapide :
            </p>
            <div class="mt-6 grid gap-5 lg:grid-cols-2">
                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Requêtes batch JSON</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">Plusieurs demandes peuvent être regroupées dans un même appel afin de limiter le nombre de requêtes envoyées à Microsoft Graph.</p>
                </div>
                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Stockage en MySQL</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">Les données nécessaires à l'affichage sont enregistrées localement pour éviter de solliciter l'API à chaque consultation.</p>
                </div>
                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Cache sur les périodes les plus consultées</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">Les réunions du mois en cours et du mois suivant sont conservées afin de couvrir la majorité des usages.</p>
                </div>
                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Rafraîchissement automatique</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">Un cronjob actualise les données toutes les dix minutes pour qu'elles soient prêtes avant même qu'un utilisateur ouvre le calendrier.</p>
                </div>
            </div>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                Ce fonctionnement permet de garder une interface réactive tout en limitant les appels vers Microsoft Graph.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Prévoir les défaillances
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Le cronjob améliore les performances, mais je ne voulais pas que toute l'application repose sur son bon fonctionnement.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Les données disposent donc également d'une durée de validité. Si le cronjob ne s'exécute plus et que le cache arrive à expiration, l'application peut déclencher elle-même une nouvelle synchronisation.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Dans cette situation, le premier utilisateur peut attendre jusqu'à une quarantaine de secondes le temps que les données soient récupérées. Les consultations suivantes retrouvent ensuite un fonctionnement normal jusqu'à la prochaine expiration.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Ce mécanisme permet à l'application de continuer à fonctionner sans intervention manuelle en cas de problème ponctuel sur la tâche planifiée.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Sécurité et droits d'accès
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                L'authentification repose sur le SSO Microsoft. Les utilisateurs se connectent donc avec leur compte professionnel existant, sans ajouter un second système de mots de passe à maintenir.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Les droits varient selon les besoins. La consultation des disponibilités reste accessible aux utilisateurs concernés, tandis que certaines fonctionnalités, comme la recherche avancée dans les réunions, sont réservées aux profils autorisés.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Les échanges avec Microsoft Graph et le navigateur sont chiffrés. Les tâches automatisées sont également protégées afin d'éviter qu'elles puissent être déclenchées librement.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Les calendriers peuvent contenir des informations sur les participants, les horaires ou l'organisation de certaines réunions. La gestion des accès faisait donc partie du projet dès le départ.
            </p>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Choix techniques
            </h2>
            <div class="mt-6 grid gap-5 lg:grid-cols-2">
                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Back-end PHP</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">Le back-end a été développé en PHP sur le framework interne utilisé pour les applications de l'entreprise. La logique métier était séparée autant que possible des autres parties de l'application afin de faciliter les évolutions et la réutilisation de certains composants.</p>
                </div>
                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">TypeScript</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">TypeScript était utilisé pour les interactions côté navigateur. Le typage aidait à garder un code plus prévisible sur une interface comportant de nombreuses interactions.</p>
                </div>
                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Tailwind CSS</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">Tailwind CSS permettait de faire évoluer rapidement les différentes versions de l'interface tout en gardant une présentation cohérente.</p>
                </div>
                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">MySQL</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">MySQL servait à stocker les données récupérées depuis Microsoft Graph et à répondre rapidement aux consultations courantes.</p>
                </div>
            </div>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Suivre l'environnement existant
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Les salles étaient déjà administrées dans l'environnement Microsoft. J'ai donc préféré utiliser cette source existante plutôt que maintenir une seconde liste directement dans Room Calendars.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Lorsqu'une salle était ajoutée, modifiée ou supprimée côté Microsoft, l'application pouvait récupérer ces changements sans demander une seconde intervention.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Cette organisation réduisait la maintenance et évitait surtout que deux systèmes finissent par contenir des informations différentes.
            </p>
        </section>

        <section class="mt-14 border-y border-dark-green/15 py-6 dark:border-accent-green/20">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Résultat
            </h2>
            <div class="mt-6 grid max-w-4xl gap-3">
                <div class="rounded-md border-l-4 border-black/25 bg-white/70 px-5 py-4 dark:border-white/25 dark:bg-black/60">
                    <p class="text-xs font-semibold uppercase tracking-1 text-black/55 dark:text-white/55">Avant</p>
                    <p class="mt-1 text-lg !leading-normal text-black/80 dark:text-white/80">
                        Comparer plusieurs salles demandait de naviguer entre différents calendriers Outlook et de répéter les mêmes recherches. Retrouver une réunion pouvait aussi devenir compliqué lorsqu'un visiteur ne disposait que d'informations partielles.
                    </p>
                </div>
                <div class="rounded-md border-l-4 border-dark-green bg-dark-green/10 px-5 py-4 dark:border-accent-green dark:bg-accent-green/10">
                    <p class="text-xs font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">Après</p>
                    <p class="mt-1 text-lg !leading-normal text-black/80 dark:text-white/80">
                        Room Calendars centralise les disponibilités de plusieurs salles dans une seule interface et permet aux profils autorisés de retrouver une réunion à partir d'un participant ou d'informations disponibles.
                    </p>
                    <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                        La réservation reste gérée dans Outlook, tandis que Room Calendars simplifie la consultation en amont. Les retours utilisateurs ont confirmé que ce parcours était plus rapide et plus pratique au quotidien.
                    </p>
                </div>
            </div>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Ce que je ferais différemment aujourd'hui
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Le projet a été développé assez rapidement. Les premières priorités étaient de valider l'intégration avec Microsoft Graph, construire les fonctionnalités principales et faire évoluer l'interface à partir des retours utilisateurs.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Les tests fonctionnels et unitaires n'ont donc pas été intégrés dès les premières versions, et le projet n'a pas disposé d'une véritable base de tests automatisés.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Avec le recul, je mettrais aujourd'hui cette base en place beaucoup plus tôt. Les traitements métier et l'intégration avec Microsoft Graph seraient notamment couverts par des tests automatisés, exécutés par une CI à chaque Pull Request.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                J'ajouterais aussi davantage de suivi technique sur les temps de réponse de Microsoft Graph, les synchronisations et les performances de la base de données. Cela permettrait de repérer plus rapidement une dégradation avant qu'elle ait un impact visible sur les utilisateurs.
            </p>
        </section>

        <section class="mt-14 max-w-4xl pb-12">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Ce que ce projet m'a appris
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Room Calendars m'a permis de travailler sur l'ensemble d'un projet métier : compréhension du besoin, maquettage, échanges avec les utilisateurs, architecture, intégration d'une API externe, optimisation des performances et mise en production.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Le projet m'a aussi confirmé l'importance de traiter les principaux risques techniques assez tôt. Une bonne interface ne suffit pas si les données arrivent lentement ou de manière peu fiable.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Enfin, les différentes itérations du calendrier ont renforcé une idée que je garde aujourd'hui dans mes projets : lorsqu'un outil est utilisé régulièrement, les détails d'interface et les temps de réponse ont un impact direct sur le confort de travail.
            </p>
        </section>
    </article>
</div>
