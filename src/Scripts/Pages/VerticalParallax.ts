import { VerticalParallax } from "../Utils/VerticalParallax/VerticalParallax";
import { CodeHighlighter } from "../Utils/CodeHighlighter/CodeHighlighter";

document.addEventListener("DOMContentLoaded", () => {
    new VerticalParallax("verticalParallax-container", ".verticalParallax-layer");
    new CodeHighlighter(true);
});
