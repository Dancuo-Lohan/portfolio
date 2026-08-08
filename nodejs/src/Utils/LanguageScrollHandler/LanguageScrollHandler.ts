type SavedLanguageScroll = {
	targetPath: string;
	scrollTop: number;
	ratio: number;
	createdAt: number;
};

export class LanguageScrollHandler {
	private readonly storageKey = "portfolioLanguageScroll";
	private readonly links: HTMLAnchorElement[];

	public constructor() {
		this.links = Array.from(document.querySelectorAll<HTMLAnchorElement>("[data-language-switch]"));

		this.prepareLinks();
		this.restoreSavedScroll();
	}

	private prepareLinks(): void {
		this.links.forEach((link) => {
			link.addEventListener("pointerdown", () => this.saveScroll(link));
			link.addEventListener("mousedown", () => this.saveScroll(link));
			link.addEventListener("touchstart", () => this.saveScroll(link), { passive: true });
			link.addEventListener("click", () => this.saveScroll(link));
			link.addEventListener("keydown", (event) => {
				if (event.key === "Enter" || event.key === " ") {
					this.saveScroll(link);
				}
			});
		});
	}

	private saveScroll(link: HTMLAnchorElement): void {
		const targetUrl = new URL(link.href, window.location.origin);
		const scrollTop = this.getScrollTop();
		const maxScroll = this.getMaxScroll();
		const payload: SavedLanguageScroll = {
			targetPath: `${targetUrl.pathname}${targetUrl.search}`,
			scrollTop,
			ratio: Math.min(1, Math.max(0, scrollTop / maxScroll)),
			createdAt: Date.now(),
		};

		try {
			window.sessionStorage.setItem(this.storageKey, JSON.stringify(payload));
		} catch {
			// Language switching should still work when storage is unavailable.
		}
	}

	private restoreSavedScroll(): void {
		const savedScroll = this.readSavedScroll();
		if (!savedScroll) {
			return;
		}

		this.clearSavedScroll();

		const currentPath = `${window.location.pathname}${window.location.search}`;
		if (savedScroll.targetPath !== currentPath || Date.now() - savedScroll.createdAt > 10000) {
			return;
		}

		const restoreScroll = () => {
			const maxScroll = this.getMaxScroll();
			const ratioScroll = Math.round(maxScroll * Math.min(1, Math.max(0, savedScroll.ratio)));
			const targetScroll = Math.min(maxScroll, Math.max(0, ratioScroll || savedScroll.scrollTop));
			const previousHtmlBehavior = document.documentElement.style.scrollBehavior;
			const previousBodyBehavior = document.body.style.scrollBehavior;

			document.documentElement.style.scrollBehavior = "auto";
			document.body.style.scrollBehavior = "auto";
			window.scrollTo(0, targetScroll);
			document.documentElement.scrollTop = targetScroll;
			document.body.scrollTop = targetScroll;
			document.documentElement.style.scrollBehavior = previousHtmlBehavior;
			document.body.style.scrollBehavior = previousBodyBehavior;
		};

		if ("scrollRestoration" in history) {
			history.scrollRestoration = "manual";
		}

		restoreScroll();
		window.addEventListener("load", restoreScroll, { once: true });
		requestAnimationFrame(restoreScroll);
		setTimeout(restoreScroll, 80);
		setTimeout(restoreScroll, 250);
	}

	private readSavedScroll(): SavedLanguageScroll | null {
		try {
			const savedScroll = window.sessionStorage.getItem(this.storageKey);
			if (!savedScroll) {
				return null;
			}

			const parsed = JSON.parse(savedScroll) as Partial<SavedLanguageScroll>;
			if (
				typeof parsed.targetPath !== "string" ||
				typeof parsed.scrollTop !== "number" ||
				typeof parsed.ratio !== "number" ||
				typeof parsed.createdAt !== "number"
			) {
				return null;
			}

			return parsed as SavedLanguageScroll;
		} catch {
			return null;
		}
	}

	private clearSavedScroll(): void {
		try {
			window.sessionStorage.removeItem(this.storageKey);
		} catch {
			// Nothing to clear when storage is unavailable.
		}
	}

	private getScrollTop(): number {
		return window.scrollY || document.documentElement.scrollTop || document.body.scrollTop || 0;
	}

	private getMaxScroll(): number {
		return Math.max(1, this.getDocumentHeight() - window.innerHeight);
	}

	private getDocumentHeight(): number {
		return Math.max(
			document.body.scrollHeight,
			document.body.offsetHeight,
			document.documentElement.clientHeight,
			document.documentElement.scrollHeight,
			document.documentElement.offsetHeight,
		);
	}
}
