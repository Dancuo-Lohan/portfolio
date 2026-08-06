import { ILanguageHighlighter } from './ILanguageHighlighter';

/**
 * Handles syntax highlighting for HTML code.
 */
export class HTMLHighlighter implements ILanguageHighlighter {
    /**
     * Maps HTML syntax types to corresponding CSS classes for styling.
     * @returns The CSS class for the given syntax type.
     */
    private getClassesForType(type: string): string {
        const classMappings: { [key: string]: string } = {
            tag: "text-blue-500",
            attribute: "text-blue-300",
            string: "text-orange-300",
            comment: "text-emerald-600",
            text: "text-white", 
        };
        return classMappings[type] || "";
    }

    /**
     * Highlights HTML code using regular expressions to identify syntax elements, including text content.
     * @param code The raw HTML code to be highlighted.
     * @returns The HTML string with syntax elements wrapped in <span> tags with appropriate classes.
     */
    highlight(code: string): string {
        const regex = /(&[a-zA-Z0-9#]+;)|<!--[\s\S]*?-->|<([a-zA-Z\-]+)([^>]*?)>|<\/([a-zA-Z\-]+)>|([^<>]+)/g;
        return code.replace(regex, (match, entity, openTag, attributes, closeTag, textContent) => {
            if (entity) {
                return match; // HTML entities remain unchanged
            } else if (match.startsWith("<!--")) {
                return `<span class="${this.getClassesForType("comment")}">${match}</span>`; // Highlight comments
            } else if (openTag) {
                return `<span class="${this.getClassesForType("tag")}">&lt;${openTag}</span>` +
                       this.highlightAttributes(attributes) +
                       `<span class="${this.getClassesForType("tag")}">&gt;</span>`;
            } else if (closeTag) {
                return `<span class="${this.getClassesForType("tag")}">&lt;/${closeTag}&gt;</span>`; // Highlight closing tags
            } else if (textContent && textContent.trim() !== "") {
                return `<span class="${this.getClassesForType("text")}">${textContent}</span>`; // Highlight text content
            }
            return match; // Default case
        });
    }

    /**
     * Highlights attributes within a tag.
     * @param attributes The string containing all the attributes within the tag.
     * @returns A string with the attributes highlighted.
     */
    private highlightAttributes(attributes: string): string {
        if (!attributes) return "";
        const attrRegex = /(\w+)(="[^"]*")?/g;
        return attributes.replace(attrRegex, (_attrMatch, attrName, attrValue) => {
            return `<span class="${this.getClassesForType("attribute")}">${attrName}</span>` +
                   (attrValue ? `<span class="${this.getClassesForType("string")}">${attrValue}</span>` : "");
        });
    }
}
