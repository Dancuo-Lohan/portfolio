import { HTMLHighlighter } from "./highlighters/HTMLHighlighter";
import { TypeScriptHighlighter } from "./highlighters/TypeScriptHighlighter";
import { ILanguageHighlighter } from "./highlighters/ILanguageHighlighter";

/**
 * Main class responsible for initializing and managing code highlighting throughout the document.
 */
export class CodeHighlighter {
    private highlighters: Record<string, ILanguageHighlighter>;

    /**
     * Constructs a new instance of CodeHighlighter.
     * @param autoInit If true, automatically performs code highlighting on all <code> elements upon instantiation.
     */
    constructor(autoInit: boolean = false) {
        // Initialize language-specific highlighters.
        this.highlighters = {
            typescript: new TypeScriptHighlighter(),
            html: new HTMLHighlighter()
        };

        // Automatically initialize code highlighting if specified.
        if (autoInit) {
            this.highlightAllCode();
        }
    }

    /**
     * Applies syntax highlighting to all <code> elements in the document that have a `code-lang` attribute.
     */
    public highlightAllCode(): void {
        // Query all code elements that specify a language.
        const codeElements = document.querySelectorAll("code[code-lang]");
        codeElements.forEach((codeElement) => {
            // Retrieve the language attribute and the code content.
            const lang = codeElement.getAttribute("code-lang")?.toLowerCase();
            const text = codeElement.innerHTML.trim(); // Trim whitespace from the start and end.

            // Check if the language is supported and text is available.
            if (text && lang && this.highlighters[lang]) {
                // Perform highlighting using the appropriate highlighter.
                const highlightedText = this.highlighters[lang].highlight(text);
                // Update the code element with the highlighted text.
                if (highlightedText) {
                    codeElement.innerHTML = highlightedText.trim(); // Optionally trim the highlighted text as well.
                }
            }
        });
    }
}
