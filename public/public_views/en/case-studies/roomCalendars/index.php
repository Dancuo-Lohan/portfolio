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
                    Room Calendars
                </h1>
                <p class="mt-4 max-w-2xl text-base !leading-normal text-black/70 dark:text-white/70 sm:text-xl">
                    An internal application designed to check room availability quickly and find a meeting without browsing Outlook calendars one by one.
                </p>
            </div>

            <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/case-studies/roomCalendars/mockup.jpg', [
                'alt' => 'Mockup of the Room Calendars application.',
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
                Room Calendars started after the company stopped using a SaaS tool for meeting room management. Part of the follow-up moved directly back into Outlook.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                The information was available, but checking it quickly became tedious as soon as several rooms had to be compared over several days. Even a simple check required moving between calendars and repeating the same steps.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Reception also needed to find a room quickly when a visitor knew a participant's name, but not where the meeting was taking place.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                The project therefore had two main needs: make room availability easier to check and make it possible to find a meeting from the information already available.
            </p>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Understanding the Need
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                Before starting development, I took time to observe how Outlook was being used and how rooms were managed in the Microsoft environment.
            </p>
            <p class="mt-3 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                This first analysis confirmed several points:
            </p>
            <div class="workflow" role="list">
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">1</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Comparing several rooms required too many steps.</p>
                        <p class="workflow-description">Users had to move from one calendar to another to get an overview. Loading times were not suited to a quick check, and the more rooms and days were involved, the more painful the navigation became.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">2</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Search did not match reception's need.</p>
                        <p class="workflow-description">Finding a meeting from a participant or partial information was still not practical.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">3</div>
                    <div class="workflow-content">
                        <p class="workflow-title">The data already existed in Microsoft.</p>
                        <p class="workflow-description">Rooms and their calendars could be retrieved through Microsoft Graph API. There was no need to recreate a second source of data.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Project Goals
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                Development was organized around four priorities:
            </p>
            <div class="workflow" role="list">
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">1</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Check availability quickly</p>
                        <p class="workflow-description">Display several rooms and several days in the same interface.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">2</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Find a meeting</p>
                        <p class="workflow-description">Allow specific profiles to search for a meeting from a participant or other available information.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">3</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Keep the interface readable</p>
                        <p class="workflow-description">Show enough information without turning the calendar into a table that is hard to scan.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">4</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Limit waiting time</p>
                        <p class="workflow-description">Avoid making each consultation depend directly on Microsoft Graph response times.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Designing With Users
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                I worked in small iterations with the project manager and future users. The calendar went through several versions before reaching a satisfying organization.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                The main difficulty was not displaying meetings, but making the whole view readable in a few seconds. Several rooms, several days, and different meeting details had to fit in the same interface without feeling overloaded.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                The main screens were first prepared in Figma. The mockups made it possible to test the organization of information before development and made discussions more concrete.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                User feedback then guided several adjustments to spacing, grouping, and visual hierarchy. On a tool used regularly, a few lost seconds or information that is hard to spot can quickly affect daily use.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Organizing Development
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                The project was split into tasks tracked with GitHub Issues. The most important subjects were then separated into smaller subtasks, each developed on its own branch before being integrated through a Pull Request.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                This helped me keep a clear view of progress while working separately on the different topics: Microsoft Graph integration, search, cache, user rights, and front-end interactions.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                I also chose to handle early the part I considered the riskiest: retrieving and organizing data from Microsoft Graph.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                If that part could not provide reliable data or acceptable response times, a large part of the solution would have needed to be reconsidered. Validating it first avoided building the rest of the project on an uncertain base.
            </p>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Working With Microsoft Graph
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                Microsoft Graph API made it possible to retrieve rooms and their meetings, but calling the API directly on every display would have made the application too dependent on an external service.
            </p>
            <p class="mt-3 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                I therefore added several mechanisms to keep the interface fast:
            </p>
            <div class="mt-6 grid gap-5 lg:grid-cols-2">
                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">JSON batch requests</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">Several requests can be grouped into one call to reduce the number of requests sent to Microsoft Graph.</p>
                </div>
                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">MySQL storage</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">The data needed for display is stored locally so the API is not called on every consultation.</p>
                </div>
                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Cache for the most used periods</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">Meetings for the current month and the next month are kept locally to cover most common use cases.</p>
                </div>
                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Automatic refresh</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">A cronjob refreshes data every ten minutes so it is ready before a user opens the calendar.</p>
                </div>
            </div>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                This approach keeps the interface responsive while limiting calls to Microsoft Graph.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Planning for Failures
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                The cronjob improves performance, but I did not want the whole application to depend on it always running correctly.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                The data therefore also has a validity period. If the cronjob stops running and the cache expires, the application can trigger a new synchronization itself.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                In that situation, the first user can wait up to around forty seconds while the data is retrieved. The following consultations then return to normal behavior until the next expiration.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                This mechanism lets the application keep working without manual intervention when there is a temporary issue with the scheduled task.
            </p>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Security and Access Rights
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Authentication uses Microsoft SSO. Users sign in with their existing professional account, without adding a second password system to maintain.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Rights vary depending on the need. Room availability remains accessible to the relevant users, while some features, such as advanced meeting search, are limited to authorized profiles.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Exchanges with Microsoft Graph and the browser are encrypted. Automated tasks are also protected so they cannot be triggered freely.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Calendars can contain information about participants, schedules, or the organization of some meetings. Access management was therefore part of the project from the beginning.
            </p>
        </section>

        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Technical Choices
            </h2>
            <div class="mt-6 grid gap-5 lg:grid-cols-2">
                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">PHP back-end</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">The back-end was developed in PHP on the internal framework used for the company's applications. Business logic was separated as much as possible from the rest of the application to make future changes and component reuse easier.</p>
                </div>
                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">TypeScript</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">TypeScript was used for browser-side interactions. Typing helped keep the code more predictable on an interface with many interactions.</p>
                </div>
                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">Tailwind CSS</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">Tailwind CSS made it possible to iterate quickly on the different interface versions while keeping the visual presentation consistent.</p>
                </div>
                <div class="rounded-lg border border-dark-green/15 bg-white/80 p-5 dark:border-accent-green/20 dark:bg-black/80">
                    <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">MySQL</p>
                    <p class="mt-3 text-sm !leading-normal text-black/70 dark:text-white/70">MySQL stored data retrieved from Microsoft Graph and made common consultations faster.</p>
                </div>
            </div>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Following the Existing Environment
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Rooms were already managed in the Microsoft environment. I preferred using that existing source instead of maintaining a second list directly in Room Calendars.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                When a room was added, updated, or removed on the Microsoft side, the application could retrieve those changes without requiring a second action.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                This reduced maintenance and, more importantly, avoided having two systems slowly drift apart.
            </p>
        </section>

        <section class="mt-14 border-y border-dark-green/15 py-6 dark:border-accent-green/20">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Result
            </h2>
            <div class="mt-6 grid max-w-4xl gap-3">
                <div class="rounded-md border-l-4 border-black/25 bg-white/70 px-5 py-4 dark:border-white/25 dark:bg-black/60">
                    <p class="text-xs font-semibold uppercase tracking-1 text-black/55 dark:text-white/55">Before</p>
                    <p class="mt-1 text-lg !leading-normal text-black/80 dark:text-white/80">
                        Comparing several rooms meant moving between Outlook calendars and repeating the same searches. Finding a meeting could also become difficult when a visitor only had partial information.
                    </p>
                </div>
                <div class="rounded-md border-l-4 border-dark-green bg-dark-green/10 px-5 py-4 dark:border-accent-green dark:bg-accent-green/10">
                    <p class="text-xs font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">After</p>
                    <p class="mt-1 text-lg !leading-normal text-black/80 dark:text-white/80">
                        Room Calendars centralizes availability for several rooms in a single interface and lets authorized profiles find a meeting from a participant or available information.
                    </p>
                    <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                        Booking remains managed in Outlook, while Room Calendars simplifies the consultation step before that. User feedback confirmed that this flow was faster and more practical in daily use.
                    </p>
                </div>
            </div>
        </section>

        <section class="mt-14 max-w-4xl">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                What I Would Do Differently Today
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                The project was developed fairly quickly. The first priorities were to validate the Microsoft Graph integration, build the main features, and evolve the interface from user feedback.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Functional and unit tests were therefore not integrated from the first versions, and the project did not have a real automated testing base.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                With hindsight, I would put that base in place much earlier today. Business logic and the Microsoft Graph integration would be covered by automated tests, executed by CI on every Pull Request.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                I would also add more technical monitoring around Microsoft Graph response times, synchronizations, and database performance. That would help detect degradation earlier, before it has a visible impact on users.
            </p>
        </section>

        <section class="mt-14 max-w-4xl pb-12">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                What This Project Taught Me
            </h2>
            <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                Room Calendars let me work across a full business application project: understanding the need, mockups, user discussions, architecture, external API integration, performance optimization, and production deployment.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                The project also confirmed the importance of handling the main technical risks early. A good interface is not enough if the data arrives slowly or unreliably.
            </p>
            <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                Finally, the different calendar iterations reinforced an idea I still keep in mind today: when a tool is used regularly, interface details and response times have a direct impact on everyday work comfort.
            </p>
        </section>
    </article>
</div>
