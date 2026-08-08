import { HorizontalScrollManager } from "../Utils/Animations/HorizontalScrollManager/HorizontalScrollManager";
import { ScaleOnScrollManager } from "../Utils/Animations/ScaleOnScrollManager/ScaleOnScrollManager";
import { Responsive } from "../Utils/Responsive/Responsive";
import { ThemeHandler } from "../Utils/ThemeHandler/ThemeHandler";
import { LanguageScrollHandler } from "../Utils/LanguageScrollHandler/LanguageScrollHandler";

document.addEventListener("DOMContentLoaded", () => {
	new Responsive();
	new LanguageScrollHandler();
	new HorizontalScrollManager("horizontal-scroll-main-container", "horizontal-scroll-sticky-container", "horizontal-scroll");
	new ScaleOnScrollManager("scale-on-scroll");
	ThemeHandler.getInstance("changeTheme");

	const animatedElements = document.querySelectorAll(
		".animated-right, .animated-left, .animated-right p, .animated-left p"
	) as NodeListOf<HTMLElement>;

	setTimeout(() => {
		animatedElements.forEach((el) => {
			// Force reflow
			el.classList.remove("animation-start");
			void el.offsetWidth;
			el.classList.add("animation-start");
		});
	}, 10);
});
