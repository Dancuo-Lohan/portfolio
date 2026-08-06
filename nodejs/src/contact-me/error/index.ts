import { Responsive } from "../../Utils/Responsive/Responsive";
import { ThemeHandler } from "../../Utils/ThemeHandler/ThemeHandler";

document.addEventListener("DOMContentLoaded", () => {
	new Responsive();

	ThemeHandler.getInstance('changeTheme');
});
