<div class="mx-auto max-w-screen-2xl font-poppins">
    <article class="mx-auto w-4/5">
        <div class="pt-6">
            <a href="/en/my-work" class="inline-flex items-center gap-2 text-sm font-semibold text-dark-green transition hover:opacity-70 dark:text-accent-green">
                <span aria-hidden="true">&larr;</span>
                Back to selected work
            </a>
        </div>

        <header class="grid gap-8 pt-8 lg:grid-cols-[0.85fr_1.15fr] lg:items-end">
            <div>
                <p class="font-concert-one text-sm uppercase tracking-1 text-dark-green dark:text-accent-green">
                    Case study
                </p>
                <h1 class="mt-2 font-concert-one text-4xl tracking-1 text-dark-green dark:text-accent-green sm:text-6xl">
                    CorianderPHP
                </h1>
                <p class="mt-4 max-w-2xl text-base !leading-normal text-black/70 dark:text-white/70 sm:text-xl">
                    A personal R&D project for understanding how a PHP framework works internally, from routing to tests through CLI tooling and automation.
                </p>
            </div>

            <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/case-studies/corianderPHP/screenshot-corianderPHP.png', [
                'alt' => 'Screenshot of the CorianderPHP documentation website.',
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
                        Project resources
                    </p>
                    <p class="mt-1 max-w-2xl text-sm text-black/65 dark:text-white/65">
                        The framework and its documentation are maintained in two separate repositories. The documentation has its own build, tests, and automated update workflow.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="https://corianderphp.com" target="_blank" rel="noopener noreferrer" class="inline-flex rounded-md bg-dark-green px-4 py-2 text-sm font-semibold text-white transition hover:opacity-70 dark:bg-accent-green dark:text-black">
                        Read the documentation
                    </a>
                    <a href="https://github.com/CorianderPHP/CorianderPHP" target="_blank" rel="noopener noreferrer" class="inline-flex rounded-md border border-dark-green/40 px-4 py-2 text-sm font-semibold text-dark-green transition hover:opacity-70 dark:border-accent-green/40 dark:text-accent-green">
                        Framework repository
                    </a>
                    <a href="https://github.com/CorianderPHP/Documentation" target="_blank" rel="noopener noreferrer" class="inline-flex rounded-md border border-dark-green/40 px-4 py-2 text-sm font-semibold text-dark-green transition hover:opacity-70 dark:border-accent-green/40 dark:text-accent-green">
                        Documentation repository
                    </a>
                </div>
            </div>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Introduction
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                I started CorianderPHP because I wanted to better understand what was happening behind the framework APIs I was already using. Instead of only learning how to use Laravel or other tools, I wanted to implement some of their mechanisms and understand how they worked.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                The goal was not to recreate Laravel or Symfony. I wanted a framework small enough to understand from end to end, while keeping a clear structure for my projects.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                This approach also gives me a lightweight base for some personal projects, when the features of a more complete framework are not necessary.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Why I built it
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                CorianderPHP quickly became a research and learning project. Each new feature is an opportunity to look at how other frameworks solve the same problem, then understand the reasons behind their choices.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                The project led me to work on routing, the request/response cycle, middleware, dependency injection, tests, Composer, PSR standards, GitHub Actions, and CI/CD.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Implementing these mechanisms myself also helped me better understand the role of abstractions. They can simplify a project when they answer a real need, but they can also add unnecessary complexity when they are introduced too early.
            </p>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Static and dynamic views
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                One of the first subjects I wanted to simplify was view routing. For a simple page, CorianderPHP can determine the URL directly from its place in the folder tree. When a page needs parameters or prepared data, an explicit route and controller take over.
            </p>
            <p class="mt-3 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                Unlike some routing systems based entirely on files, dynamic parameters are not created with files like <code class="rounded bg-dark-green/10 px-1.5 py-0.5 text-sm text-dark-green dark:bg-accent-green/10 dark:text-accent-green">[id].php</code>. I prefer declaring these routes explicitly and using a controller so data preparation stays clear.
            </p>

            <div class="mt-6 grid gap-5 xl:grid-cols-2">
                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Static view</p>
                    <p class="mt-2 text-sm !leading-normal text-black/70 dark:text-white/70">The URL can come directly from the folders inside <code class="rounded bg-dark-green/10 px-1.5 py-0.5 text-sm text-dark-green dark:bg-accent-green/10 dark:text-accent-green">public/public_views</code>.</p>
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
                        <span class="font-semibold text-black/60 dark:text-white/60">Generated URL</span>
                        <code class="rounded bg-dark-green/10 px-1.5 py-0.5 text-dark-green dark:bg-accent-green/10 dark:text-accent-green">/about</code>
                    </div>
                    <a href="https://www.corianderphp.com/documentation/static-views" target="_blank" rel="noopener noreferrer" class="mt-4 inline-flex rounded-md border border-dark-green/40 px-3 py-2 text-sm font-semibold text-dark-green transition hover:opacity-70 dark:border-accent-green/40 dark:text-accent-green">
                        Static view documentation
                    </a>
                </div>

                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Dynamic view</p>
                    <p class="mt-2 text-sm !leading-normal text-black/70 dark:text-white/70">A route calls a controller, the controller prepares data, and a normal view renders the result.</p>
                    <div class="workflow" role="list">
                        <div class="workflow-step" role="listitem">
                            <div class="workflow-marker">1</div>
                            <div class="workflow-content">
                                <p class="workflow-title">Request</p>
                                <p class="workflow-description">The browser opens <code class="break-all rounded bg-dark-green/10 px-1.5 py-0.5 text-sm text-dark-green dark:bg-accent-green/10 dark:text-accent-green">/articles/42</code>.</p>
                            </div>
                        </div>
                        <div class="workflow-step" role="listitem">
                            <div class="workflow-marker">2</div>
                            <div class="workflow-content">
                                <p class="workflow-title">Route</p>
                                <p class="workflow-description"><code class="break-all rounded bg-dark-green/10 px-1.5 py-0.5 text-sm text-dark-green dark:bg-accent-green/10 dark:text-accent-green">public/routes.php</code> matches <code class="break-all rounded bg-dark-green/10 px-1.5 py-0.5 text-sm text-dark-green dark:bg-accent-green/10 dark:text-accent-green">/articles/{id}</code>.</p>
                                <p class="workflow-description">It calls <code class="whitespace-normal break-all rounded bg-dark-green/10 px-1.5 py-0.5 text-sm text-dark-green dark:bg-accent-green/10 dark:text-accent-green">ArticleController::show()</code>.</p>
                            </div>
                        </div>
                        <div class="workflow-step" role="listitem">
                            <div class="workflow-marker">3</div>
                            <div class="workflow-content">
                                <p class="workflow-title">Controller</p>
                                <p class="workflow-description">The controller reads the route id, loads the article, and prepares view data.</p>
                            </div>
                        </div>
                        <div class="workflow-step" role="listitem">
                            <div class="workflow-marker">4</div>
                            <div class="workflow-content">
                                <p class="workflow-title">View</p>
                                <p class="workflow-description"><code class="break-all rounded bg-dark-green/10 px-1.5 py-0.5 text-sm text-dark-green dark:bg-accent-green/10 dark:text-accent-green">public/public_views/articles/show/index.php</code> renders the prepared variables.</p>
                            </div>
                        </div>
                    </div>
                    <a href="https://www.corianderphp.com/documentation/dynamic-views" target="_blank" rel="noopener noreferrer" class="mt-4 inline-flex rounded-md border border-dark-green/40 px-3 py-2 text-sm font-semibold text-dark-green transition hover:opacity-70 dark:border-accent-green/40 dark:text-accent-green">
                        Dynamic view documentation
                    </a>
                </div>
            </div>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Architecture and framework internals
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Working on CorianderPHP changed the way I look at the frameworks I use. Many mechanisms feel automatic when you only work with their APIs. Implementing them helps me better understand each component's responsibilities and where some abstractions come from.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                I worked directly with the HTTP request and response lifecycle, middleware, controllers, views, dependency injection, modules, Composer, and PSR interfaces like PSR-7, PSR-15, and PSR-3.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                This experience helped me better understand how these different elements interact while a request is being processed.
            </p>
        </section>

        <section class="mt-14 max-w-5xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                CLI and developer experience
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                I also developed a CLI to group common operations around the framework. The goal is to make some repetitive tasks easier without hiding what happens behind the commands.
            </p>
            <p class="mt-3 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                It can generate files, run front-end builds, manage cache, configure the database, run migrations, check the installed version, and update the framework.
            </p>

            <div class="mt-6 grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-4 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="text-sm font-semibold text-dark-green dark:text-accent-green">Generation</p>
                    <p class="mt-1 text-sm !leading-normal text-black/65 dark:text-white/65">Views, controllers, routes, modules, API controllers, and migrations.</p>
                </div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-4 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="text-sm font-semibold text-dark-green dark:text-accent-green">Assets</p>
                    <p class="mt-1 text-sm !leading-normal text-black/65 dark:text-white/65">Run TypeScript and Tailwind tasks from the project root.</p>
                </div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-4 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="text-sm font-semibold text-dark-green dark:text-accent-green">Database</p>
                    <p class="mt-1 text-sm !leading-normal text-black/65 dark:text-white/65">Connection configuration, PDO usage, and migration management.</p>
                </div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-4 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="text-sm font-semibold text-dark-green dark:text-accent-green">Migrations</p>
                    <p class="mt-1 text-sm !leading-normal text-black/65 dark:text-white/65">Batch tracking, status checks, rollback, and detection of migrations modified after execution.</p>
                </div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-4 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="text-sm font-semibold text-dark-green dark:text-accent-green">Framework update</p>
                    <p class="mt-1 text-sm !leading-normal text-black/65 dark:text-white/65">Preview updates, protect local changes, create backups, and rollback if something fails.</p>
                </div>
            </div>

            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                The update system was especially interesting to design. It led me to work on versioning, release archives, local change detection, backups, and rollback mechanisms.
            </p>
            <p class="mt-3 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                The database part raised a similar question: how far should usage be simplified without completely hiding SQL or making the framework behavior hard to understand?
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Keeping it small
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                CorianderPHP deliberately stays limited in scope. I do not add a feature simply because it exists in other frameworks: it has to answer an identified need and have a clear place in the project.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                One of the useful exercises with this project is deciding what not to build.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                More complete frameworks are suited to many projects and teams. CorianderPHP simply gives me a smaller environment to experiment, understand architecture choices, and build my own projects.
            </p>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                CI with GitHub Actions
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                CorianderPHP also helped me go deeper with GitHub Actions. I wanted to automate quality checks and make sure each change goes through the same validation process.
            </p>
            <div class="workflow" role="list">
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">1</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Trigger</p>
                        <p class="workflow-description">Push or pull request targeting main.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">2</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Validate and install</p>
                        <p class="workflow-description">Composer files are checked, then dependencies are cached and installed.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">3</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Audit</p>
                        <p class="workflow-description">Dependencies are checked for known security issues.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">4</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Lint</p>
                        <p class="workflow-description">PHP files are checked for syntax errors.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">5</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Test</p>
                        <p class="workflow-description">The PHPUnit suite runs.</p>
                    </div>
                </div>
            </div>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                This workflow lets me work with CI in practice and secure the development cycle without relying only on checks run locally.
            </p>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Automated releases and documentation updates
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                I also wanted to experiment with automation between several repositories. Publishing a new framework version therefore triggers an update chain on the documentation side.
            </p>
            <div class="workflow" role="list">
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">1</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Framework release</p>
                        <p class="workflow-description">A new framework version is published.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">2</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Collect release information</p>
                        <p class="workflow-description">The workflow gathers tags, commits and changed files.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">3</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Dispatch to documentation repository</p>
                        <p class="workflow-description">Release context is sent to the documentation repository.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">4</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Update framework in documentation project</p>
                        <p class="workflow-description">The documentation project updates the framework.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">5</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Build assets and regenerate downloads</p>
                        <p class="workflow-description">Assets and guided project downloads are regenerated.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">6</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Run tests</p>
                        <p class="workflow-description">The documentation test suite runs.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">7</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Create Pull Request</p>
                        <p class="workflow-description">The update is prepared for review.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">8</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Manual review</p>
                        <p class="workflow-description">I review the Pull Request before merging.</p>
                    </div>
                </div>
            </div>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                The two repositories communicate through a repository_dispatch event containing information about the release and the changes since the previous version.
            </p>
            <p class="mt-3 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                I deliberately kept a human validation step. The automation handles repetitive operations and prepares the update, but the documentation is not changed automatically without review.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Documentation as part of the project
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                I consider documentation a full part of the project. It has its own validation cycle and does not depend only on a manual update after each framework change.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Its workflow installs PHP and Node.js dependencies, rebuilds front-end assets, regenerates downloadable projects, and runs the test suite.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                This organization also lets framework releases automatically prepare the next documentation updates.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                What I learned
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                The main value of CorianderPHP is what the project teaches me while I build it. I now understand much better how a request moves through a framework, how responsibilities can be separated, and why some abstractions exist.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                The project also taught me to pay more attention to complexity. An abstraction can make a codebase clearer when it solves a real problem. Introduced too early, it can instead make a small project harder to understand and evolve.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                CorianderPHP remains an experimental project and continues to serve as a research ground. I use it to test ideas around architecture, testing, tooling, and automation. The framework is useful for my own projects, but its main value remains everything its design lets me learn.
            </p>
        </section>

    </article>
</div>
