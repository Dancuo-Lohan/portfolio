import { VerticalParallax } from "../../Utils/VerticalParallax/VerticalParallax";
import { Responsive } from "../../Utils/Responsive/Responsive";
import { ThemeHandler } from "../../Utils/ThemeHandler/ThemeHandler";
import { CodeHighlighter } from "../../Utils/CodeHighlighter/CodeHighlighter";
import { LanguageScrollHandler } from "../../Utils/LanguageScrollHandler/LanguageScrollHandler";

document.addEventListener("DOMContentLoaded", () => {
	new VerticalParallax("verticalParallax-container", ".verticalParallax-layer");
	new Responsive();
	new LanguageScrollHandler();
	ThemeHandler.getInstance('changeTheme');
	new CodeHighlighter(true);
});
