import { Responsive } from "../Utils/Responsive/Responsive";
import { ThemeHandler } from "../Utils/ThemeHandler/ThemeHandler";
import { LanguageScrollHandler } from "../Utils/LanguageScrollHandler/LanguageScrollHandler";

import { ClickableCards } from "../Utils/ClickableCards/ClickableCards";

document.addEventListener("DOMContentLoaded", () => {
	new Responsive();
	new LanguageScrollHandler();
	new ClickableCards();

	ThemeHandler.getInstance('changeTheme');
});
