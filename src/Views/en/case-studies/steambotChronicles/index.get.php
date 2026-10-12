<?php
use CorianderCore\Core\Image\ImageHandler;
?>
<div class="mx-auto max-w-screen-2xl font-poppins">
    <article class="mx-auto w-4/5">
        <div class="pt-6">
            <a href="/en/my-work" class="inline-flex min-h-11 items-center gap-2 text-sm font-semibold text-dark-green transition hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:text-accent-green">
                <span aria-hidden="true">&larr;</span>
                Back to my work
            </a>
        </div>

        <header id="overview" data-language-scroll-anchor class="grid gap-8 pt-8 lg:grid-cols-[0.85fr_1.15fr] lg:items-end">
            <div class="min-w-0">
                <p class="font-concert-one text-sm uppercase tracking-1 text-dark-green dark:text-accent-green">
                    Case study
                    <span class="ml-2 font-poppins text-xs font-medium normal-case text-black/60 dark:text-white/60">&middot; 2026</span>
                </p>
                <h1 class="mt-2 font-concert-one text-4xl tracking-1 text-dark-green dark:text-accent-green sm:text-6xl">Steambot Chronicles Archive</h1>
                <p class="mt-4 max-w-2xl text-base !leading-normal text-black/70 dark:text-white/70 sm:text-xl">I built a website to bring the Steambot Chronicles archives together and offer another way to rediscover the game: leaf through its manual, browse its artwork and explore its models in 3D.</p>
            </div>
            <figure id="project-preview" class="min-w-0">
                <?= ImageHandler::render('/public/assets/img/case-studies/steambotChronicles/homepage.jpg', [
                    'alt' => 'Homepage of Steambot Chronicles Archive, introducing the game with an original illustration.',
                    'pictureClass' => 'block w-full',
                    'class' => 'h-auto w-full rounded-lg border border-dark-green/15 object-contain object-top dark:border-accent-green/20',
                    'loading' => 'eager',
                    'decoding' => 'async',
                    'draggable' => 'false',
                ]) ?>
            </figure>
        </header>

        <section id="project-links" data-language-scroll-anchor class="mt-10 border-y border-dark-green/15 py-5 dark:border-accent-green/20" aria-labelledby="resources-title">
            <div class="flex flex-col gap-4">
                <div>
                    <h2 id="resources-title" class="font-concert-one text-sm uppercase tracking-1 text-dark-green dark:text-accent-green">Project resources</h2>
                    <p class="mt-1 max-w-2xl text-sm text-black/65 dark:text-white/65">A personal project, from finding the archives to designing the website.</p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="https://steambot-chronicles.com/" target="_blank" rel="noopener noreferrer" class="inline-flex min-h-11 items-center justify-center rounded-md bg-dark-green px-4 py-2 text-sm font-semibold text-white transition hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:bg-accent-green dark:text-black">Visit the website<span class="sr-only"> (opens in a new tab)</span></a>
                    <a href="https://steambot-chronicles.com/trotmobile" target="_blank" rel="noopener noreferrer" class="inline-flex min-h-11 items-center justify-center rounded-md border border-dark-green/40 px-4 py-2 text-sm font-semibold text-dark-green transition hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:border-accent-green/40 dark:text-accent-green">Try the 3D builder<span class="sr-only"> (opens in a new tab)</span></a>
                </div>
            </div>
        </section>

        <section id="intro" data-language-scroll-anchor class="mt-14" aria-labelledby="intro-title">
            <div class="max-w-4xl">
                <h2 id="intro-title" class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">Introduction</h2>
                <div class="mt-6 space-y-5 text-base leading-relaxed sm:text-lg text-black/80 dark:text-white/80">
                    <p>Steambot Chronicles has been my favourite game since childhood. Its official website is gone, so I wanted to bring its artwork, music and documents together in one place.</p>
                    <p>The project began with a wallpaper. I wanted an original image from a game I had known for years, yet the first search results made it surprisingly hard to find one without a press website's watermark.</p>
                    <p>That search became the starting point for the website: bring the game's resources together and present them in a way that does its world justice.</p>
                    <p id="project-role">I led the project on my own, researching the material, selecting images, defining the art direction and designing the interfaces. For development, I used CorianderPHP, my PHP framework, with help from AI agents, particularly to understand the game files and reconstruct its 3D models.</p>
                    <p>PHP is straightforward to deploy with my hosting provider, and this public project lets me test my framework in practice. I use Tailwind CSS for the layout and TypeScript for the interactions.</p>
                </div>
            </div>
        </section>

        <section id="intent" data-language-scroll-anchor class="mt-14 max-w-4xl" aria-labelledby="intent-title">
            <p class="text-sm font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">Intent</p>
            <h2 id="intent-title" class="mt-2 font-concert-one text-3xl leading-tight text-dark-green dark:text-accent-green sm:text-4xl">Giving people a reason to return to the game</h2>
            <div class="mt-6 space-y-5 text-base leading-relaxed text-black/80 dark:text-white/80 sm:text-lg">
                <p>Steambot Chronicles combines exploration, music and vehicle customisation in a PlayStation 2 adventure. That freedom is part of what stayed with me. I wanted the website to make room for each of those experiences: finding an illustration, listening to a song or building a Trotmobile of your own.</p>
                <p>I designed the project primarily for fans who already know its world and want to find its resources. Artwork and music offer familiar places to start. For people discovering the game, an introduction to its world and the 3D tools provide a reason to become interested. The task was therefore to gather the material, then organise it so each visitor could begin with what appealed to them.</p>
            </div>
        </section>

        <section id="research" data-language-scroll-anchor class="mt-14" aria-labelledby="research-title">
            <div class="grid max-w-4xl gap-6">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">Research</p>
                    <h2 id="research-title" class="mt-2 font-concert-one text-3xl leading-tight text-dark-green dark:text-accent-green sm:text-4xl">Finding the images, one page at a time</h2>
                </div>
                <div class="space-y-5 text-base leading-relaxed text-black/80 sm:text-lg dark:text-white/80">
                    <p>To build the collection, I began by searching for the game's original images. Web searches produced little; the old official websites preserved in the Wayback Machine proved much richer. I explored their pages one at a time across the English, Japanese and Korean versions.</p>
                    <p>Collecting the images also meant looking at them closely. Knowing the game helped me recognise its visual style and artwork I had seen before. The publisher's official watermarks were another useful clue: I was looking for original material rather than copies stamped by the websites that had shared it.</p>
                    <p>The gallery now holds 155 items, including artwork, wallpapers, screenshots and videos. For me, the value of the collection lies in bringing images back into view that had become hard to find, and that even fans may have forgotten.</p>
                </div>
            </div>

            <figure id="gallery-preview" class="mt-8 min-w-0 w-full max-w-4xl lg:w-3/4">
                <?= ImageHandler::render('/public/assets/img/case-studies/steambotChronicles/gallery-page.jpg', [
                    'alt' => 'Steambot Chronicles Archive gallery, showing its categories and a grid of game illustrations.',
                    'pictureClass' => 'block w-full',
                    'class' => 'h-auto w-full rounded-lg border border-dark-green/15 object-contain dark:border-accent-green/20',
                    'loading' => 'lazy',
                    'decoding' => 'async',
                    'draggable' => 'false',
                ]) ?>
                <figcaption class="mt-3 max-w-4xl text-sm leading-relaxed text-black/65 dark:text-white/65">The gallery brings the recovered material together, with categories for characters, Trotmobiles, wallpapers and printable documents.</figcaption>
            </figure>
        </section>

        <section id="design" data-language-scroll-anchor class="mt-14" aria-labelledby="design-title">
            <div class="grid max-w-4xl gap-8">
                <div class="max-w-4xl">
                    <p class="text-sm font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">Art direction and architecture</p>
                    <h2 id="design-title" class="mt-2 font-concert-one text-3xl leading-tight text-dark-green dark:text-accent-green sm:text-4xl">Recognising the game at first glance</h2>
                    <div class="mt-5 space-y-5 text-base leading-relaxed text-black/80 sm:text-lg dark:text-white/80">
                        <p>Once gathered, the recovered images guided the art direction. I sampled their colours, then selected a palette for the website. On the homepage, those colours work with the illustrations on display, introducing visitors to a visual world that already belongs to the game.</p>
                        <p>The opening image mattered particularly. I wanted an illustration fans could immediately recognise as Steambot Chronicles, but might never have seen before. Together with the text, it needed to make a memorable first impression and encourage visitors to explore.</p>
                        <p>To turn that first impression into a visit, I organised the pages around several ways of approaching the game. The game page introduces its world; the gallery lets the images bring back memories; About explains why the website exists. Music and artwork appear after a short scroll on the homepage. The manual and credits sit in the Archive section for visitors who want to go further.</p>
                    </div>
                </div>
            </div>

            <figure id="game-preview" class="mt-8 min-w-0 w-full max-w-4xl lg:w-3/4">
                <?= ImageHandler::render('/public/assets/img/case-studies/steambotChronicles/game-page.jpg', [
                    'alt' => 'The game page on Steambot Chronicles Archive, introducing its world with a screenshot of Vanilla and Connie on the beach.',
                    'pictureClass' => 'block w-full',
                    'class' => 'h-auto w-full rounded-lg border border-dark-green/15 object-contain dark:border-accent-green/20',
                    'loading' => 'lazy',
                    'decoding' => 'async',
                    'draggable' => 'false',
                ]) ?>
                <figcaption class="mt-3 max-w-4xl text-sm leading-relaxed text-black/65 dark:text-white/65">The game page introduces the adventure. Text and screenshots give visitors a way into its world before they explore the archives.</figcaption>
            </figure>
        </section>

        <section id="3d" data-language-scroll-anchor class="mt-14" aria-labelledby="3d-title">
            <div class="max-w-4xl">
                <p class="text-sm font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">Interaction design</p>
                <h2 id="3d-title" class="mt-2 font-concert-one text-3xl leading-tight text-dark-green dark:text-accent-green sm:text-4xl">Building the Trotmobile you would want to drive</h2>
                <p class="mt-5 text-lg leading-relaxed text-black/80 dark:text-white/80">Among these ways into the game, the builder has a special place. My favourite part of Steambot Chronicles was building a Trotmobile of my own. The vehicle changed with my interests and activities: a large cargo bed to carry fossils, a pickaxe arm or a drill to extract them. Choosing parts was already a way of choosing how to play. I wanted to bring that pleasure into the browser.</p>
            </div>

            <figure id="builder-preview" class="mt-8 min-w-0 w-full max-w-4xl lg:w-3/4">
                <?= ImageHandler::render('/public/assets/img/case-studies/steambotChronicles/builder-editor.jpg', [
                    'alt' => 'Trotmobile builder showing the 3D model, categories and part thumbnails.',
                    'pictureClass' => 'block w-full',
                    'class' => 'h-auto w-full rounded-lg border border-dark-green/15 object-contain dark:border-accent-green/20',
                    'loading' => 'lazy',
                    'decoding' => 'async',
                    'draggable' => 'false',
                ]) ?>
                <figcaption class="mt-4 flex flex-col items-start gap-3">
                    <p class="max-w-2xl text-base leading-relaxed text-black/80 dark:text-white/80">Parts appear with their image and name beside the Trotmobile. Each choice is reflected directly in the 3D model.</p>
                    <a href="https://steambot-chronicles.com/trotmobile" target="_blank" rel="noopener noreferrer" class="inline-flex min-h-11 shrink-0 items-center justify-center rounded-md bg-dark-green px-4 py-2 text-center text-sm font-semibold text-white transition hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:bg-accent-green dark:text-black">Build your Trotmobile<span class="sr-only"> (opens in a new tab)</span></a>
                </figcaption>
            </figure>

            <h3 class="mt-10 max-w-4xl text-xl font-semibold text-black dark:text-white">Seeing the parts before choosing them</h3>

            <div class="mt-8 max-w-4xl space-y-5 text-base leading-relaxed text-black/80 dark:text-white/80 sm:text-lg">
                <p>The first version used drop-down lists to replace parts. I then tried a more direct approach: click an area of the vehicle and access its options on the model, as in a 3D editing environment. Those attempts helped me explore how much of the interface should live within the scene itself.</p>
                <p>I eventually chose thumbnails paired with part names. When choosing between arms or cargo beds, their shape matters. Seeing them side by side makes it possible to compare their appearance before equipping them. The label then adds the precision an image alone cannot provide.</p>
                <p>The builder lets visitors change every part, along with colours and emblems, using rendering close to the game's. I focused the work on customisation. Adding movement would have required a substantial effort for a limited contribution to the experience I wanted to offer: the pleasure of assembling a personal vehicle.</p>
            </div>

            <p class="mt-4 max-w-4xl border-l-2 border-dark-green/25 pl-5 text-sm leading-relaxed text-black/65 dark:border-accent-green/30 dark:text-white/65">This choice is consistent with observations from the <a href="https://baymard.com/research-articles/use-visual-filters-for-visually-distinct-product-attributes" target="_blank" rel="noopener noreferrer" class="font-semibold text-dark-green underline decoration-dark-green/35 underline-offset-4 transition hover:opacity-70 dark:text-accent-green dark:decoration-accent-green/35">Baymard Institute<span class="sr-only"> (opens in a new tab)</span></a>: when options differ mainly in appearance, combining an image with a label makes them easier to recognise than text alone.</p>

            <div id="extraction" class="mt-10 max-w-4xl">
                <h3 class="text-xl font-semibold text-black dark:text-white">From PS2 files to the browser</h3>
                <div class="mt-3 space-y-5 text-base leading-relaxed text-black/80 dark:text-white/80 sm:text-lg">
                    <p>Behind the interface, another task was necessary: understanding the files of a PS2 game to bring its vehicles into the browser. Models had to be reconstructed from the game's data and connected to their textures. The shaders also needed to be interpreted to achieve rendering close to the original.</p>
                    <p>AI agents analysed these files and helped me understand how the models and textures were represented. Their help made possible what would otherwise have been the most complex part of the project by far. It gave me more time for the content and the experience I wanted to create.</p>
                </div>
            </div>

        </section>

        <section id="community" data-language-scroll-anchor class="mt-14" aria-labelledby="community-title">
                <div class="max-w-4xl">
                    <p class="text-sm font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">Community feedback</p>
                    <h2 id="community-title" class="mt-2 font-concert-one text-3xl leading-tight text-dark-green dark:text-accent-green sm:text-4xl">How fans help the project grow</h2>
                    <p class="mt-4 text-base leading-relaxed text-black/80 dark:text-white/80 sm:text-lg">After I shared the website with the community, a fan sent me their own artwork collection. That exchange changed how I saw the project: research I had started for myself was useful to other people, and their archives could now enrich mine.</p>
                    <p class="mt-4 text-base leading-relaxed text-black/80 dark:text-white/80 sm:text-lg">The first conversations with fans revealed something I had not put at the centre of the project: they also wanted to see the characters and their different outfits. I added the idea to my list, then built a dedicated viewer. This addition came directly from the people the website was made for.</p>
                </div>
                <figure id="character-preview" class="mt-8 min-w-0 w-full max-w-4xl lg:w-3/4">
                    <?= ImageHandler::render('/public/assets/img/case-studies/steambotChronicles/character-viewer.jpg', [
                        'alt' => '3D viewer showing Vanilla and a grid of outfits to select.',
                        'pictureClass' => 'block w-full',
                        'class' => 'h-auto w-full rounded-lg border border-dark-green/15 object-contain dark:border-accent-green/20',
                        'loading' => 'lazy',
                        'decoding' => 'async',
                        'draggable' => 'false',
                    ]) ?>
                    <figcaption class="mt-3">
                        <a href="https://steambot-chronicles.com/characters" target="_blank" rel="noopener noreferrer" class="inline-flex min-h-11 items-center justify-center rounded-md border border-dark-green/40 px-4 py-2 text-sm font-semibold text-dark-green transition hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:border-accent-green/40 dark:text-accent-green">Explore the characters<span class="sr-only"> (opens in a new tab)</span></a>
                    </figcaption>
                </figure>
        </section>

        <section id="performance" data-language-scroll-anchor class="mt-14" aria-labelledby="performance-title">
            <div class="grid max-w-4xl gap-6">
                <div class="max-w-4xl">
                    <p class="text-sm font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">Performance</p>
                    <h2 id="performance-title" class="mt-2 font-concert-one text-3xl leading-tight text-dark-green dark:text-accent-green sm:text-4xl">Loading content as visitors explore</h2>
                </div>
                <div>
                    <div class="mt-5 space-y-5 text-base leading-relaxed text-black/80 sm:text-lg dark:text-white/80">
                        <p>These additions enrich the website, but also increase the amount of material it can load. To keep visits responsive, I limited downloads to what needs to appear. Page images are converted to WebP automatically to reduce their size, while the original resources remain available separately.</p>
                        <p>The website offers more than one hundred 3D models, loaded only when they need to appear. The manual reader loads the current spread, and the YouTube player waits until the video starts. Content therefore arrives as the visit progresses.</p>
                    </div>
                </div>
            </div>

        </section>

        <section id="visibility" data-language-scroll-anchor class="mt-14 grid max-w-4xl gap-6" aria-labelledby="visibility-title">
                <div class="max-w-4xl">
                    <p class="text-sm font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">Search visibility</p>
                    <h2 id="visibility-title" class="mt-2 font-concert-one text-3xl leading-tight text-dark-green dark:text-accent-green sm:text-4xl">Helping the next fan find the website</h2>
                </div>
                <div class="space-y-5 text-base leading-relaxed text-black/80 sm:text-lg dark:text-white/80">
                    <p>Search visibility currently requires the most attention. The project began with an unsuccessful search; it now needs to be discoverable by someone looking for an illustration or information about Steambot Chronicles.</p>
                    <p>I work on page content, headings, image alternative text and the sitemap. The game, gallery and About pages also give people reasons to visit beyond downloading a file. The domain is still new, so I want to give the website time to be discovered before judging its results.</p>
                </div>
        </section>

        <section id="learning" data-language-scroll-anchor class="mt-14 pb-16 sm:pb-20" aria-labelledby="learning-title">
            <div class="grid max-w-4xl gap-6">
                <div class="max-w-4xl">
                    <p class="text-sm font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">Outcome</p>
                    <h2 id="learning-title" class="mt-2 font-concert-one text-3xl leading-tight text-dark-green dark:text-accent-green sm:text-4xl">What I learned from the project</h2>
                </div>
                <div>
                    <div class="mt-5 space-y-5 text-base leading-relaxed text-black/80 sm:text-lg dark:text-white/80">
                        <p>The project taught me to work more effectively with AI agents. When designing a page, I often ask for an initial draft: having a proposal in front of me helps me get past a blank page and clarify my intention. I can then explain what works, what is missing and what I want to change. For image organisation and optimisation, I also delegate a first pass, then check and correct it. Their help gives me more time for creative decisions, provided I keep that review step.</p>
                        <p>Writing mainly in English with fans also means explaining my choices to people who know the game well. Their requests help me develop the website around specific uses.</p>
                        <p>I would like to continue with a game guide illustrated with my own screenshots. First, I need to complete a 100% playthrough. After gathering the archives and recreating part of the customisation, a guide would offer another way to share what I know about Steambot Chronicles.</p>
                    </div>
                    <a href="https://steambot-chronicles.com/" target="_blank" rel="noopener noreferrer" class="mt-7 inline-flex min-h-11 items-center justify-center rounded-md bg-dark-green px-4 py-2 text-sm font-semibold text-white transition hover:opacity-70 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 dark:bg-accent-green dark:text-black">View the project<span class="sr-only"> (opens in a new tab)</span></a>
                </div>
            </div>
        </section>
    </article>
</div>
