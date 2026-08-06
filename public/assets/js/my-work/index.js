"use strict";
(() => {
  var __defProp = Object.defineProperty;
  var __defNormalProp = (obj, key, value) => key in obj ? __defProp(obj, key, { enumerable: true, configurable: true, writable: true, value }) : obj[key] = value;
  var __publicField = (obj, key, value) => __defNormalProp(obj, typeof key !== "symbol" ? key + "" : key, value);

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

  // src/my-work/index.ts
  document.addEventListener("DOMContentLoaded", () => {
    new Responsive();
    ThemeHandler.getInstance("changeTheme");
  });
})();
