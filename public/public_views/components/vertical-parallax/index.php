<div class="max-w-screen-2xl mx-auto font-poppins">
    <div class="relative mt-6 w-4/5 mx-auto">
        <div class="relative flex">
            <a href="/my-work" class="flex underline underline-offset-2 border-2 border-dark-green text-dark-green dark:border-accent-green dark:text-accent-green lg:mr-auto px-4 py-1 rounded-md hover:opacity-60 hover:cursor-pointer transition-opacity ml-2 sm:ml-6 md:ml-8">
                < Go back
            </a>
        </div>


        <h1 class="font-concert-one text-2xl sm:text-4xl text-dark-green dark:text-accent-green tracking-1 ml-2 sm:ml-6 md:ml-8 mt-6">
            [Typescript] Vertical parallax
        </h1>
        <div class="h-1 bg-dark-green dark:bg-accent-green w-2/6 mt-1 sm:mt-4 ml-2 sm:ml-6 md:ml-8"></div>
        <p class="mt-2 text-sm sm:text-base md:text-lg ml-2 sm:ml-6 md:ml-8">Last updated: <?= date('jS F Y', filemtime(__FILE__)) ?></p>
        <p class="text-lg sm:text-xl mt-8">
            I've always been fascinated by the little details that can make a difference in a project.
            Recently, I decided to challenge myself by creating a vertical parallax component using TypeScript.
            My goal was simple: build something lightweight, easy to integrate, and, above all, efficient across different devices.
        </p>


        <h2 class="font-concert-one text-2xl sm:text-4xl text-dark-green dark:text-accent-green tracking-1 ml-2 sm:ml-6 md:ml-8 mt-16">
            Why I Created This Parallax Component
        </h2>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            When I set out to build this component, I had a few specific objectives in mind.
            First, I wanted it to be straightforward to implement, no unnecessary complexity.
            Code should be clean and efficient. Secondly, customization was key.
            Different projects have different needs, and I wanted to make sure this component could adapt to those needs.
            Most importantly, I focused on performance, particularly on mobile devices.
        </p>
        <p class="text-lg sm:text-xl mt-8">
            Mobile performance is crucial.
            With so much web traffic coming from mobile, any lag or unnecessary processing can lead to a poor user experience.
            That's why I made a deliberate choice not to enable the parallax effect on mobile devices.
            Instead of forcing an effect that could slow things down, the component simply displays the final image state right away on mobile.
            This keeps the experience smooth and fast where it matters most.
        </p>

        <h2 class="font-concert-one text-2xl sm:text-4xl text-dark-green dark:text-accent-green tracking-1 ml-2 sm:ml-6 md:ml-8 mt-16">
            Key Features
        </h2>
        <ul class="text-lg sm:text-xl mt-4 sm:mt-8 list-disc list-inside">
            <li>
                <b class="tracking-1">Desktop-Only Parallax</b>: On desktops, the parallax effect adds that extra visual interest as you scroll. On mobile, it's about keeping things simple and fast. No parallax, just the final image in place.
            </li>
            <li class="mt-2">
                <b class="tracking-1">Optimized performance</b>: Carefully crafted to minimize performance overhead on scrolling, ensuring a smooth user experience even on devices with lower processing power.
            </li>
            <li class="mt-2">
                <b class="tracking-1">Ease of Use</b>: The component is easy to integrate, requiring minimal setup. Just a few lines of code, and it's ready to go.
            </li>
            <li class="mt-2">
                <b class="tracking-1">Flexibility</b>: You can adjust the speed of the parallax effect for each element, giving you control over how the effect is applied.
            </li>
        </ul>


        <h2 class="font-concert-one text-2xl sm:text-4xl text-dark-green dark:text-accent-green tracking-1 ml-2 sm:ml-6 md:ml-8 mt-16">
            How It Works
        </h2>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            The component first checks whether the user is on a mobile device or a desktop.
            If it's a desktop, the parallax effect activates as you scroll, offering a smooth experience.
            On mobile devices, the component doesn't attach any parallax events; it simply renders the final image state, ensuring optimal performance.
        </p>

        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            Here's the breakdown:
        </p>
        <ul class="text-lg sm:text-xl mt-4 list-disc list-inside">
            <li>
                <b class="tracking-1">Container and Elements</b>: The component allows easy selection of the container and target elements for the parallax effect.
            </li>
            <li class="mt-2">
                <b class="tracking-1">Event Handling</b>: Scroll event listeners are added on desktop to trigger the parallax effect.
            </li>
            <li class="mt-2">
                <b class="tracking-1">Mobile Optimization</b>: On mobile, the code bypasses the parallax effect entirely, focusing instead on delivering a fast, responsive experience.
            </li>
        </ul>
    </div>


    <div id="verticalParallax-container" class="verticalParallax-container relative w-full 2xl:min-h-[1536px] xl:min-h-[1152px] lg:min-h-[896px] md:min-h-[896px] sm:min-h-[896px] min-h-[896px] block overflow-hidden mt-16">
        <div aria-hidden="true" data-parallax-speed="1.0" class="verticalParallax-layer absolute top-0 w-full h-full pointer-events-none">
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
        <div aria-hidden="true" data-parallax-speed="1.05" class="verticalParallax-layer absolute top-0 w-full h-full pointer-events-none mt-4">
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
        <div aria-hidden="true" data-parallax-speed="0.95" class="verticalParallax-layer absolute top-0 w-full h-full pointer-events-none">
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
        <div aria-hidden="true" data-parallax-speed="0.8" class="verticalParallax-layer absolute top-0 w-full h-full pointer-events-none">
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
        <div data-parallax-speed="0.85" class="verticalParallax-layer">
            <div class="relative inset-0 w-4/5 mx-auto xl:mt-60 md:mt-48 mt-40 flex">
                <div class="bg-white dark:bg-black px-6 py-4 rounded-md bg-opacity-80  backdrop-blur-sm w-4/6">
                    <p class="text-lg sm:text-xl my-2 text-center">
                        Exemple of the parallax effect with a floating text.
                    </p>
                </div>
            </div>
        </div>
        <div aria-hidden="true" data-parallax-speed="0.3" class="verticalParallax-layer absolute top-0 w-full h-full pointer-events-none">
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
        <div aria-hidden="true" data-parallax-speed="0.0" class="absolute top-0 w-full h-full pointer-events-none">
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

        <div class="absolute inset-0 2xl:shadow-white dark:2xl:shadow-black pointer-events-none">
        </div>
    </div>

    <div class="relative mt-32 w-4/5 mx-auto">

        <h2 class="font-concert-one text-2xl sm:text-4xl text-dark-green dark:text-accent-green tracking-2 ml-2 sm:ml-6 md:ml-8">
            Class code and how to use it
        </h2>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            Fully documented class code in TypeScript:
        </p>
        <pre><code code-lang="typescript" class="scrollbar-code block mt-2 bg-black dark:bg-true-black rounded-lg text-sm sm:text-base text-white px-6 py-4 w-full overflow-x-auto">
