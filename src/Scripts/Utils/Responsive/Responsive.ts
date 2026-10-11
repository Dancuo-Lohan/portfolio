export class Responsive {
    /**
     * Constructor for creating a Responsive instance.
     * Automatically adjusts the height of certain elements on initialization and on window resize.
     */
    constructor() {
        this.adjustHeight(); // Initial call to adjust the height of elements
        this.handleFooterHeight(); // Initial call to adjust the footer height
        if (window.innerWidth > 768) { // Check if the screen width is greater than 768px
            this.initResizeListener(); // Initialize resize listener if not on mobile
        }
    }

    /**
     * Initializes the window resize event listener.
     */
    private initResizeListener(): void {
        window.addEventListener('resize', () => {
            this.adjustHeight();
            this.handleFooterHeight();
        });
    }

    /**
     * Adjusts the height of elements with the '.js-h-screen' class based on the window's inner height.
     * Ensures the height does not exceed a set maximum for large screens.
     */
    private adjustHeight(): void {
        const hScreenSmall = document.querySelectorAll<HTMLElement>('.js-h-screen-small');
        // Determines appropriate height for elements, setting a maximum at 1280px for large screens
        const screenHeightSmall = window.innerHeight < 1536 ? window.innerHeight + 'px' : '1280px';
        hScreenSmall.forEach(element => {
            element.style.height = screenHeightSmall;
        });

        
        const hScreen = document.querySelectorAll<HTMLElement>('.js-h-screen');
        // Determines appropriate height for elements, setting a maximum at 1280px for large screens
        const screenHeight = window.innerHeight + 'px';
        hScreen.forEach(element => {
            element.style.height = screenHeight;
        });
    }

    /**
     * Adjusts the height of the main-content element to add the footer height in margin-bottom style.
     */
    private handleFooterHeight(): void {
        const mainContent = document.getElementById('main-content') as HTMLElement;
        const footer = document.getElementById('footer');
        if (mainContent && footer) {
            mainContent.style.marginBottom = footer.clientHeight + "px";
        }
    }
}
