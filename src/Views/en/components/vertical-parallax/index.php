<?php
$classExample = <<<'TS'
export class VerticalParallax {
    private container: HTMLDivElement; // Reference to the container element
    private elements: NodeListOf<HTMLElement>; // Collection of elements to apply parallax effect
    private isDisabled: boolean; // Boolean to check if the effect should be disabled

    /**
     * Constructor for creating a VerticalParallax instance.
     * @param container - The ID of the container HTMLDivElement.
     * @param selector - The selector used to find elements within the container for applying the parallax effect.
     * Initializes the parallax elements and attaches the necessary event listeners.
     */
    constructor(container: string, selector: string) {
        this.container = document.getElementById(container) as HTMLDivElement; // Initializes the main container div
        this.elements = document.querySelectorAll(selector); // Initializes the elements based on the selector
        this.isDisabled = this.checkIfDisabled(); // Determine if the effect should be disabled

        if (!this.isDisabled) {
            this.attachEvents(); // Set up event listeners for the scroll event if the effect is enabled
        }
    }

    /**
     * Checks if the effect should be disabled.
     * @returns boolean - True if the device is mobile or has a small viewport.
     */
    private checkIfDisabled(): boolean {
        const userAgent = navigator.userAgent || navigator.vendor || (window as Window & { opera?: string }).opera || "";
        const isMobile = /android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(userAgent);
        const isSmallScreen = window.matchMedia("(max-width: 768px)").matches;

        return isMobile || isSmallScreen;
    }

    /**
     * Attaches scroll event listeners to the window.
     * Listens for scroll events to apply the parallax effect.
     */
    private attachEvents(): void {
        window.addEventListener("scroll", () => {
            this.handleScroll();
        });
    }

    /**
     * Handles the scroll event to apply parallax effects to the elements.
     * Calculates and applies the vertical parallax effect based on the scroll position.
     */
    private handleScroll(): void {
        const containerRect = this.container.getBoundingClientRect(); // Get the container's position relative to the viewport

        // Check if the top of the container is within view
        if (containerRect.top <= 0 && containerRect.bottom >= 0) {
            this.elements.forEach((element) => {
                const speed = parseFloat(
                    element.getAttribute("data-parallax-speed") || "0.2"
                ); // Read and parse the parallax speed attribute

                const containerOffset = -containerRect.top;
                const parallaxOffset = containerOffset * speed;

                element.style.transform = `translateY(${parallaxOffset}px)`; // Apply the parallax transformation
            });
        } else if (containerRect.top > 0) {
            this.elements.forEach((element) => {
                element.style.transform = `translateY(0px)`; // Reset transformation when the container is above the viewport
            });
        }
    }

    /**
     * Refreshes the parallax effects manually, for use when significant page layout changes occur (like theme changes).
     */
    public refresh(): void {
        if (!this.isDisabled) {
            this.elements = this.container.querySelectorAll("[data-parallax-speed]");
            this.handleScroll();
        }
    }
}
TS;

$usageExample = <<<'TS'
document.addEventListener("DOMContentLoaded", () => {
    new VerticalParallax("verticalParallax-container", ".verticalParallax-layer");
});
TS;

$htmlExample = <<<'HTML'
<div id="verticalParallax-container" class="relative overflow-hidden">
    <picture data-parallax-speed="1" class="verticalParallax-layer">
        <img src="/assets/img/layer-01.webp" alt="" loading="lazy">
    </picture>

    <picture data-parallax-speed="0.35" class="verticalParallax-layer">
        <img src="/assets/img/layer-02.webp" alt="" loading="lazy">
    </picture>
</div>
HTML;
?>

