export class HorizontalScrollManager {
	private mainContainers: HTMLElement[] = [];
	private additionalHeight: number = 85;

	/**
	 * Creates an instance of HorizontalScrollManager.
	 *
	 * @param mainContainerClass - The class name of the main container elements to be managed.
	 * @param stickyContainerClass - The class name of the sticky container elements to be transformed on scroll.
	 * @param horizontalScrollClass - The class name of the horizontal scroll elements to be transformed on scroll.
	 */
	constructor(
		private mainContainerClass: string = "horizontal-scroll-main-container",
		private stickyContainerClass: string = "horizontal-scroll-sticky-container",
		private horizontalScrollClass: string = "horizontal-scroll"
	) {
		this.initializeContainers();
		this.setupContainers();
		this.initializeScrollListener();
		this.initializeResizeListener();
	}

	/**
	 * Initializes the main containers by querying the DOM.
	 */
	private initializeContainers(): void {
		this.mainContainers = Array.from(
			document.querySelectorAll(`.${this.mainContainerClass}`)
		);
	}

	/**
	 * Sets up each main container with necessary dimensions and transformations.
	 */
	private setupContainers(): void {
		this.mainContainers.forEach((mainContainer) => {
			const stickyContainer = mainContainer.querySelector(
				`.${this.stickyContainerClass}`
			) as HTMLElement;
			const horizontalScroll = stickyContainer.querySelector(
				`.${this.horizontalScrollClass}`
			) as HTMLElement;
			if (horizontalScroll) {
				this.setupContainer(mainContainer, stickyContainer, horizontalScroll);
			}
		});
	}

	/**
	 * Sets up a single container with necessary dimensions and transformations.
	 *
	 * @param mainContainer - The main container element.
	 * @param stickyContainer - The sticky container element.
	 * @param horizontalScroll - The horizontal scroll element.
	 */
	private setupContainer(
		mainContainer: HTMLElement,
		_stickyContainer: HTMLElement,
		horizontalScroll: HTMLElement
	): void {
		const itemCount = horizontalScroll.childElementCount;
		const containerWidth = mainContainer.getBoundingClientRect().width;
		const totalWidth = itemCount * containerWidth;

		mainContainer.style.height = `${
			(itemCount - 1) * containerWidth + window.innerHeight + this.additionalHeight
		}px`;
		horizontalScroll.style.width = `${totalWidth}px`;
	}

	/**
	 * Initializes the scroll event listener.
	 */
	private initializeScrollListener(): void {
		window.addEventListener("scroll", this.handleScroll.bind(this));
	}

	/**
	 * Initializes the resize event listener.
	 */
	private initializeResizeListener(): void {
		window.addEventListener("resize", this.handleResize.bind(this));
	}

	/**
	 * Handles the scroll event and applies the transformation to each container.
	 */
	private handleScroll(): void {
		this.mainContainers.forEach((container) => {
			this.applyTransformToItems(container);
		});
	}

	/**
	 * Handles the resize event and recalculates the dimensions of each container.
	 * Adjusts the scroll position by the difference in height.
	 */
	private handleResize(): void {
		if (window.innerWidth < 768) {
			// Check if the screen width is smaller than 768px
			return;
		}

		const scrollYBeforeResize = window.scrollY;
		const scrollPercent = this.calculateScrollPercent(scrollYBeforeResize);

		this.setupContainers();

		const newHeight = this.getTotalMainContainerHeight();
		const newScrollY = scrollPercent * newHeight;

		// Temporarily disable smooth scrolling
		const scrollBehavior = document.documentElement.style.scrollBehavior;
		document.documentElement.style.scrollBehavior = "auto";

		window.scrollTo(0, newScrollY);

		// Restore previous scroll behavior
		document.documentElement.style.scrollBehavior = scrollBehavior;
	}

	/**
	 * Calculates the total height of all main containers.
	 *
	 * @returns The total height of all main containers.
	 */
	private getTotalMainContainerHeight(): number {
		return this.mainContainers.reduce((totalHeight, container) => {
			return totalHeight + container.getBoundingClientRect().height;
		}, 0);
	}

	/**
	 * Calculates the percentage of the scroll position relative to the total height of the main containers.
	 *
	 * @param scrollY - The current scroll position.
	 * @returns The scroll percentage relative to the total height of the main containers.
	 */
	private calculateScrollPercent(scrollY: number): number {
		const totalHeight = this.getTotalMainContainerHeight();
		return totalHeight > 0 ? scrollY / totalHeight : 0;
	}

	/**
	 * Calculates the total offset from the top of the page to the given element.
	 *
	 * @param element - The element to calculate the offset for.
	 * @returns The total offset from the top of the page.
	 */
	private getTotalOffsetTop(element: HTMLElement): number {
		let totalOffsetTop = 0;
		let currentElement: HTMLElement | null = element;

		while (currentElement) {
			totalOffsetTop += currentElement.offsetTop;
			currentElement = currentElement.offsetParent as HTMLElement;
		}

		return totalOffsetTop;
	}

	/**
	 * Applies the transform to the scroll items of the given container based on the scroll position.
	 *
	 * @param container - The container to apply the transformation to.
	 */
	private applyTransformToItems(container: HTMLElement): void {
		const totalOffsetTop = this.getTotalOffsetTop(container);
		const itemsContainer = container.querySelector(
			`.${this.horizontalScrollClass}`
		) as HTMLElement;

		if (itemsContainer) {
			const containerWidth = container.getBoundingClientRect().width;
			const itemsNumber = itemsContainer.childElementCount;

			let scrollDistance = window.scrollY - totalOffsetTop;
			scrollDistance = Math.max(
				0,
				Math.min(scrollDistance, itemsNumber * containerWidth - containerWidth)
			);

			itemsContainer.style.transform = `translate3d(-${scrollDistance}px, 0, 0)`;
		}
	}
}
