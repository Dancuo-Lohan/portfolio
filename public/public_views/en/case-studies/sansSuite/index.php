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
                    <span class="ml-2 font-poppins text-xs font-medium normal-case text-black/60 dark:text-white/60">&middot; 2026</span>
                </p>
                <h1 class="mt-2 font-concert-one text-4xl tracking-1 text-dark-green dark:text-accent-green sm:text-6xl">
                    Sans Suite
                </h1>
                <p class="mt-4 max-w-2xl text-base !leading-normal text-black/70 dark:text-white/70 sm:text-xl">
                    A local application built to track my job applications, organize the next steps, and find their history without relying on a spreadsheet that had become difficult to read.
                </p>
            </div>

            <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/case-studies/sansSuite/screenshot-sansSuite.jpg', [
                'alt' => 'Overview of the Sans Suite application.',
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
                        Project resources
                    </p>
                    <p class="mt-1 max-w-2xl text-sm text-black/65 dark:text-white/65">
                        The application's source code and the instructions needed to install it are available on GitHub.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="https://github.com/Dancuo-Lohan/SansSuite" target="_blank" rel="noopener noreferrer" class="inline-flex rounded-md border border-dark-green/40 px-4 py-2 text-sm font-semibold text-dark-green transition hover:opacity-70 dark:border-accent-green/40 dark:text-accent-green">
                        Sans Suite source code
                    </a>
                </div>
            </div>
        </section>

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
                In Excel, this information ended up in one long cell or spread across several columns. Sans Suite gives each application its own page, bringing its status, history, and next actions together.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Keeping application entry quick
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                My first goal was to make adding an application quick. During a job search, keeping a tracker up to date can quickly feel like another chore. If every entry had required a long form, I would probably have started putting it off.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                I therefore made only four fields mandatory: the company name, its address or city, the position, and the application date. The date defaults to today, removing one more step in most cases.
            </p>
            <div class="mt-6 grid gap-3 sm:grid-cols-2">
                <div class="rounded-md border border-dark-green/15 bg-white/80 px-4 py-3 text-sm font-semibold text-black/75 dark:border-accent-green/20 dark:bg-black/80 dark:text-white/75">Company name</div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 px-4 py-3 text-sm font-semibold text-black/75 dark:border-accent-green/20 dark:bg-black/80 dark:text-white/75">Address or city</div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 px-4 py-3 text-sm font-semibold text-black/75 dark:border-accent-green/20 dark:bg-black/80 dark:text-white/75">Position</div>
                <div class="rounded-md border border-dark-green/15 bg-white/80 px-4 py-3 text-sm font-semibold text-black/75 dark:border-accent-green/20 dark:bg-black/80 dark:text-white/75">Prefilled date</div>
            </div>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Everything else is optional: the job board and listing URL, the full job description, the cover letter I sent, personal notes, and attachments. These details can be entered straight away or added later. This keeps the initial entry short while still giving me somewhere to keep the information I may need afterwards.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Organizing the follow-up
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Once an application has been created, its page brings replies, calls, follow-ups, interviews, and notes together. An action can also be scheduled, found in the calendar, and marked as completed.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                The application list only shows the information needed to identify each entry: company, position, status, location, and date. Search also covers notes and job descriptions, while filters narrow the results as the list grows.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                On mobile, the calendar becomes a chronological list that is easier to scan. Applications can also be exported as CSV so the data remains accessible outside the application.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Improving the interface
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                The first versions of the overview displayed more information. After using the application, I narrowed it down to active applications, those awaiting a reply, rejections, and upcoming tasks. These are the figures I need to understand the current state of my search quickly.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                I had also separated past events and future actions into two calendars. This meant switching between them to follow an application. I combined them into one view: upcoming tasks appear first, while completed actions remain available in the history.
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
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">No artificial targets</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">The application sets no daily targets and does not turn a job search into a performance dashboard. Secondary actions remain discreet until they are needed.</p>
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
            <a href="/en/case-studies/corianderPHP" class="mt-5 inline-flex items-center gap-2 rounded-md border border-dark-green/25 px-4 py-2 text-sm font-semibold text-dark-green transition hover:border-dark-green/50 hover:bg-dark-green/5 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-dark-green dark:border-accent-green/30 dark:text-accent-green dark:hover:border-accent-green/60 dark:hover:bg-accent-green/10 dark:focus-visible:outline-accent-green">
                Read the CorianderPHP framework case study
                <span aria-hidden="true">&rarr;</span>
            </a>

            <div class="mt-6 grid gap-5 md:grid-cols-2">
                <div class="rounded-md border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Architecture</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">Controllers handle HTTP requests, services contain the business logic, repositories manage SQLite access, and views handle presentation.</p>
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
                The main challenge
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                The main challenge was to let the application grow without losing the simplicity that led me to build it. It would have been easy to add more fields, statistics, and views, but every extra option makes data entry longer and the tool harder to maintain.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Every addition therefore had to address a need I had encountered while using the application, without making data entry unnecessarily longer or complicating the existing workflows.
            </p>
        </section>

        <section class="mt-14 max-w-4xl pb-12">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                What I learned
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Sans Suite taught me how to start from a concrete problem and build an application around the way I actually work. Moving from an Excel file to structured data required me to separate an application, its current state, the events in its history, and the actions that still need to happen.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                The project also gave me a concrete way to test CorianderPHP, organize a complete architecture, and cover business rules with automated tests. Most importantly, it confirmed that a tracking tool only remains useful when it is quick enough to keep up to date and clear enough to recover the context of an application several weeks later.
            </p>
        </section>
    </article>
</div>
