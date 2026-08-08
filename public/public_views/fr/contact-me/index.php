<div class="relative mx-auto max-w-screen-2xl font-poppins">
    <section class="mx-auto w-4/5 pt-8 md:pt-16">
        <h1 class="max-w-4xl font-concert-one text-4xl tracking-1 text-dark-green dark:text-accent-green sm:text-6xl">
            Me retrouver
        </h1>
        <p class="mt-6 max-w-3xl text-lg !leading-normal text-black/75 dark:text-white/75 sm:text-xl">
            Pour consulter mon parcours, suivre mes projets ou retrouver mon code, LinkedIn et GitHub restent les meilleurs points d'entrée.
        </p>
    </section>

    <section class="mx-auto mt-12 w-4/5 pb-20 md:mt-16">
        <div class="flex max-w-2xl flex-col gap-4">
            <a href="https://www.linkedin.com/in/lohan-dancuo/" title="Voir mon profil LinkedIn (nouvel onglet)" target="_blank" rel="noopener noreferrer" class="group relative overflow-hidden rounded-md border border-dark-green/25 bg-true-white/80 px-5 py-5 text-dark-green transition duration-300 hover:border-dark-green/45 hover:bg-dark-green/5 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-dark-green dark:border-accent-green/30 dark:bg-true-black/45 dark:text-accent-green dark:hover:border-accent-green/50 dark:hover:bg-accent-green/5 dark:focus-visible:outline-accent-green">
                <span class="absolute inset-y-0 right-0 w-24 translate-x-10 bg-dark-green/10 transition duration-300 group-hover:translate-x-0 dark:bg-accent-green/10" aria-hidden="true"></span>
                <span class="relative flex items-center gap-4">
                    <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/contact-me/linkedin.png', [
                        'alt' => 'Logo LinkedIn',
                        'class' => 'h-12 w-12 shrink-0 rounded-md object-cover transition duration-300 dark:invert sm:h-14 sm:w-14',
                        'loading' => 'lazy',
                        'decoding' => 'async',
                        'convert' => false,
                    ]) ?>
                    <span class="min-w-0">
                        <span class="block text-xl font-semibold">LinkedIn</span>
                        <span class="mt-1 block text-sm font-semibold opacity-75">Voir mon profil</span>
                    </span>
                    <span class="ml-auto text-2xl transition duration-300 group-hover:translate-x-1" aria-hidden="true">&rarr;</span>
                </span>
            </a>

            <a href="https://github.com/Dancuo-Lohan" title="Voir mon profil GitHub (nouvel onglet)" target="_blank" rel="noopener noreferrer" class="group relative overflow-hidden rounded-md border border-dark-green/25 bg-true-white/80 px-5 py-5 text-dark-green transition duration-300 hover:border-dark-green/45 hover:bg-dark-green/5 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-dark-green dark:border-accent-green/30 dark:bg-true-black/45 dark:text-accent-green dark:hover:border-accent-green/50 dark:hover:bg-accent-green/5 dark:focus-visible:outline-accent-green">
                <span class="absolute inset-y-0 right-0 w-24 translate-x-10 bg-dark-green/10 transition duration-300 group-hover:translate-x-0 dark:bg-accent-green/10" aria-hidden="true"></span>
                <span class="relative flex items-center gap-4">
                    <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/mainStack/github.png', [
                        'alt' => 'Logo GitHub',
                        'class' => 'h-12 w-12 shrink-0 rounded-md object-cover transition duration-300 dark:invert sm:h-14 sm:w-14',
                        'loading' => 'lazy',
                        'decoding' => 'async',
                        'convert' => false,
                    ]) ?>
                    <span class="min-w-0">
                        <span class="block text-xl font-semibold">GitHub</span>
                        <span class="mt-1 block text-sm font-semibold opacity-75">Voir mon code</span>
                    </span>
                    <span class="ml-auto text-2xl transition duration-300 group-hover:translate-x-1" aria-hidden="true">&rarr;</span>
                </span>
            </a>
        </div>
    </section>
</div>
