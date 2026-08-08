import { ILanguageHighlighter } from "./ILanguageHighlighter";

/**
 * Handles syntax highlighting for escaped HTML code.
 */
export class HTMLHighlighter implements ILanguageHighlighter {
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

	public highlight(code: string): string {
		const regex = /(&lt;!--[\s\S]*?--&gt;)|(&lt;\/([a-zA-Z-]+)&gt;)|(&lt;([a-zA-Z-]+)([\s\S]*?)&gt;)|([^&]+)/g;

		return code.replace(regex, (match, comment, _closingTag, closingTagName, _openingTag, openingTagName, attributes, textContent) => {
			if (comment) {
				return `<span class="${this.getClassesForType("comment")}">${comment}</span>`;
			}

			if (closingTagName) {
				return `<span class="${this.getClassesForType("tag")}">&lt;/${closingTagName}&gt;</span>`;
			}

			if (openingTagName) {
				return `<span class="${this.getClassesForType("tag")}">&lt;${openingTagName}</span>` +
					this.highlightAttributes(attributes) +
					`<span class="${this.getClassesForType("tag")}">&gt;</span>`;
			}

			if (textContent && textContent.trim() !== "") {
				return `<span class="${this.getClassesForType("text")}">${textContent}</span>`;
			}

			return match;
		});
	}

	private highlightAttributes(attributes: string): string {
		if (!attributes) {
			return "";
		}

		const attrRegex = /([\w:-]+)(=("[^"]*"|'[^']*'|&quot;.*?&quot;|&#039;.*?&#039;|[^\s]+))?/g;
		return attributes.replace(attrRegex, (_match, attrName, attrAssignment) => {
			return `<span class="${this.getClassesForType("attribute")}">${attrName}</span>` +
				(attrAssignment ? `<span class="${this.getClassesForType("string")}">${attrAssignment}</span>` : "");
		});
	}
}
