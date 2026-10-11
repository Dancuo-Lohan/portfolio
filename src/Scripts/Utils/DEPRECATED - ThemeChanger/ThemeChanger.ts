export class ThemeChanger {
	private static instance: ThemeChanger;
	private currentTheme: string;
	private timedTheme: string;
	private isInTransition: boolean = false;

	/**
	 * Private constructor to enforce the singleton pattern and initialize theme from sessionStorage.
	 */
	private constructor() {
		this.currentTheme = sessionStorage.getItem("actualTheme") || "day";
		this.timedTheme = sessionStorage.getItem("timedTheme") || "day";
	}

	/**
	 * Retrieves the singleton instance of the ThemeChanger.
	 * @returns {ThemeChanger} The singleton instance.
	 */
	public static getInstance(): ThemeChanger {
		if (!ThemeChanger.instance) {
			ThemeChanger.instance = new ThemeChanger();
		}
		return ThemeChanger.instance;
	}

	/**
	 * Sets the theme of the page, updates sessionStorage, and manages the visual transition state.
	 * @param {string} newTheme The new theme to set.
	 * @param {boolean} verifyFirstTheme If true, checks if the timed theme equals the current theme before changing.
	 */
	public setTheme(newTheme: string, verifyFirstTheme: boolean = false): void {
		if (this.isInTransition) {
			return; // Prevent multiple theme changes during an active transition
		}

		if (
			(verifyFirstTheme && this.timedTheme === this.currentTheme) ||
			!verifyFirstTheme
		) {
			this.isInTransition = true;
			this.updateHeader(true, newTheme);
			this.changeTheme(newTheme);
		}
	}

	/**
	 * Changes the theme by updating the CSS classes and images on the page.
	 * @param {string} newTheme The new theme to be applied.
	 */
	private changeTheme(newTheme: string): void {
		this.currentTheme = newTheme;
		sessionStorage.setItem("actualTheme", newTheme);
		this.applyTheme();
		setTimeout(() => {
			this.isInTransition = false;
			this.updateHeader(false, newTheme);
		}, 300); // Ensures transitions complete before lifting the transition lock
	}

	/**
	 * Applies the current theme to the page by updating CSS classes and images.
	 */
	private applyTheme(): void {
		this.updateClasses();
		this.updateImages();
	}

	/**
	 * Updates CSS classes of all elements on the page to reflect the current theme.
	 */
	private updateClasses(): void {
		const themes = ["day", "rise", "night"];
		const allElements: NodeListOf<Element> = document.querySelectorAll("*");

		allElements.forEach((element) => {
			let classValue =
				typeof element.className === "string"
					? element.className
					: element.className.baseVal;
			themes.forEach((theme) => {
				const themeRegex = new RegExp(`-${theme}\\b`, "g");
				if (theme !== this.currentTheme && themeRegex.test(classValue)) {
					classValue = classValue.replace(themeRegex, `-${this.currentTheme}`);
					if (typeof element.className === "string") {
						element.className = classValue;
					} else {
						element.className.baseVal = classValue;
					}
				}
			});
		});
	}

	/**
	 * Handles updating and transitioning images to the new theme by creating duplicates and applying fade transitions.
	 */
	private updateImages(): void {
		const themesRegex = /(day|night|rise)/; // Updated regex to match 'pixel-day', 'pixel-night', or 'pixel-rise' in the URL
		const pictures: NodeListOf<HTMLPictureElement> = document.querySelectorAll("picture");
	
		pictures.forEach((picture) => {
			// Determine if this picture should be updated based on its sources
			const hasRelevantTheme = Array.from(picture.querySelectorAll("source")).some(source => themesRegex.test(source.srcset)) ||
									 (picture.querySelector("img") && themesRegex.test(picture.querySelector("img")!.src));
	
			if (hasRelevantTheme) {
				const duplicatePicture = picture.cloneNode(true) as HTMLPictureElement;
				picture.parentNode?.insertBefore(duplicatePicture, picture.nextSibling);
				this.updatePictureTheme(duplicatePicture);
				duplicatePicture.style.opacity = "0";
				duplicatePicture.style.transition = "opacity 0.25s ease";
	
				setTimeout(() => {
					duplicatePicture.style.opacity = "1";
				}, 50);
	
				setTimeout(() => {
					picture.remove();
				}, 300);
			}
		});
	}

	/**
	 * Updates the source URLs within a picture element to match the current theme.
	 * @param {HTMLPictureElement} picture The picture element being updated.
	 */
	private updatePictureTheme(picture: HTMLPictureElement): void {
		const sources: NodeListOf<HTMLSourceElement> =
			picture.querySelectorAll("source");
		sources.forEach((source) => {
			source.srcset = source.srcset.replace(
				/(\/assets\/img\/pixel-)(day|rise|night)/,
				`$1${this.currentTheme}`
			);
		});
		const img: HTMLImageElement | null = picture.querySelector("img");
		if (img) {
			img.src = img.src.replace(
				/(\/assets\/img\/pixel-)(day|rise|night)/,
				`$1${this.currentTheme}`
			);
		}
	}

	/**
	 * Updates the header's appearance based on the current loading state and theme.
	 * @param {boolean} loading Indicates if a loading state should be shown.
	 * @param {string} themeName The name of the new theme for UI updates.
	 */
	private updateHeader(loading: boolean, themeName: string): void {
		document.querySelectorAll(".theme-changing-button").forEach((button) => {
			button.classList.toggle("cursor-progress", loading);
			button.classList.toggle("cursor-pointer", !loading);
		});

		document.querySelectorAll(".theme-changing-image").forEach((image) => {
			image.classList.toggle("opacity-90", image.id === themeName);
			image.classList.toggle("opacity-60", image.id !== themeName);
		});
	}
}
