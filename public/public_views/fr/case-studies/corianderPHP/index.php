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
                    CorianderPHP
                </h1>
                <p class="mt-4 max-w-2xl text-base !leading-normal text-black/70 dark:text-white/70 sm:text-xl">
                    Un projet personnel de R&D pour comprendre le fonctionnement interne d'un framework PHP, du routing aux tests en passant par la CLI et l'automatisation.
                </p>
            </div>

            <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/case-studies/corianderPHP/screenshot-corianderPHP.png', [
                'alt' => 'Capture du site de documentation CorianderPHP.',
                'pictureClass' => 'block w-full',
                'class' => 'h-auto w-full rounded-lg border border-dark-green/15 object-cover object-top dark:border-accent-green/20',
                'loading' => 'lazy',
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
                        Le framework et sa documentation sont maintenus dans deux repositories séparés. La documentation dispose de son propre build, de ses tests et d'un workflow automatisé de mise à jour.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="https://corianderphp.com" target="_blank" rel="noopener noreferrer" class="inline-flex rounded-md bg-dark-green px-4 py-2 text-sm font-semibold text-white transition hover:opacity-70 dark:bg-accent-green dark:text-black">
                        Voir la documentation
                    </a>
                    <a href="https://github.com/CorianderPHP/CorianderPHP" target="_blank" rel="noopener noreferrer" class="inline-flex rounded-md border border-dark-green/40 px-4 py-2 text-sm font-semibold text-dark-green transition hover:opacity-70 dark:border-accent-green/40 dark:text-accent-green">
                        Code source du framework
                    </a>
                    <a href="https://github.com/CorianderPHP/Documentation" target="_blank" rel="noopener noreferrer" class="inline-flex rounded-md border border-dark-green/40 px-4 py-2 text-sm font-semibold text-dark-green transition hover:opacity-70 dark:border-accent-green/40 dark:text-accent-green">
                        Code source de la documentation
                    </a>
                </div>
            </div>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Introduction
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                J'ai commencé CorianderPHP car je voulais mieux comprendre ce qui se passait derrière les API des frameworks que j'utilisais déjà. Plutôt que d'apprendre uniquement à utiliser Laravel ou d'autres outils, je voulais implémenter certains de leurs mécanismes et comprendre leur fonctionnement.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                L'objectif n'était pas de recréer Laravel ou Symfony. Je voulais disposer d'un framework suffisamment petit pour pouvoir le comprendre de bout en bout, tout en conservant une structure claire pour mes projets.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Cette approche me permet aussi d'avoir une base légère pour certains projets personnels, lorsque les fonctionnalités d'un framework plus complet ne sont pas nécessaires.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Pourquoi je l'ai créé
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                CorianderPHP est rapidement devenu un projet de recherche et d'apprentissage. Chaque nouvelle fonctionnalité est l'occasion de regarder comment d'autres frameworks répondent au même problème, puis de comprendre les raisons derrière leurs choix.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Le projet m'a amené à travailler sur le routing, le cycle requête/réponse, les middlewares, l'injection de dépendances, les tests, Composer, les standards PSR, GitHub Actions ou encore la CI/CD.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Implémenter moi-même ces mécanismes m'a également permis de mieux comprendre le rôle des abstractions. Elles peuvent simplifier un projet lorsqu'elles répondent à un besoin réel, mais aussi ajouter une complexité inutile lorsqu'elles sont introduites trop tôt.
            </p>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Vues statiques et dynamiques
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                L'un des premiers sujets que je voulais simplifier concernait le routing des vues. Pour une page simple, CorianderPHP peut déterminer directement l'URL à partir de son emplacement dans l'arborescence. Lorsqu'une page a besoin de paramètres ou de données préparées, une route explicite et un controller prennent le relais.
            </p>
            <p class="mt-3 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                Contrairement à certains systèmes de routing basés entièrement sur les fichiers, les paramètres dynamiques ne reposent pas sur des fichiers comme <code class="rounded bg-dark-green/10 px-1.5 py-0.5 text-sm text-dark-green dark:bg-accent-green/10 dark:text-accent-green">[id].php</code>. Je préfère déclarer explicitement ces routes et utiliser un controller pour garder la préparation des données claire.
            </p>

            <div class="mt-6 grid gap-5 xl:grid-cols-2">
                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Vue statique</p>
                    <p class="mt-2 text-sm !leading-normal text-black/70 dark:text-white/70">L'URL peut être déterminée directement à partir des dossiers présents dans <code class="rounded bg-dark-green/10 px-1.5 py-0.5 text-sm text-dark-green dark:bg-accent-green/10 dark:text-accent-green">public/public_views</code>.</p>
                    <div class="mt-4 rounded-md border border-dark-green/15 bg-dark-green/5 p-4 font-mono text-sm text-black dark:border-accent-green/20 dark:bg-accent-green/5 dark:text-white">
                        <div class="flex min-w-0 items-center gap-2">
                            <span class="h-2 w-2 shrink-0 rounded-full bg-dark-green dark:bg-accent-green" aria-hidden="true"></span>
                            <span class="break-all font-semibold">public</span>
                        </div>
                        <div class="mt-2 ml-1 border-l border-dark-green/20 pl-4 dark:border-accent-green/25">
                            <div class="flex min-w-0 items-center gap-2">
                                <span class="h-2 w-2 shrink-0 rounded-full border border-dark-green/40 dark:border-accent-green/40" aria-hidden="true"></span>
                                <span class="break-all">public_views</span>
                            </div>
                            <div class="mt-2 ml-1 border-l border-dark-green/20 pl-4 dark:border-accent-green/25">
                                <div class="flex min-w-0 items-center gap-2">
                                    <span class="h-2 w-2 shrink-0 rounded-full border border-dark-green/40 dark:border-accent-green/40" aria-hidden="true"></span>
                                    <span class="break-all">about</span>
                                </div>
                                <div class="mt-2 ml-1 space-y-2 border-l border-dark-green/20 pl-4 dark:border-accent-green/25">
                                    <div class="flex min-w-0 items-center gap-2">
                                        <span class="h-px w-3 shrink-0 bg-dark-green/30 dark:bg-accent-green/30" aria-hidden="true"></span>
                                        <span class="break-all">index.php</span>
                                    </div>
                                    <div class="flex min-w-0 items-center gap-2">
                                        <span class="h-px w-3 shrink-0 bg-dark-green/30 dark:bg-accent-green/30" aria-hidden="true"></span>
                                        <span class="break-all">metadata.php</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 flex flex-wrap items-center gap-2 text-sm text-black/70 dark:text-white/70">
                        <span class="font-semibold text-black/60 dark:text-white/60">URL</span>
                        <code class="rounded bg-dark-green/10 px-1.5 py-0.5 text-dark-green dark:bg-accent-green/10 dark:text-accent-green">/about</code>
                    </div>
                    <a href="https://www.corianderphp.com/documentation/static-views" target="_blank" rel="noopener noreferrer" class="mt-4 inline-flex rounded-md border border-dark-green/40 px-3 py-2 text-sm font-semibold text-dark-green transition hover:opacity-70 dark:border-accent-green/40 dark:text-accent-green">
                        Documentation des vues statiques
                    </a>
                </div>

                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Vue dynamique</p>
                    <p class="mt-2 text-sm !leading-normal text-black/70 dark:text-white/70">Une route reçoit la requête, appelle un controller, puis le controller prépare les données nécessaires à la vue.</p>
                    <div class="workflow" role="list">
                        <div class="workflow-step" role="listitem">
                            <div class="workflow-marker">1</div>
                            <div class="workflow-content">
                                <p class="workflow-title">Requête</p>
                                <p class="workflow-description">Le navigateur ouvre <code class="break-all rounded bg-dark-green/10 px-1.5 py-0.5 text-sm text-dark-green dark:bg-accent-green/10 dark:text-accent-green">/articles/42</code>.</p>
                            </div>
                        </div>
                        <div class="workflow-step" role="listitem">
                            <div class="workflow-marker">2</div>
                            <div class="workflow-content">
                                <p class="workflow-title">Route</p>
                                <p class="workflow-description"><code class="break-all rounded bg-dark-green/10 px-1.5 py-0.5 text-sm text-dark-green dark:bg-accent-green/10 dark:text-accent-green">public/routes.php</code> reconnaît <code class="break-all rounded bg-dark-green/10 px-1.5 py-0.5 text-sm text-dark-green dark:bg-accent-green/10 dark:text-accent-green">/articles/{id}</code>.</p>
                                <p class="workflow-description">Il appelle <code class="whitespace-normal break-all rounded bg-dark-green/10 px-1.5 py-0.5 text-sm text-dark-green dark:bg-accent-green/10 dark:text-accent-green">ArticleController::show()</code>.</p>
                            </div>
                        </div>
                        <div class="workflow-step" role="listitem">
                            <div class="workflow-marker">3</div>
                            <div class="workflow-content">
                                <p class="workflow-title">Controller</p>
                                <p class="workflow-description">Le controller récupère l'identifiant, charge les données nécessaires et les transmet à la vue.</p>
                            </div>
                        </div>
                        <div class="workflow-step" role="listitem">
                            <div class="workflow-marker">4</div>
                            <div class="workflow-content">
                                <p class="workflow-title">Vue</p>
                                <p class="workflow-description"><code class="break-all rounded bg-dark-green/10 px-1.5 py-0.5 text-sm text-dark-green dark:bg-accent-green/10 dark:text-accent-green">public/public_views/articles/show/index.php</code> affiche les variables préparées.</p>
                            </div>
                        </div>
                    </div>
                    <a href="https://www.corianderphp.com/documentation/dynamic-views" target="_blank" rel="noopener noreferrer" class="mt-4 inline-flex rounded-md border border-dark-green/40 px-3 py-2 text-sm font-semibold text-dark-green transition hover:opacity-70 dark:border-accent-green/40 dark:text-accent-green">
                        Documentation des vues dynamiques
                    </a>
                </div>
            </div>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Architecture et fonctionnement interne
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Travailler sur CorianderPHP a changé ma manière de regarder les frameworks que j'utilise. Beaucoup de mécanismes paraissent automatiques lorsqu'on travaille uniquement avec leurs API. Les implémenter permet de mieux comprendre les responsabilités de chaque composant et l'origine de certaines abstractions.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                J'ai notamment travaillé directement sur le cycle HTTP requête/réponse, les middlewares, les controllers, les vues, l'injection de dépendances, les modules, Composer ainsi que des interfaces comme PSR-7, PSR-15 et PSR-3.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Cette expérience m'a permis de mieux comprendre comment ces différents éléments interagissent pendant le traitement d'une requête.
            </p>
        </section>

        <section class="mt-14 max-w-5xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                CLI et expérience développeur
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                J'ai également développé une CLI pour regrouper les opérations courantes autour du framework. L'objectif est de faciliter certaines tâches répétitives sans masquer ce qui se passe derrière les commandes.
            </p>
            <p class="mt-3 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                Elle permet notamment de générer des fichiers, lancer les builds front-end, gérer le cache, configurer la base de données, exécuter les migrations, vérifier la version installée ou mettre à jour le framework.
            </p>

            <div class="mt-6 grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-4 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="text-sm font-semibold text-dark-green dark:text-accent-green">Génération</p>
                    <p class="mt-1 text-sm !leading-normal text-black/65 dark:text-white/65">Création de vues, controllers, routes, modules, API controllers et migrations.</p>
                </div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-4 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="text-sm font-semibold text-dark-green dark:text-accent-green">Assets</p>
                    <p class="mt-1 text-sm !leading-normal text-black/65 dark:text-white/65">Exécution des tâches TypeScript et Tailwind depuis la racine du projet.</p>
                </div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-4 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="text-sm font-semibold text-dark-green dark:text-accent-green">Base de données</p>
                    <p class="mt-1 text-sm !leading-normal text-black/65 dark:text-white/65">Configuration de la connexion, utilisation de PDO et gestion des migrations.</p>
                </div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-4 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="text-sm font-semibold text-dark-green dark:text-accent-green">Migrations</p>
                    <p class="mt-1 text-sm !leading-normal text-black/65 dark:text-white/65">Suivi des batchs, consultation du statut, rollback et détection des migrations modifiées après leur exécution.</p>
                </div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-4 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="text-sm font-semibold text-dark-green dark:text-accent-green">Mise à jour du framework</p>
                    <p class="mt-1 text-sm !leading-normal text-black/65 dark:text-white/65">Prévisualisation des changements, protection des modifications locales, création de sauvegardes et restauration en cas d'erreur.</p>
                </div>
            </div>

            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                Le système de mise à jour a été particulièrement intéressant à concevoir. Il m'a amené à travailler sur le versioning, les archives de release, la détection des modifications locales, les sauvegardes et les mécanismes de rollback.
            </p>
            <p class="mt-3 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                La partie base de données m'a posé une question similaire : jusqu'où simplifier l'utilisation sans masquer complètement le SQL ni rendre le comportement du framework difficile à comprendre.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Garder le framework léger
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                CorianderPHP reste volontairement limité dans son périmètre. Je n'ajoute pas une fonctionnalité simplement parce qu'elle existe dans d'autres frameworks : elle doit répondre à un besoin identifié et avoir une place claire dans le projet.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Une partie intéressante du travail consiste donc aussi à décider ce qui ne doit pas être ajouté.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Les frameworks plus complets sont adaptés à de nombreux projets et équipes. CorianderPHP me donne simplement un environnement plus réduit pour expérimenter, comprendre les choix d'architecture et construire mes propres projets.
            </p>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                CI avec GitHub Actions
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                CorianderPHP m'a aussi servi à approfondir GitHub Actions. Je voulais automatiser les vérifications de qualité et m'assurer que chaque changement passe par le même processus de validation.
            </p>
            <div class="workflow" role="list">
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">1</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Déclenchement</p>
                        <p class="workflow-description">Push ou Pull Request vers main.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">2</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Validation</p>
                        <p class="workflow-description">Vérification des fichiers Composer, mise en cache et installation des dépendances.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">3</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Audit</p>
                        <p class="workflow-description">Recherche de vulnérabilités connues dans les dépendances.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">4</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Vérification syntaxique</p>
                        <p class="workflow-description">Contrôle de la syntaxe des fichiers PHP.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">5</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Tests</p>
                        <p class="workflow-description">Exécution de la suite PHPUnit.</p>
                    </div>
                </div>
            </div>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                Ce workflow me permet de travailler concrètement avec la CI et de sécuriser le cycle de développement sans dépendre uniquement des vérifications effectuées en local.
            </p>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Automatisation des releases et de la documentation
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                Je voulais également expérimenter l'automatisation entre plusieurs repositories. La publication d'une nouvelle version du framework déclenche donc une chaîne de mise à jour côté documentation.
            </p>
            <div class="workflow" role="list">
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">1</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Release</p>
                        <p class="workflow-description">Une nouvelle version du framework est publiée.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">2</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Analyse</p>
                        <p class="workflow-description">Le workflow récupère la version actuelle, la précédente, le commit associé et les fichiers modifiés.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">3</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Transmission</p>
                        <p class="workflow-description">Le contexte de la release est envoyé au repository de documentation.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">4</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Mise à jour</p>
                        <p class="workflow-description">La documentation récupère la nouvelle version du framework.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">5</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Build</p>
                        <p class="workflow-description">Les assets et les projets téléchargeables sont régénérés.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">6</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Tests</p>
                        <p class="workflow-description">La suite de tests de la documentation est exécutée.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">7</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Pull Request</p>
                        <p class="workflow-description">Une Pull Request contenant la mise à jour et les informations de release est créée automatiquement.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">8</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Relecture</p>
                        <p class="workflow-description">La Pull Request reste soumise à une validation manuelle avant son intégration.</p>
                    </div>
                </div>
            </div>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                Les deux repositories communiquent à l'aide d'un événement repository_dispatch, accompagné des informations nécessaires pour identifier les changements apportés par la nouvelle version.
            </p>
            <p class="mt-3 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                J'ai volontairement conservé une étape de validation humaine. L'automatisation prend en charge les opérations répétitives et prépare la mise à jour, mais la documentation n'est pas modifiée automatiquement sans relecture.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                La documentation comme partie du projet
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Je considère la documentation comme une composante du projet à part entière. Elle possède son propre cycle de validation et ne dépend pas uniquement d'une mise à jour manuelle après chaque changement du framework.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Son workflow installe les dépendances PHP et Node.js, reconstruit les assets front-end, régénère les projets proposés au téléchargement et exécute la suite de tests.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Cette organisation permet également aux releases du framework de préparer automatiquement les prochaines évolutions de la documentation.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Ce que j'ai appris
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                La principale valeur de CorianderPHP reste ce que le projet m'apprend en le développant. Je comprends aujourd'hui beaucoup mieux la manière dont une requête traverse un framework, comment les responsabilités peuvent être séparées et pourquoi certaines abstractions existent.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Le projet m'a aussi appris à être plus attentif à la complexité. Une abstraction peut rendre une base de code plus claire lorsqu'elle résout un problème réel. Introduite trop tôt, elle peut au contraire rendre un petit projet plus difficile à comprendre et à faire évoluer.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                CorianderPHP reste un projet expérimental et continue de me servir de terrain de recherche. J'y teste des idées autour de l'architecture, des tests, de l'outillage et de l'automatisation. Le framework m'est utile pour mes propres projets, mais sa principale valeur reste tout ce que sa conception me permet d'apprendre.
            </p>
        </section>

    </article>
</div>
