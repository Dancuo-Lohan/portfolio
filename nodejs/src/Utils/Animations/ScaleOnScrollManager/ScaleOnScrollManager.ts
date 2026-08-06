/**
 * Class to handle scaling of elements on scroll.
 */
export class ScaleOnScrollManager {
    private elements: NodeListOf<HTMLElement>;

    /**
     * Creates an instance of ScaleOnScroll.
     * @param elementClass - The CSS class of the elements to be scaled.
     */
    constructor(private elementClass: string) {
        this.elements = document.querySelectorAll(`.${this.elementClass}`);
        this.init();
    }

    /**
     * Initializes the scroll event listener.
     */
    private init() {
        window.addEventListener("scroll", this.onScroll.bind(this));
        // Initial check in case the element is already at the top on page load
        this.onScroll();
    }

    /**
     * Handles the scroll event to scale elements.
     */
    private onScroll() {
        this.elements.forEach((element) => {
            const parentRect = element.parentElement?.getBoundingClientRect();
            if (parentRect && parentRect.top <= 0 && parentRect.bottom >= 0) {
                // Parent element is at the top of the viewport
                const scaleValue = 1 + Math.min(79, Math.abs(parentRect.top * 25) / window.innerHeight);
                element.style.transform = `scale(${scaleValue})`;
                element.style.opacity = scaleValue === 80 ? "0" : "1";
            } else {
                // Reset scale when the parent element is not at the top
                element.style.transform = "scale(1)";
                element.style.opacity = "1";
            }
        });
    }
}
