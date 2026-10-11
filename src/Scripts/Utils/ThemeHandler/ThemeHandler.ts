/**
 * ThemeHandler class to manage Tailwind CSS dark mode.
 * This class handles the initialization, toggling, and resetting of the theme.
 */
export class ThemeHandler {
    private static instance: ThemeHandler;
    private themeButton: HTMLElement;
    private themeIcon: HTMLImageElement;

    /**
     * Private constructor to prevent direct instantiation.
     * @param buttonId - The ID of the button that toggles the theme.
     */
    private constructor(buttonId: string) {
        this.themeButton = document.getElementById(buttonId) as HTMLElement;
        this.themeIcon = this.themeButton.querySelector('img') as HTMLImageElement;

        if (!this.themeButton) {
            throw new Error(`Button with id "${buttonId}" not found.`);
        }
        if (!this.themeIcon) {
            throw new Error(`Image element not found inside the button with id "${buttonId}".`);
        }

        this.initTheme();
        this.addEventListeners();
    }

    /**
     * Get the singleton instance of the ThemeHandler.
     * @param buttonId - The ID of the button that toggles the theme.
     * @returns The singleton instance of ThemeHandler.
     */
    public static getInstance(buttonId: string): ThemeHandler {
        if (!ThemeHandler.instance) {
            ThemeHandler.instance = new ThemeHandler(buttonId);
        }
        return ThemeHandler.instance;
    }

    /**
     * Initialize the theme based on localStorage or OS preference.
     */
    private initTheme(): void {
        if (localStorage.theme === 'dark') {
            document.documentElement.classList.add('dark');
            this.themeIcon.src = '/assets/img/sun.svg';
        } else {
            document.documentElement.classList.remove('dark');
            this.themeIcon.src = '/assets/img/moon.svg';
        }

        
        const webCarbon = document.getElementById('wcb');
        if (webCarbon) {
            webCarbon.querySelector('#wcb_g')?.classList.add('!border-dark-green', 'dark:!border-accent-green', '!bg-white', 'dark:!bg-black', '!text-dark-green', 'dark:!text-accent-green')
            webCarbon.querySelector('#wcb_a')?.classList.add('!border-dark-green', 'dark:!border-accent-green', '!bg-dark-green', 'dark:!bg-accent-green', '!text-white', 'dark:!text-black')
            webCarbon.querySelector('#wcb_2')?.classList.add('!text-black', 'dark:!text-white')
        }
    }

    /**
     * Add event listeners to the theme toggle button.
     */
    private addEventListeners(): void {
        this.themeButton.addEventListener('click', this.toggleTheme.bind(this));
    }

    /**
     * Toggle the theme between light and dark.
     */
    private toggleTheme(): void {
        if (document.documentElement.classList.contains('dark')) {
            this.setLightMode();
        } else {
            this.setDarkMode();
        }
    }

    /**
     * Set the light mode and update localStorage.
     */
    private setLightMode(): void {
        document.documentElement.classList.remove('dark');
        localStorage.theme = 'light';
        this.themeIcon.src = '/assets/img/moon.svg';
    }

    /**
     * Set the dark mode and update localStorage.
     */
    private setDarkMode(): void {
        document.documentElement.classList.add('dark');
        localStorage.theme = 'dark';
        this.themeIcon.src = '/assets/img/sun.svg';
    }

    /**
     * Remove the theme from localStorage to respect the OS preference.
     */
    public resetTheme(): void {
        localStorage.removeItem('theme');
        this.initTheme();
    }
}

export default ThemeHandler;