<div class="mx-auto max-w-screen-2xl font-poppins">
    <article class="mx-auto w-4/5">
        <div class="pt-6">
            <a href="/en/my-work" class="inline-flex items-center gap-2 text-sm font-semibold text-dark-green transition hover:opacity-70 dark:text-accent-green">
                <span aria-hidden="true">&larr;</span>
                Back to selected work
            </a>
        </div>

        <header class="pt-8">
            <p class="font-concert-one text-sm uppercase tracking-1 text-dark-green dark:text-accent-green">
                Component
            </p>
            <h1 class="mt-2 font-concert-one text-4xl tracking-1 text-dark-green dark:text-accent-green sm:text-6xl">
                Vertical Parallax
            </h1>
            <p class="mt-4 max-w-3xl text-base !leading-normal text-black/70 dark:text-white/70 sm:text-xl">
                A lightweight TypeScript component for moving several layers on scroll.
            </p>
            <p class="mt-3 text-sm text-black/55 dark:text-white/55">
                Last updated: 08/08/2026
            </p>
        </header>

        <div class="mt-10 border-t border-dark-green/15 dark:border-accent-green/20" aria-hidden="true"></div>

        <section class="mt-10 grid gap-6 lg:grid-cols-[minmax(0,1fr)_18rem] lg:items-start">
            <div class="max-w-4xl border-l-4 border-dark-green/35 pl-5 dark:border-accent-green/45">
                <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                    Why I built it
                </h2>
                <p class="mt-6 text-lg !leading-normal text-black/80 dark:text-white/80">
                    I wanted a parallax effect that was easy to integrate into a page, with few settings and behavior that is simple to understand.
                </p>
                <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                    The idea was to keep it lightweight: one container, several layers, one speed defined for each layer, then movement calculated on scroll.
                </p>
                <p class="mt-3 text-lg !leading-normal text-black/80 dark:text-white/80">
                    Also, the effect is disabled on small screens and if JavaScript is disabled in the browser, the layers remain visible without animation.
                </p>
            </div>
            <aside class="rounded-lg border border-dark-green/15 bg-dark-green/5 p-5 dark:border-accent-green/20 dark:bg-accent-green/5">
                <p class="font-concert-one text-xl text-dark-green dark:text-accent-green">In short</p>
                <div class="mt-4 space-y-4 text-sm text-black/70 dark:text-white/70">
                    <p><span class="font-semibold text-dark-green dark:text-accent-green">Configuration:</span> one container and one selector.</p>
                    <p><span class="font-semibold text-dark-green dark:text-accent-green">Control:</span> one speed per layer.</p>
                    <p><span class="font-semibold text-dark-green dark:text-accent-green">Dependency:</span> no animation library.</p>
                </div>
            </aside>
        </section>

    </article>

    <div id="verticalParallax-container" class="verticalParallax-container relative mt-16 block min-h-[896px] w-full overflow-hidden sm:min-h-[896px] md:min-h-[896px] lg:min-h-[896px] xl:min-h-[1152px] 2xl:min-h-[1536px]">
        <div aria-hidden="true" data-parallax-speed="1.0" class="verticalParallax-layer absolute top-0 h-full w-full pointer-events-none">
            <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/pixel-day/l01.webp', [
                'alt' => 'Pixel art background of clouds',
                'pictureClass' => 'contents',
                'class' => 'h-full w-auto rendering-pixelated object-cover object-right',
                'loading' => 'lazy',
                'decoding' => 'async',
                'draggable' => 'false',
                'convert' => false,
            ]) ?>
        </div>
        <div aria-hidden="true" data-parallax-speed="1.05" class="verticalParallax-layer absolute top-0 mt-4 h-full w-full pointer-events-none">
            <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/pixel-day/l02.webp', [
                'alt' => 'Pixel art background of very distant buildings',
                'pictureClass' => 'contents',
                'class' => 'h-full w-auto rendering-pixelated object-cover object-right',
                'loading' => 'lazy',
                'decoding' => 'async',
                'draggable' => 'false',
                'convert' => false,
            ]) ?>
        </div>
        <div aria-hidden="true" data-parallax-speed="0.95" class="verticalParallax-layer absolute top-0 h-full w-full pointer-events-none">
            <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/pixel-day/l03.webp', [
                'alt' => 'Pixel art background of distant buildings',
                'pictureClass' => 'contents',
                'class' => 'h-full w-auto rendering-pixelated object-cover object-right',
                'loading' => 'lazy',
                'decoding' => 'async',
                'draggable' => 'false',
                'convert' => false,
            ]) ?>
        </div>
        <div aria-hidden="true" data-parallax-speed="0.8" class="verticalParallax-layer absolute top-0 h-full w-full pointer-events-none">
            <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/pixel-day/l04.webp', [
                'alt' => 'Pixel art nearby buildings',
                'pictureClass' => 'contents',
                'class' => 'h-full w-auto rendering-pixelated object-cover object-right',
                'loading' => 'lazy',
                'decoding' => 'async',
                'draggable' => 'false',
                'convert' => false,
            ]) ?>
        </div>
        <div aria-hidden="true" data-parallax-speed="0.3" class="verticalParallax-layer absolute top-0 h-full w-full pointer-events-none">
            <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/pixel-day/l05.webp', [
                'alt' => 'Pixel art close road',
                'pictureClass' => 'contents',
                'class' => 'h-full w-auto rendering-pixelated object-cover object-right',
                'loading' => 'lazy',
                'decoding' => 'async',
                'draggable' => 'false',
                'convert' => false,
            ]) ?>
        </div>
        <div aria-hidden="true" data-parallax-speed="0.0" class="absolute top-0 h-full w-full pointer-events-none">
            <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/pixel-day/l06.webp', [
                'alt' => 'Pixel art very close road barrier',
                'pictureClass' => 'contents',
                'class' => 'h-full w-auto rendering-pixelated object-cover object-right',
                'loading' => 'lazy',
                'decoding' => 'async',
                'draggable' => 'false',
                'convert' => false,
            ]) ?>
        </div>

        <div class="absolute inset-0 pointer-events-none 2xl:shadow-white dark:2xl:shadow-black"></div>
    </div>

    <article class="mx-auto w-4/5">
        <section class="mt-14">
            <h2 class="font-concert-one text-3xl tracking-1 text-dark-green dark:text-accent-green sm:text-4xl">
                Code and usage
            </h2>
            <p class="mt-6 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                The principle fits in a few steps: read the container position, calculate its offset inside the viewport, apply each layer speed, then update the <code class="rounded bg-dark-green/10 px-1.5 py-0.5 text-sm text-dark-green dark:bg-accent-green/10 dark:text-accent-green">translateY</code>.
            </p>
            <p class="mt-3 max-w-4xl text-lg !leading-normal text-black/80 dark:text-white/80">
                The goal was mainly to get a component that is simple to understand, easy to integrate, and lightweight enough not to justify adding an animation library.
            </p>
            <div class="workflow" role="list">
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">1</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Position</p>
                        <p class="workflow-description">The component reads the container position inside the viewport.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">2</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Speed</p>
                        <p class="workflow-description">Each layer applies its <code class="rounded bg-dark-green/10 px-1.5 py-0.5 text-sm text-dark-green dark:bg-accent-green/10 dark:text-accent-green">data-parallax-speed</code> value.</p>
                    </div>
                </div>
                <div class="workflow-step" role="listitem">
                    <div class="workflow-marker">3</div>
                    <div class="workflow-content">
                        <p class="workflow-title">Transform</p>
                        <p class="workflow-description">The final movement is applied with a <code class="rounded bg-dark-green/10 px-1.5 py-0.5 text-sm text-dark-green dark:bg-accent-green/10 dark:text-accent-green">translateY</code>.</p>
                    </div>
                </div>
            </div>

            <div class="mt-6">
                <p class="text-sm font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">Full TypeScript class</p>
                <pre class="mt-3 overflow-hidden rounded-lg border border-dark-green/20 bg-true-black shadow-sm dark:border-accent-green/25"><code code-lang="typescript" class="scrollbar-code block max-w-full overflow-x-auto px-5 py-4 text-sm leading-relaxed text-white"><?= htmlspecialchars($classExample, ENT_QUOTES, 'UTF-8') ?></code></pre>
            </div>

            <div class="mt-8 grid gap-6 lg:grid-cols-2">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">Initialization</p>
                    <pre class="mt-3 overflow-hidden rounded-lg border border-dark-green/20 bg-true-black shadow-sm dark:border-accent-green/25"><code code-lang="typescript" class="scrollbar-code block max-w-full overflow-x-auto px-5 py-4 text-sm leading-relaxed text-white"><?= htmlspecialchars($usageExample, ENT_QUOTES, 'UTF-8') ?></code></pre>
                </div>
                <div>
                    <p class="text-sm font-semibold uppercase tracking-1 text-dark-green dark:text-accent-green">HTML structure</p>
                    <pre class="mt-3 overflow-hidden rounded-lg border border-dark-green/20 bg-true-black shadow-sm dark:border-accent-green/25"><code code-lang="html" class="scrollbar-code block max-w-full overflow-x-auto px-5 py-4 text-sm leading-relaxed text-white"><?= htmlspecialchars($htmlExample, ENT_QUOTES, 'UTF-8') ?></code></pre>
                </div>
            </div>
        </section>
    </article>
</div>
