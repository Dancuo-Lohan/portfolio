"use strict";
(() => {
  var __defProp = Object.defineProperty;
  var __defNormalProp = (obj, key, value) => key in obj ? __defProp(obj, key, { enumerable: true, configurable: true, writable: true, value }) : obj[key] = value;
  var __publicField = (obj, key, value) => __defNormalProp(obj, typeof key !== "symbol" ? key + "" : key, value);

  // src/Utils/Animations/HorizontalScrollManager/HorizontalScrollManager.ts
  var HorizontalScrollManager = class {
    /**
     * Creates an instance of HorizontalScrollManager.
     *
     * @param mainContainerClass - The class name of the main container elements to be managed.
     * @param stickyContainerClass - The class name of the sticky container elements to be transformed on scroll.
     * @param horizontalScrollClass - The class name of the horizontal scroll elements to be transformed on scroll.
     */
    constructor(mainContainerClass = "horizontal-scroll-main-container", stickyContainerClass = "horizontal-scroll-sticky-container", horizontalScrollClass = "horizontal-scroll") {
      __publicField(this, "mainContainerClass", mainContainerClass);
      __publicField(this, "stickyContainerClass", stickyContainerClass);
      __publicField(this, "horizontalScrollClass", horizontalScrollClass);
      __publicField(this, "mainContainers", []);
      __publicField(this, "additionalHeight", 85);
      this.initializeContainers();
      this.setupContainers();
      this.initializeScrollListener();
      this.initializeResizeListener();
    }
    /**
     * Initializes the main containers by querying the DOM.
     */
    initializeContainers() {
      this.mainContainers = Array.from(
        document.querySelectorAll(`.${this.mainContainerClass}`)
      );
    }
    /**
     * Sets up each main container with necessary dimensions and transformations.
     */
    setupContainers() {
      this.mainContainers.forEach((mainContainer) => {
        const stickyContainer = mainContainer.querySelector(
          `.${this.stickyContainerClass}`
        );
        const horizontalScroll = stickyContainer.querySelector(
          `.${this.horizontalScrollClass}`
        );
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
    setupContainer(mainContainer, _stickyContainer, horizontalScroll) {
      const itemCount = horizontalScroll.childElementCount;
      const containerWidth = mainContainer.getBoundingClientRect().width;
      const totalWidth = itemCount * containerWidth;
      mainContainer.style.height = `${(itemCount - 1) * containerWidth + window.innerHeight + this.additionalHeight}px`;
      horizontalScroll.style.width = `${totalWidth}px`;
    }
    /**
     * Initializes the scroll event listener.
     */
    initializeScrollListener() {
      window.addEventListener("scroll", this.handleScroll.bind(this));
    }
    /**
     * Initializes the resize event listener.
     */
    initializeResizeListener() {
      window.addEventListener("resize", this.handleResize.bind(this));
    }
    /**
     * Handles the scroll event and applies the transformation to each container.
     */
    handleScroll() {
      this.mainContainers.forEach((container) => {
        this.applyTransformToItems(container);
      });
    }
    /**
     * Handles the resize event and recalculates the dimensions of each container.
     * Adjusts the scroll position by the difference in height.
     */
    handleResize() {
      if (window.innerWidth < 768) {
        return;
      }
      const scrollYBeforeResize = window.scrollY;
      const scrollPercent = this.calculateScrollPercent(scrollYBeforeResize);
      this.setupContainers();
      const newHeight = this.getTotalMainContainerHeight();
      const newScrollY = scrollPercent * newHeight;
      const scrollBehavior = document.documentElement.style.scrollBehavior;
      document.documentElement.style.scrollBehavior = "auto";
      window.scrollTo(0, newScrollY);
      document.documentElement.style.scrollBehavior = scrollBehavior;
    }
    /**
     * Calculates the total height of all main containers.
     *
     * @returns The total height of all main containers.
     */
    getTotalMainContainerHeight() {
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
    calculateScrollPercent(scrollY) {
      const totalHeight = this.getTotalMainContainerHeight();
      return totalHeight > 0 ? scrollY / totalHeight : 0;
    }
    /**
     * Calculates the total offset from the top of the page to the given element.
     *
     * @param element - The element to calculate the offset for.
     * @returns The total offset from the top of the page.
     */
    getTotalOffsetTop(element) {
      let totalOffsetTop = 0;
      let currentElement = element;
      while (currentElement) {
        totalOffsetTop += currentElement.offsetTop;
        currentElement = currentElement.offsetParent;
      }
      return totalOffsetTop;
    }
    /**
     * Applies the transform to the scroll items of the given container based on the scroll position.
     *
     * @param container - The container to apply the transformation to.
     */
    applyTransformToItems(container) {
      const totalOffsetTop = this.getTotalOffsetTop(container);
      const itemsContainer = container.querySelector(
        `.${this.horizontalScrollClass}`
      );
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
  };

  // src/Utils/Animations/ScaleOnScrollManager/ScaleOnScrollManager.ts
  var ScaleOnScrollManager = class {
    /**
     * Creates an instance of ScaleOnScroll.
     * @param elementClass - The CSS class of the elements to be scaled.
     */
    constructor(elementClass) {
      __publicField(this, "elementClass", elementClass);
      __publicField(this, "elements");
      this.elements = document.querySelectorAll(`.${this.elementClass}`);
      this.init();
    }
    /**
     * Initializes the scroll event listener.
     */
    init() {
      window.addEventListener("scroll", this.onScroll.bind(this));
      this.onScroll();
    }
    /**
     * Handles the scroll event to scale elements.
     */
    onScroll() {
      this.elements.forEach((element) => {
        const parentRect = element.parentElement?.getBoundingClientRect();
        if (parentRect && parentRect.top <= 0 && parentRect.bottom >= 0) {
          const scaleValue = 1 + Math.min(79, Math.abs(parentRect.top * 25) / window.innerHeight);
          element.style.transform = `scale(${scaleValue})`;
          element.style.opacity = scaleValue === 80 ? "0" : "1";
        } else {
          element.style.transform = "scale(1)";
          element.style.opacity = "1";
        }
      });
    }
  };

  // src/Utils/Responsive/Responsive.ts
  var Responsive = class {
    /**
     * Constructor for creating a Responsive instance.
     * Automatically adjusts the height of certain elements on initialization and on window resize.
     */
    constructor() {
      this.adjustHeight();
      this.handleFooterHeight();
      if (window.innerWidth > 768) {
        this.initResizeListener();
      }
    }
    /**
     * Initializes the window resize event listener.
     */
    initResizeListener() {
      window.addEventListener("resize", () => {
        this.adjustHeight();
        this.handleFooterHeight();
      });
    }
    /**
     * Adjusts the height of elements with the '.js-h-screen' class based on the window's inner height.
     * Ensures the height does not exceed a set maximum for large screens.
     */
    adjustHeight() {
      const hScreenSmall = document.querySelectorAll(".js-h-screen-small");
      const screenHeightSmall = window.innerHeight < 1536 ? window.innerHeight + "px" : "1280px";
      hScreenSmall.forEach((element) => {
        element.style.height = screenHeightSmall;
      });
      const hScreen = document.querySelectorAll(".js-h-screen");
      const screenHeight = window.innerHeight + "px";
      hScreen.forEach((element) => {
        element.style.height = screenHeight;
      });
    }
    /**
     * Adjusts the height of the main-content element to add the footer height in margin-bottom style.
     */
    handleFooterHeight() {
      const mainContent = document.getElementById("main-content");
      const footer = document.getElementById("footer");
      if (mainContent && footer) {
        mainContent.style.marginBottom = footer.clientHeight + "px";
      }
    }
  };

  // src/Utils/ThemeHandler/ThemeHandler.ts
  var _ThemeHandler = class _ThemeHandler {
    /**
     * Private constructor to prevent direct instantiation.
     * @param buttonId - The ID of the button that toggles the theme.
     */
    constructor(buttonId) {
      __publicField(this, "themeButton");
      __publicField(this, "themeIcon");
      this.themeButton = document.getElementById(buttonId);
      this.themeIcon = this.themeButton.querySelector("img");
      if (!this.themeButton) {
        throw new Error(`Button with id "${buttonId}" not found.`);
      }
      if (!this.themeIcon) {
        throw new Error(`Image element not found inside the button with id "${buttonId}".`);
      }
      this.initTheme();
      this.addEventListeners();
    }
    /**
     * Get the singleton instance of the ThemeHandler.
     * @param buttonId - The ID of the button that toggles the theme.
     * @returns The singleton instance of ThemeHandler.
     */
    static getInstance(buttonId) {
      if (!_ThemeHandler.instance) {
        _ThemeHandler.instance = new _ThemeHandler(buttonId);
      }
      return _ThemeHandler.instance;
    }
    /**
     * Initialize the theme based on localStorage or OS preference.
     */
    initTheme() {
      if (localStorage.theme === "dark") {
        document.documentElement.classList.add("dark");
        this.themeIcon.src = "/assets/img/sun.svg";
      } else {
        document.documentElement.classList.remove("dark");
        this.themeIcon.src = "/assets/img/moon.svg";
      }
      const webCarbon = document.getElementById("wcb");
      if (webCarbon) {
        webCarbon.querySelector("#wcb_g")?.classList.add("!border-dark-green", "dark:!border-accent-green", "!bg-white", "dark:!bg-black", "!text-dark-green", "dark:!text-accent-green");
        webCarbon.querySelector("#wcb_a")?.classList.add("!border-dark-green", "dark:!border-accent-green", "!bg-dark-green", "dark:!bg-accent-green", "!text-white", "dark:!text-black");
        webCarbon.querySelector("#wcb_2")?.classList.add("!text-black", "dark:!text-white");
      }
    }
    /**
     * Add event listeners to the theme toggle button.
     */
    addEventListeners() {
      this.themeButton.addEventListener("click", this.toggleTheme.bind(this));
    }
    /**
     * Toggle the theme between light and dark.
     */
    toggleTheme() {
      if (document.documentElement.classList.contains("dark")) {
        this.setLightMode();
      } else {
        this.setDarkMode();
      }
    }
    /**
     * Set the light mode and update localStorage.
     */
    setLightMode() {
      document.documentElement.classList.remove("dark");
      localStorage.theme = "light";
      this.themeIcon.src = "/assets/img/moon.svg";
    }
    /**
     * Set the dark mode and update localStorage.
     */
    setDarkMode() {
      document.documentElement.classList.add("dark");
      localStorage.theme = "dark";
      this.themeIcon.src = "/assets/img/sun.svg";
    }
    /**
     * Remove the theme from localStorage to respect the OS preference.
     */
    resetTheme() {
      localStorage.removeItem("theme");
      this.initTheme();
    }
  };
  __publicField(_ThemeHandler, "instance");
  var ThemeHandler = _ThemeHandler;

  // src/home/index.ts
  document.addEventListener("DOMContentLoaded", () => {
    new Responsive();
    new HorizontalScrollManager("horizontal-scroll-main-container", "horizontal-scroll-sticky-container", "horizontal-scroll");
    new ScaleOnScrollManager("scale-on-scroll");
    ThemeHandler.getInstance("changeTheme");
    const animatedElements = document.querySelectorAll(
      ".animated-right, .animated-left, .animated-right p, .animated-left p"
    );
    setTimeout(() => {
      animatedElements.forEach((el) => {
        el.classList.remove("animation-start");
        void el.offsetWidth;
        el.classList.add("animation-start");
      });
    }, 10);
  });
})();
