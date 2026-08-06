import { VerticalParallax } from "../../Utils/VerticalParallax/VerticalParallax";
import { Responsive } from "../../Utils/Responsive/Responsive";
import { ThemeHandler } from "../../Utils/ThemeHandler/ThemeHandler";
import { CodeHighlighter } from "../../Utils/CodeHighlighter/CodeHighlighter";

document.addEventListener("DOMContentLoaded", () => {
	new VerticalParallax("verticalParallax-container", ".verticalParallax-layer");
	new Responsive();
	ThemeHandler.getInstance('changeTheme');
	new CodeHighlighter(true);
});
