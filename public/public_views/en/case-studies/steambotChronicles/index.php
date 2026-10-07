<?php
use CorianderCore\Core\Image\ImageHandler;
?>
<div class="mx-auto max-w-6xl px-5 font-poppins sm:px-8 lg:px-10">
    <article>
        <a href="/en/my-work" class="mt-6 inline-flex min-h-11 items-center gap-2 text-sm font-semibold text-dark-green transition hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:text-accent-green">
            <span aria-hidden="true">&larr;</span> Back to my work
        </a>

        <header class="pb-8 pt-6 sm:pb-10">
            <p class="text-sm font-medium text-dark-green dark:text-accent-green">Case study <span class="ml-2 text-black/55 dark:text-white/55">&middot; 2026</span></p>
            <h1 class="mt-3 font-concert-one text-4xl leading-tight text-black dark:text-white sm:text-5xl">Steambot Chronicles Archive</h1>
            <p class="mt-5 max-w-3xl text-lg leading-relaxed text-black/75 dark:text-white/75">What remains of a game when its official website disappears? I brought Steambot Chronicles material together in an archive, with a 3D builder to explore its vehicles.</p>
        </header>

        <section class="border-y border-dark-green/15 py-5 dark:border-accent-green/20" aria-labelledby="resources-title">
            <h2 id="resources-title" class="text-sm font-semibold text-dark-green dark:text-accent-green">Project resources</h2>
            <div class="mt-3 flex flex-wrap gap-3">
                <a href="https://steambot-chronicles.com/" target="_blank" rel="noopener noreferrer" class="inline-flex min-h-11 items-center rounded-md bg-dark-green px-4 py-2 text-sm font-semibold text-white transition hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:bg-accent-green dark:text-black">Visit the website<span class="sr-only"> (opens in a new tab)</span></a>
                <a href="https://steambot-chronicles.com/trotmobile" target="_blank" rel="noopener noreferrer" class="inline-flex min-h-11 items-center rounded-md border border-dark-green/40 px-4 py-2 text-sm font-semibold text-dark-green transition hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:border-accent-green/40 dark:text-accent-green">Try the 3D builder<span class="sr-only"> (opens in a new tab)</span></a>
            </div>
        </section>

        <section id="intro" data-language-scroll-anchor class="grid items-center gap-8 py-12 sm:py-16 lg:grid-cols-[minmax(0,0.85fr)_minmax(0,1.15fr)] lg:gap-12" aria-labelledby="intro-title">
            <div>
                <h2 id="intro-title" class="font-concert-one text-3xl text-dark-green dark:text-accent-green sm:text-4xl">Why I made this archive</h2>
                <div class="mt-5 space-y-4 text-base leading-relaxed text-black/80 dark:text-white/80">
                    <p>Steambot Chronicles has been my favourite game since childhood. Its official website is no longer online, but archived copies still preserve some of its content.</p>
                    <p>I wanted to bring that material together on a site dedicated to the game: artwork, screenshots, scans, music and credits. Fans can return to these resources, while people discovering the game have somewhere to start.</p>
                    <p>I develop and maintain the site using CorianderPHP and AI agents. I define the features and interface choices, guide the changes and check the result on desktop and mobile.</p>
                </div>
            </div>
            <figure id="project-preview" data-language-scroll-anchor class="order-first min-w-0 lg:order-none">
                <?= ImageHandler::render('/public/assets/img/case-studies/steambotChronicles/screenshot-streambotChronicles.jpg', [
                    'alt' => 'Homepage of Steambot Chronicles Archive.',
                    'pictureClass' => 'block w-full',
                    'class' => 'h-auto w-full rounded-lg object-contain',
                    'loading' => 'eager',
                    'decoding' => 'async',
                    'draggable' => 'false',
                ]) ?>
                <figcaption class="mt-3 text-sm leading-relaxed text-black/55 dark:text-white/55">The homepage introduces the game and the material available in the archive.</figcaption>
            </figure>
        </section>

        <section id="3d" data-language-scroll-anchor class="border-t border-dark-green/15 py-12 dark:border-accent-green/20 sm:py-16" aria-labelledby="3d-title">
            <div class="max-w-3xl">
                <h2 id="3d-title" class="font-concert-one text-3xl text-dark-green dark:text-accent-green sm:text-4xl">Building a Trotmobile in the browser</h2>
                <p class="mt-5 text-lg leading-relaxed text-black/80 dark:text-white/80">Trotmobiles are the game's customisable vehicles. I wanted to offer another way to explore them: choose parts, try colours and see the result in a 3D scene.</p>
            </div>
            <div class="mt-8 grid items-start gap-8 lg:grid-cols-[minmax(0,1.35fr)_minmax(0,0.65fr)] lg:gap-10">
                <figure class="min-w-0">
                    <?= ImageHandler::render('/public/assets/img/case-studies/steambotChronicles/builder-steambotChronicles.png', [
                        'alt' => 'Trotmobile builder showing the 3D model, categories and part thumbnails.',
                        'pictureClass' => 'block w-full',
                        'class' => 'h-auto w-full rounded-lg border border-dark-green/15 object-contain dark:border-accent-green/20',
                        'loading' => 'lazy',
                        'decoding' => 'async',
                        'draggable' => 'false',
                    ]) ?>
                    <figcaption class="mt-3 text-sm leading-relaxed text-black/55 dark:text-white/55">Each selection updates a 3D preview of the vehicle.</figcaption>
                </figure>
                <div class="space-y-6">
                    <div>
                        <h3 class="text-base font-semibold">Choose parts</h3>
                        <p class="mt-2 text-sm leading-relaxed text-black/75 dark:text-white/75">Categories and thumbnails let visitors browse the parts and change the vehicle's equipment.</p>
                    </div>
                    <div>
                        <h3 class="text-base font-semibold">Try colours</h3>
                        <p class="mt-2 text-sm leading-relaxed text-black/75 dark:text-white/75">The game's paint colours and lighting settings let visitors change the Trotmobile's appearance.</p>
                    </div>
                    <div>
                        <h3 class="text-base font-semibold">Compare its size</h3>
                        <p class="mt-2 text-sm leading-relaxed text-black/75 dark:text-white/75">A character can appear beside the vehicle to give a sense of scale.</p>
                    </div>
                </div>
            </div>

            <div class="mt-10 grid gap-8 border-t border-dark-green/15 pt-8 dark:border-accent-green/20 md:grid-cols-2 md:gap-12">
                <div>
                    <h3 class="text-lg font-semibold">Extracting the game's models</h3>
                    <div class="mt-3 space-y-3 text-base leading-relaxed text-black/80 dark:text-white/80">
                        <p>The models come from the original PS2 game files. They could not be displayed directly on the Web: the geometry and textures had to be extracted, and the attachment points for the parts reconstructed.</p>
                        <p>AI agents carried out most of this analysis under my direction and helped build the Python extraction tools. The resulting data is prepared as JSON and PNG for a WebGL 2 renderer. I defined the builder experience and guided the iterations to check the assembly and rendering.</p>
                    </div>
                </div>
                <div id="loading" data-language-scroll-anchor>
                    <h3 class="text-lg font-semibold">Making part changes feel stable</h3>
                    <div class="mt-3 space-y-3 text-base leading-relaxed text-black/80 dark:text-white/80">
                        <p>Only selected parts are downloaded, then kept in memory for reuse. The comparison character loads only when that option is enabled.</p>
                        <p>Changing equipment sometimes caused flickering while textures loaded. The previous preview now stays visible until the new resources are ready.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="content" data-language-scroll-anchor class="border-t border-dark-green/15 py-12 dark:border-accent-green/20 sm:py-16" aria-labelledby="content-title">
            <div class="grid gap-6 lg:grid-cols-[minmax(0,0.65fr)_minmax(0,1.35fr)] lg:gap-10">
                <h2 id="content-title" class="font-concert-one text-3xl text-dark-green dark:text-accent-green sm:text-4xl">More content, lighter pages</h2>
                <div class="space-y-4 text-base leading-relaxed text-black/80 dark:text-white/80">
                    <p>Keeping high-quality images does not mean loading them in every preview. I prepared thumbnails sized for their display, used WebP and deferred images outside the screen. Original files remain available separately.</p>
                    <p>The manual reader loads only the cover or the current two-page spread. I also reduced the heading font, simplified the Tailwind styles and split the builder's lighting data so it loads as needed.</p>
                </div>
            </div>

            <div id="performance" data-language-scroll-anchor class="mt-8 border-y border-dark-green/15 dark:border-accent-green/20">
                <div class="grid gap-3 py-5 sm:grid-cols-[minmax(0,1fr)_minmax(0,1fr)] sm:items-center sm:gap-8">
                    <div>
                        <h3 class="text-base font-semibold">Previews of the eight album scans</h3>
                        <p class="mt-1 text-sm leading-relaxed text-black/60 dark:text-white/60">97.9% less data for the previews.</p>
                    </div>
                    <div class="grid grid-cols-[1fr_1.25rem_1fr] items-center gap-2">
                        <dl><dt class="text-xs text-black/55 dark:text-white/55">Before optimisation</dt><dd class="mt-1 text-xl font-semibold tabular-nums">4.7 MB</dd></dl>
                        <span class="text-center text-black/40 dark:text-white/40" aria-hidden="true">&rarr;</span>
                        <dl><dt class="text-xs text-dark-green dark:text-accent-green">After optimisation</dt><dd class="mt-1 text-xl font-semibold tabular-nums text-dark-green dark:text-accent-green">≈ 100 KB</dd></dl>
                    </div>
                </div>
                <div class="grid gap-3 border-t border-dark-green/10 py-5 dark:border-accent-green/15 sm:grid-cols-[minmax(0,1fr)_minmax(0,1fr)] sm:items-center sm:gap-8">
                    <div><h3 class="text-base font-semibold">Stylesheet</h3><p class="mt-1 text-sm leading-relaxed text-black/60 dark:text-white/60">After simplifying the Tailwind utilities.</p></div>
                    <div class="grid grid-cols-[1fr_1.25rem_1fr] items-center gap-2">
                        <dl><dt class="text-xs text-black/55 dark:text-white/55">Before optimisation</dt><dd class="mt-1 text-xl font-semibold tabular-nums">≈ 61 KB</dd></dl>
                        <span class="text-center text-black/40 dark:text-white/40" aria-hidden="true">&rarr;</span>
                        <dl><dt class="text-xs text-dark-green dark:text-accent-green">After optimisation</dt><dd class="mt-1 text-xl font-semibold tabular-nums text-dark-green dark:text-accent-green">≈ 42 KB</dd></dl>
                    </div>
                </div>
                <div class="grid gap-3 border-t border-dark-green/10 py-5 dark:border-accent-green/15 sm:grid-cols-[minmax(0,1fr)_minmax(0,1fr)] sm:items-center sm:gap-8">
                    <div><h3 class="text-base font-semibold">Trotmobile lighting at startup</h3><p class="mt-1 text-sm leading-relaxed text-black/60 dark:text-white/60">91.3% less data, with on-demand loading and gzip compression.</p></div>
                    <div class="grid grid-cols-[1fr_1.25rem_1fr] items-center gap-2">
                        <dl><dt class="text-xs text-black/55 dark:text-white/55">Before optimisation</dt><dd class="mt-1 text-xl font-semibold tabular-nums">≈ 1.2 MB</dd></dl>
                        <span class="text-center text-black/40 dark:text-white/40" aria-hidden="true">&rarr;</span>
                        <dl><dt class="text-xs text-dark-green dark:text-accent-green">After optimisation</dt><dd class="mt-1 text-xl font-semibold tabular-nums text-dark-green dark:text-accent-green">≈ 105 KB</dd></dl>
                    </div>
                </div>
            </div>
        </section>

        <section id="seo" data-language-scroll-anchor class="grid gap-6 border-t border-dark-green/15 py-12 dark:border-accent-green/20 sm:py-16 lg:grid-cols-[minmax(0,0.65fr)_minmax(0,1.35fr)] lg:gap-10" aria-labelledby="seo-title">
            <h2 id="seo-title" class="font-concert-one text-3xl text-dark-green dark:text-accent-green sm:text-4xl">Helping visitors find the archive</h2>
            <div class="space-y-4 text-base leading-relaxed text-black/80 dark:text-white/80">
                <p>I worked on SEO within the pages themselves: a title and description for each view, consistent canonical URLs and image alt text. Structured data and Open Graph and Twitter previews complete this information.</p>
                <p>The XML sitemap and robots.txt file help search engines navigate the pages and collections. I removed the manual reader's internal positions from the sitemap, since they do not need to be indexed as separate pages.</p>
            </div>
        </section>

        <section id="learning" data-language-scroll-anchor class="border-t-2 border-dark-green/30 pb-16 pt-10 dark:border-accent-green/35 sm:pb-20" aria-labelledby="learning-title">
            <div class="max-w-3xl">
                <h2 id="learning-title" class="font-concert-one text-3xl text-dark-green dark:text-accent-green sm:text-4xl">What this project taught me</h2>
                <div class="mt-5 space-y-4 text-lg leading-relaxed text-black/80 dark:text-white/80">
                    <p>This archive brought content presentation, file size and loading behaviour together. A thumbnail, a two-page manual spread and a 3D scene each need different choices to remain easy to browse.</p>
                    <p>The builder also gave me experience directing AI agents through the analysis of PS2 files. I had to define the intended result, examine their output and repeat the process when the assembly or rendering did not match the game.</p>
                </div>
            </div>
        </section>
    </article>
</div>
