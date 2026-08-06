import { ILanguageHighlighter } from './ILanguageHighlighter';

/**
 * Handles syntax highlighting for TypeScript code.
 */
export class TypeScriptHighlighter implements ILanguageHighlighter {
    /**
     * Maps syntax types to corresponding CSS classes for styling.
     * @returns The CSS class for the given syntax type.
     */
    private getClassesForType(type: string): string {
        const classMappings: { [key: string]: string } = {
            keyword: "text-blue-500",
            decorator: "text-white",
            class: "text-green-300",
            generic: "text-gray-200",
            number: "text-green-200",
            string: "text-orange-300",
            comment: "text-emerald-600",
            variable: "text-blue-300",
        };
        return classMappings[type] || "";
    }

    /**
     * Highlights TypeScript code using regular expressions to identify syntax elements.
     * @param code The raw TypeScript code to be highlighted.
     * @returns The HTML string with syntax elements wrapped in <span> tags with appropriate classes.
     */
    highlight(code: string): string {
        const regex = /(&[a-zA-Z0-9#]+;)|\/\*[\s\S]*?\*\/|\/\/.*|(['"`])(?:\\.|(?!\2)[^\\])*?\2|\b(function|const|let|var|if|else|for|while|do|return|class|interface|enum|type|public|private|protected|static|readonly|extends|implements|new|this)\b|(@[A-Za-z_]\w*)\b|\b([A-Z][a-z]+(?:[A-Z][a-z]*\b[A-Za-z]*))\b|\b(\d+\.\d+|\d+)\b|\b([a-z]\w*)\b/g;
        return code.replace(regex, (match, entity, string, keyword, decorator, className, number, variable) => {
            if (entity) return match; // Return the HTML entity unchanged
            if (string) return `<span class="${this.getClassesForType("string")}">${match}</span>`;
            if (keyword) return `<span class="${this.getClassesForType("keyword")}">${match}</span>`;
            if (decorator) return `<span class="${this.getClassesForType("decorator")}">${match}</span>`;
            if (className) return `<span class="${this.getClassesForType("class")}">${match}</span>`;
            if (number) return `<span class="${this.getClassesForType("number")}">${match}</span>`;
            if (variable) return `<span class="${this.getClassesForType("variable")}">${match}</span>`;
            return `<span class="${this.getClassesForType("comment")}">${match}</span>`; // Default for comments and unmatched parts
        });
    }
}
