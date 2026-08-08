import { Responsive } from "../../Utils/Responsive/Responsive";
import { ThemeHandler } from "../../Utils/ThemeHandler/ThemeHandler";
import { LanguageScrollHandler } from "../../Utils/LanguageScrollHandler/LanguageScrollHandler";

document.addEventListener("DOMContentLoaded", () => {
	new Responsive();
	new LanguageScrollHandler();

	ThemeHandler.getInstance('changeTheme');
});
