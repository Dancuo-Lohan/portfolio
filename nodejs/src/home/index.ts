import { Responsive } from "../Utils/Responsive/Responsive";
import { ThemeHandler } from "../Utils/ThemeHandler/ThemeHandler";
import { LanguageScrollHandler } from "../Utils/LanguageScrollHandler/LanguageScrollHandler";
import { ClickableCards } from "../Utils/ClickableCards/ClickableCards";

document.addEventListener("DOMContentLoaded", () => {
	new Responsive();
	new LanguageScrollHandler();
	new ClickableCards();
	ThemeHandler.getInstance("changeTheme");

	const carbonBadge = document.getElementById("wcb");
	if (carbonBadge) {
		const updateBadgeVisibility = () => {
			const result = carbonBadge.querySelector("#wcb_g")?.textContent?.trim() ?? "";
			carbonBadge.hidden = !/^\d+(?:\.\d+)?g of CO2\/view$/.test(result);
		};
		new MutationObserver(updateBadgeVisibility).observe(carbonBadge, {
			childList: true,
			characterData: true,
			subtree: true,
		});
		updateBadgeVisibility();
	}
});
