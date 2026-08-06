<div class="relative mx-auto max-w-screen-2xl">
    <h1 class="mt-6 md:mt-16 font-concert-one text-2xl sm:text-4xl hsm:text-5xl md:text-6xl text-dark-green dark:text-accent-green tracking-1 mx-auto w-4/5">
        From Concept to Code
    </h1>
    <p class="mt-8 text-lg sm:text-2xl hsm:text-2xl md:text-3xl !leading-normal m-auto w-4/5">
        Discover how I solve problems through case studies and explore my approach to coding through interactive components.
    </p>

    <div class="mt-12 sm:mt-16 w-4/5 sm:w-2/3 lg:w-1/2 border-2 sm:border-4 border-dark-green dark:border-accent-green flex flex-col rounded-xl mx-auto px-4 sm:px-8 py-2 pb-4 sm:py-4">
        <p class="mt-2 text-xl sm:text-3xl hsm:text-4xl md:text-5xl font-concert-one text-dark-green dark:text-accent-green tracking-1">
            Hey!
        </p>
        <p class="mt-2 sm:mt-8 text-base sm:text-xl hsm:text-xl md:text-2xl">
            I'm currently building a framework named <b>CorianderPHP</b>!
        </p>
        <p class="mt-8 sm:mt-0 text-center sm:text-left text-base sm:text-xl hsm:text-xl md:text-2xl">
            Want to see it?
        </p>
        <a href="https://github.com/CorianderPHP/CorianderPHP" title="Go to the git of CorianderPHP (open a new tab)" target="_blank" class="flex mt-4 mx-auto gap-3 underline underline-offset-2 border-2 border-dark-green text-dark-green dark:border-accent-green dark:text-accent-green lg:mr-auto pr-7 pl-2 py-1 rounded-md hover:opacity-60 hover:cursor-pointer transition-opacity">
                <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/mainStack/github.png', [
                    'alt' => 'Logo of GitHub',
                    'class' => 'block w-10 md:w-12 h-auto mx-auto rounded-lg object-cover dark:invert',
                    'loading' => 'lazy',
                    'decoding' => 'async',
                    'convert' => false,
                ]) ?>
                <p class="my-auto sm:tracking-1 text-base sm:text-lg">View CorianderPHP</p>
            </a>
    </div>

    <div class="flex w-full mt-12 sm:mt-32 flex-col sm:flex-row">
        <div class="w-11/12 mx-auto sm:w-1/2 border-b sm:border-b-0 sm:border-r-2 border-dark-green dark:border-accent-green border-opacity-40 px-6 pt-4 pb-12 sm:py-1">
            <h2 class="text-center text-dark-green dark:text-accent-green text-xl sm:text-3xl hsm:text-3xl md:text-5xl font-bold">Case studies</h2>
            <article id="vertical-parallax" class="font-poppins w-full md:w-2/3 md:mx-auto mt-4 md:mt-8 rounded-md border border-dark-green dark:border-accent-green px-2 md:px-4 lg:px-8 py-2">
                <header>
                    <h2 class="text-lg md:text-2xl font-concert-one text-dark-green dark:text-accent-green text-center tracking-1 md:tracking-2">[Project] Room Calendars</h2>
                </header>
                <figure class="w-full h-auto mt-2">
                    <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/case-studies/thumbnails-roomCalendars.jpg', [
                        'alt' => 'Thumbnail of the RoomCalendars project, representing a mockup of the application.',
                        'pictureClass' => 'w-full h-auto',
                        'class' => 'h-auto w-full object-cover object-right rounded-t-lg',
                        'loading' => 'lazy',
                        'decoding' => 'async',
                        'draggable' => 'false',
                    ]) ?>
                    <figcaption class="text-dark-green dark:text-accent-green tracking-2 text-xs md:text-sm my-1">A mockup of the RoomCalendars application.</figcaption>
                </figure>
                <p class="text-sm md:text-lg mt-4">
                    Discover how RoomCalendars transformed room booking visibility with an intuitive UX, saving 7,700+ hours annually.
                </p>
                <footer class="w-full flex justify-center mt-4 border-dark-green dark:border-accent-green mb-2">
                    <a href="/case-studies/roomCalendars" tag="view-more" class="flex underline underline-offset-2 border-2 border-dark-green text-dark-green dark:border-accent-green dark:text-accent-green px-4 py-1 rounded-md hover:opacity-60 hover:cursor-pointer transition-opacity">View Project</a>
                </footer>
            </article>
        </div>

        <div class="w-11/12 mx-auto sm:w-1/2 border-t sm:border-t-0 sm:border-l-2 border-dark-green dark:border-accent-green border-opacity-40 px-6 pb-4 pt-12 sm:py-1">
            <h2 class="text-center text-dark-green dark:text-accent-green text-xl sm:text-3xl hsm:text-3xl md:text-5xl font-bold">Components</h2>
            
            <article id="vertical-parallax" class="font-poppins w-full md:w-2/3 md:mx-auto mt-4 md:mt-8 rounded-md border border-dark-green dark:border-accent-green px-2 md:px-4 lg:px-8 py-2">
                <header>
                    <h2 class="text-lg md:text-2xl font-concert-one text-dark-green dark:text-accent-green text-center tracking-1 md:tracking-2">[Typescript] Vertical Parallax</h2>
                </header>
                <figure class="w-full h-auto mt-2">
                    <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/components/vertical-parallax.png', [
                        'alt' => 'Thumbnail of the vertical parallax component, representing a city in pixel art.',
                        'pictureClass' => 'w-full h-auto',
                        'class' => 'h-auto w-full rendering-pixelated object-cover object-right rounded-t-lg',
                        'quality' => 100,
                        'loading' => 'lazy',
                        'decoding' => 'async',
                        'draggable' => 'false',
                    ]) ?>
                    <figcaption class="text-dark-green dark:text-accent-green tracking-2 text-xs md:text-sm my-1">A city in pixel art.</figcaption>
                </figure>
                <p class="text-sm md:text-lg mt-4">
                    A lightweight, responsive parallax effect built with TypeScript.
                </p>
                <footer class="w-full flex justify-center mt-4 border-dark-green dark:border-accent-green mb-2">
                    <a href="/components/vertical-parallax" tag="view-more" class="flex underline underline-offset-2 border-2 border-dark-green text-dark-green dark:border-accent-green dark:text-accent-green px-4 py-1 rounded-md hover:opacity-60 hover:cursor-pointer transition-opacity">View Component</a>
                </footer>
            </article>
        </div>
    </div>
</div>
