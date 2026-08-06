export class VerticalParallax {
    private container: HTMLDivElement; // Reference to the container element
    private elements: NodeListOf<HTMLElement>; // Collection of elements to apply parallax effect
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
        const userAgent = navigator.userAgent || navigator.vendor || (window as Window & { opera?: string }).opera || "";
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