class VerticalParallax {
    private container: HTMLDivElement; // Reference to the container element
    private elements: NodeListOf&lt;HTMLElement&gt;; // Collection of elements to apply parallax effect
    private isMobile: boolean; // Boolean to check if the device is mobile

    /**
    * Constructor for creating a VerticalParallax instance.
    * @param container - The ID of the container HTMLDivElement.
    * @param selector - The selector used to find elements within the container for applying the parallax effect.
    * Initializes the parallax elements and attaches the necessary event listeners.
    */
    constructor(container: string, selector: string) {
        this.container = document.getElementById(container) as HTMLDivElement; // Initializes the main container div
        this.elements = document.querySelectorAll(selector); // Initializes the elements based on the selector
        this.isMobile = this.checkIfMobile(); // Determine if the device is mobile

        if (!this.isMobile) {
            this.attachEvents(); // Set up event listeners for the scroll event if not on mobile
        }
    }

    /**
    * Checks if the device is a mobile device.
    * @returns boolean - True if the device is mobile, false otherwise.
    */
    private checkIfMobile(): boolean {
        const userAgent = navigator.userAgent || navigator.vendor || window.opera;
        return /android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(userAgent);
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
        if (!this.isMobile) {
            this.elements = this.container.querySelectorAll('[data-parallax-speed]');
            this.handleScroll();
        }
    }
}
    </code></pre>
        <p class="text-lg sm:text-xl mt-8">
            Easy to use in any other TypeScript file:
        </p>
        <pre><code code-lang="typescript" class="scrollbar-code block mt-2 bg-black dark:bg-true-black rounded-lg text-sm sm:text-base text-white px-6 py-4 w-full overflow-x-auto">
document.addEventListener("DOMContentLoaded", () => {
	new VerticalParallax("verticalParallax-container", ".verticalParallax-layer");
});
    </code></pre>
        <p class="text-lg sm:text-xl mt-8">
            HTML implementation with 2 pictures:
        </p>
        <div>
            <pre><code code-lang="html" class="scrollbar-code block mt-2 bg-black dark:bg-true-black rounded-lg text-sm sm:text-base text-white px-6 py-4 w-full overflow-x-auto">
<div aria-hidden="true" id="verticalParallax-container" style="position: relative; overflow: hidden">
    <picture aria-hidden="true" data-parallax-speed="1.0" style="position: absolute; top: 0; height: 100%; width: 100%; pointer-events: none" class="verticalParallax-layer">
        <img loading="lazy" draggable="false" style="height: 100%; width: auto; object-fit: cover" width="240" height="135" src="image/source" alt="Image description">
    </picture>
    <picture aria-hidden="true" data-parallax-speed="0.70" style="position: absolute; top: 0; height: 100%; width: 100%; pointer-events: none" class="verticalParallax-layer">
        <img loading="lazy" draggable="false" style="height: 100%; width: auto; object-fit: cover" width="240" height="135" src="image/source" alt="Image description">
    </picture>
</div>
        </code></pre>
        </div>
    </div>
</div>
