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
                    Sans Suite
                </h1>
                <p class="mt-4 max-w-2xl text-base !leading-normal text-black/70 dark:text-white/70 sm:text-xl">
                    A local application built to track my job applications, organize the next steps, and find their history without relying on a spreadsheet that had become difficult to read.
                </p>
                <a href="https://github.com/Dancuo-Lohan/SansSuite" target="_blank" rel="noopener noreferrer" class="mt-6 inline-flex rounded-md bg-dark-green px-4 py-2 text-sm font-semibold text-white transition hover:bg-dark-green/85 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-dark-green dark:bg-accent-green dark:text-black dark:hover:bg-accent-green/80 dark:focus-visible:outline-accent-green">
                    View source code
                </a>
            </div>

            <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/case-studies/sansSuite/screenshot-sansSuite.png', [
                'alt' => 'Overview of the Sans Suite application.',
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
                I started Sans Suite from a simple personal need. I was tracking my job applications in an Excel file that gradually accumulated more rows and columns.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                The spreadsheet was enough to record a company, a position, and a date. It became much less practical when I wanted to keep a job description, several exchanges, personal notes, or the next actions I needed to take.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                I wanted a tool designed around this workflow, with a clear timeline but without making data entry heavier. The French name “Sans Suite” refers to applications that sometimes receive no follow-up.
            </p>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                From a spreadsheet to structured tracking
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                A job application has its own history. It can start with a job listing or a direct application, then continue with a follow-up, a call, an interview, an offer, or a rejection several weeks later.
            </p>
            <p class="mt-3 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                In Excel, this information ended up in one long cell or spread across several columns. Sans Suite organizes it around the application, its current status, and the events that move it forward.
            </p>

            <div class="workflow" role="list">
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">1</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Record the essentials</p>
                        <p class="workflow-description">The company, position, date, and application type are enough to start. The job description, cover letter, and notes can be added later.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">2</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Keep the timeline</p>
                        <p class="workflow-description">Replies, calls, follow-ups, interviews, and notes stay together on the application page.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">3</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Plan the next step</p>
                        <p class="workflow-description">An action can be scheduled, found in the calendar, and then marked as completed.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Improving the tool through use
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                The first versions helped me see which information was genuinely useful as soon as the application opened. The overview now focuses on active applications, those awaiting a reply, rejections, and upcoming tasks.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                I initially separated the history and future actions into two calendars. In practice, this made tracking less natural. I brought them together in one view: upcoming actions remain prominent, while past events preserve the context.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                This change sums up how I worked on Sans Suite: start from a simple need, use the application for real, and revise the workflow when the original organization does not work as well as expected.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Finding information quickly
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                The application list only shows what is needed to identify an application quickly: company, position, status, location, and date. Search also covers notes and job descriptions, while filters can narrow the results when needed.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                The calendar brings past events and scheduled tasks together. On mobile, it becomes a chronological list that is easier to scan. Data can also be exported as CSV so it remains accessible outside the application.
            </p>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Choices shaped by the context
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                A job search can already be stressful. I did not want daily goals, guilt-driven statistics, or artificial motivational messages. The interface remains restrained, and additional information only appears when it becomes useful.
            </p>

            <div class="mt-6 grid gap-5 md:grid-cols-2">
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Progressive entry</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">An application can be created quickly, then completed if later exchanges or an interview make more information useful.</p>
                </div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Local data</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">Applications and documents remain on the machine. No remote account or additional service is required to use the application.</p>
                </div>
            </div>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Technical implementation
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                Sans Suite uses CorianderPHP, my PHP framework. This project let me use it for a complete application beyond its documentation and check whether its design choices still worked for a concrete need.
            </p>

            <div class="mt-6 grid gap-5 md:grid-cols-2">
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Architecture</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">Controllers adapt HTTP requests, services handle business actions, repositories group SQLite access, and views remain focused on presentation.</p>
                </div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Interface</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">TypeScript handles browser interactions, while Tailwind CSS makes the interface easier to evolve without losing visual consistency.</p>
                </div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Data security</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">Mutations are protected against CSRF requests, output is escaped, and attachments are stored outside the public directory.</p>
                </div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Tests</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">The automated suite covers the main business behavior: search, statuses, notes, events, archiving, scheduled tasks, and CSV export.</p>
                </div>
            </div>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Preparing a public version
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Before publishing the repository, I simplified its installation and removed what only belonged to the development history. Since no version had been distributed yet, the intermediate migrations were combined into one initial migration that creates the complete schema directly.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                The SQLite database, its temporary files, attachments, and environment variables are excluded from Git. The code can therefore be reviewed or installed without exposing the personal data used by my own instance.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                The main challenge
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                The main challenge was to let the application grow without losing the simplicity that led me to build it. It would have been easy to add more fields, statistics, and views, but every extra option makes data entry longer and the tool harder to maintain.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                I kept a progressive approach instead: record the essential information quickly, then reveal additional features when they become relevant.
            </p>
        </section>

        <section class="mt-14 max-w-4xl pb-12">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                What I learned
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Sans Suite taught me how to turn an everyday need into an application model. Moving from an Excel file to structured data required me to separate an application, its current state, the events in its history, and the actions that still need to happen.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                The project also gave me a concrete way to test CorianderPHP, organize a complete architecture, and cover business rules with automated tests. Most importantly, it reminded me that a useful tool is not defined by the number of features it offers, but by how easily it lets someone find information and resume their work.
            </p>
        </section>
    </article>
</div>
