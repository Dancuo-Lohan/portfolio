import { Responsive } from "../Utils/Responsive/Responsive";
import { ThemeHandler } from "../Utils/ThemeHandler/ThemeHandler";
import { LanguageScrollHandler } from "../Utils/LanguageScrollHandler/LanguageScrollHandler";

class ClickableCards {
	private readonly cards: HTMLElement[];
	private pointerStart: { x: number; y: number } | null = null;

	constructor() {
		this.cards = Array.from(document.querySelectorAll<HTMLElement>("[data-clickable-card][data-card-url]"));
		this.attachEvents();
	}

	private attachEvents(): void {
		this.cards.forEach((card) => {
			card.addEventListener("pointerdown", (event) => {
				this.pointerStart = {
					x: event.clientX,
					y: event.clientY,
				};
			});

			card.addEventListener("click", (event) => {
				this.handleClick(event, card);
			});
		});
	}

	private handleClick(event: MouseEvent, card: HTMLElement): void {
		if (this.shouldIgnoreClick(event)) {
			return;
		}

		const url = card.dataset.cardUrl;
		if (url) {
			window.location.href = url;
		}
	}

	private shouldIgnoreClick(event: MouseEvent): boolean {
		if (event.defaultPrevented || event.button !== 0 || event.metaKey || event.ctrlKey || event.shiftKey || event.altKey) {
			return true;
		}

		if (this.hasDraggedBeforeClick(event)) {
			return true;
		}

		const target = event.target;
		if (!(target instanceof Element)) {
			return true;
		}

		return Boolean(target.closest("a, button, input, textarea, select, label"));
	}

	private hasDraggedBeforeClick(event: MouseEvent): boolean {
		if (!this.pointerStart) {
			return false;
		}

		const distanceX = Math.abs(event.clientX - this.pointerStart.x);
		const distanceY = Math.abs(event.clientY - this.pointerStart.y);

		return distanceX > 5 || distanceY > 5;
	}
}

document.addEventListener("DOMContentLoaded", () => {
	new Responsive();
	new LanguageScrollHandler();
	new ClickableCards();

	ThemeHandler.getInstance('changeTheme');
});
