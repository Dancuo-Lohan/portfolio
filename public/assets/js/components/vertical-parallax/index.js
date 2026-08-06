"use strict";
(() => {
  var __defProp = Object.defineProperty;
  var __defNormalProp = (obj, key, value) => key in obj ? __defProp(obj, key, { enumerable: true, configurable: true, writable: true, value }) : obj[key] = value;
  var __publicField = (obj, key, value) => __defNormalProp(obj, typeof key !== "symbol" ? key + "" : key, value);

  // src/Utils/VerticalParallax/VerticalParallax.ts
  var VerticalParallax = class {
    // Boolean to check if the device is mobile
    /**
     * Constructor for creating a VerticalParallax instance.
     * @param container - The ID of the container HTMLDivElement.
     * @param selector - The selector used to find elements within the container for applying the parallax effect.
     * Initializes the parallax elements and attaches the necessary event listeners.
     */
    constructor(container, selector) {
      __publicField(this, "container");
      // Reference to the container element
      __publicField(this, "elements");
      // Collection of elements to apply parallax effect
      __publicField(this, "isMobile");
      this.container = document.getElementById(container);
      this.elements = document.querySelectorAll(selector);
      this.isMobile = this.checkIfMobile();
      if (!this.isMobile) {
        this.attachEvents();
      }
    }
    /**
     * Checks if the device is a mobile device.
     * @returns boolean - True if the device is mobile, false otherwise.
     */
    checkIfMobile() {
      const userAgent = navigator.userAgent || navigator.vendor || window.opera || "";
      return /android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(userAgent);
    }
    /**
     * Attaches scroll event listeners to the window.
     * Listens for scroll events to apply the parallax effect.
     */
    attachEvents() {
      window.addEventListener("scroll", () => {
        this.handleScroll();
      });
    }
    /**
     * Handles the scroll event to apply parallax effects to the elements.
     * Calculates and applies the vertical parallax effect based on the scroll position.
     */
    handleScroll() {
      const containerRect = this.container.getBoundingClientRect();
      if (containerRect.top <= 0 && containerRect.bottom >= 0) {
        this.elements.forEach((element) => {
          const speed = parseFloat(
            element.getAttribute("data-parallax-speed") || "0.2"
          );
          const containerOffset = -containerRect.top;
          const parallaxOffset = containerOffset * speed;
          element.style.transform = `translateY(${parallaxOffset}px)`;
        });
      } else if (containerRect.top > 0) {
        this.elements.forEach((element) => {
          element.style.transform = `translateY(0px)`;
        });
      }
    }
    /**
     * Refreshes the parallax effects manually, for use when significant page layout changes occur (like theme changes).
     */
    refresh() {
      if (!this.isMobile) {
        this.elements = this.container.querySelectorAll("[data-parallax-speed]");
        this.handleScroll();
      }
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

  // src/Utils/CodeHighlighter/highlighters/HTMLHighlighter.ts
  var HTMLHighlighter = class {
    /**
     * Maps HTML syntax types to corresponding CSS classes for styling.
     * @returns The CSS class for the given syntax type.
     */
    getClassesForType(type) {
      const classMappings = {
        tag: "text-blue-500",
        attribute: "text-blue-300",
        string: "text-orange-300",
        comment: "text-emerald-600",
        text: "text-white"
      };
      return classMappings[type] || "";
    }
    /**
     * Highlights HTML code using regular expressions to identify syntax elements, including text content.
     * @param code The raw HTML code to be highlighted.
     * @returns The HTML string with syntax elements wrapped in <span> tags with appropriate classes.
     */
    highlight(code) {
      const regex = /(&[a-zA-Z0-9#]+;)|<!--[\s\S]*?-->|<([a-zA-Z\-]+)([^>]*?)>|<\/([a-zA-Z\-]+)>|([^<>]+)/g;
      return code.replace(regex, (match, entity, openTag, attributes, closeTag, textContent) => {
        if (entity) {
          return match;
        } else if (match.startsWith("<!--")) {
          return `<span class="${this.getClassesForType("comment")}">${match}</span>`;
        } else if (openTag) {
          return `<span class="${this.getClassesForType("tag")}">&lt;${openTag}</span>` + this.highlightAttributes(attributes) + `<span class="${this.getClassesForType("tag")}">&gt;</span>`;
        } else if (closeTag) {
          return `<span class="${this.getClassesForType("tag")}">&lt;/${closeTag}&gt;</span>`;
        } else if (textContent && textContent.trim() !== "") {
          return `<span class="${this.getClassesForType("text")}">${textContent}</span>`;
        }
        return match;
      });
    }
    /**
     * Highlights attributes within a tag.
     * @param attributes The string containing all the attributes within the tag.
     * @returns A string with the attributes highlighted.
     */
    highlightAttributes(attributes) {
      if (!attributes) return "";
      const attrRegex = /(\w+)(="[^"]*")?/g;
      return attributes.replace(attrRegex, (_attrMatch, attrName, attrValue) => {
        return `<span class="${this.getClassesForType("attribute")}">${attrName}</span>` + (attrValue ? `<span class="${this.getClassesForType("string")}">${attrValue}</span>` : "");
      });
    }
  };

  // src/Utils/CodeHighlighter/highlighters/TypeScriptHighlighter.ts
  var TypeScriptHighlighter = class {
    /**
     * Maps syntax types to corresponding CSS classes for styling.
     * @returns The CSS class for the given syntax type.
     */
    getClassesForType(type) {
      const classMappings = {
        keyword: "text-blue-500",
        decorator: "text-white",
        class: "text-green-300",
        generic: "text-gray-200",
        number: "text-green-200",
        string: "text-orange-300",
        comment: "text-emerald-600",
        variable: "text-blue-300"
      };
      return classMappings[type] || "";
    }
    /**
     * Highlights TypeScript code using regular expressions to identify syntax elements.
     * @param code The raw TypeScript code to be highlighted.
     * @returns The HTML string with syntax elements wrapped in <span> tags with appropriate classes.
     */
    highlight(code) {
      const regex = /(&[a-zA-Z0-9#]+;)|\/\*[\s\S]*?\*\/|\/\/.*|(['"`])(?:\\.|(?!\2)[^\\])*?\2|\b(function|const|let|var|if|else|for|while|do|return|class|interface|enum|type|public|private|protected|static|readonly|extends|implements|new|this)\b|(@[A-Za-z_]\w*)\b|\b([A-Z][a-z]+(?:[A-Z][a-z]*\b[A-Za-z]*))\b|\b(\d+\.\d+|\d+)\b|\b([a-z]\w*)\b/g;
      return code.replace(regex, (match, entity, string, keyword, decorator, className, number, variable) => {
        if (entity) return match;
        if (string) return `<span class="${this.getClassesForType("string")}">${match}</span>`;
        if (keyword) return `<span class="${this.getClassesForType("keyword")}">${match}</span>`;
        if (decorator) return `<span class="${this.getClassesForType("decorator")}">${match}</span>`;
        if (className) return `<span class="${this.getClassesForType("class")}">${match}</span>`;
        if (number) return `<span class="${this.getClassesForType("number")}">${match}</span>`;
        if (variable) return `<span class="${this.getClassesForType("variable")}">${match}</span>`;
        return `<span class="${this.getClassesForType("comment")}">${match}</span>`;
      });
    }
  };

  // src/Utils/CodeHighlighter/CodeHighlighter.ts
  var CodeHighlighter = class {
    /**
     * Constructs a new instance of CodeHighlighter.
     * @param autoInit If true, automatically performs code highlighting on all <code> elements upon instantiation.
     */
    constructor(autoInit = false) {
      __publicField(this, "highlighters");
      this.highlighters = {
        typescript: new TypeScriptHighlighter(),
        html: new HTMLHighlighter()
      };
      if (autoInit) {
        this.highlightAllCode();
      }
    }
    /**
     * Applies syntax highlighting to all <code> elements in the document that have a `code-lang` attribute.
     */
    highlightAllCode() {
      const codeElements = document.querySelectorAll("code[code-lang]");
      codeElements.forEach((codeElement) => {
        const lang = codeElement.getAttribute("code-lang")?.toLowerCase();
        const text = codeElement.innerHTML.trim();
        if (text && lang && this.highlighters[lang]) {
          const highlightedText = this.highlighters[lang].highlight(text);
          if (highlightedText) {
            codeElement.innerHTML = highlightedText.trim();
          }
        }
      });
    }
  };

  // src/components/vertical-parallax/index.ts
  document.addEventListener("DOMContentLoaded", () => {
    new VerticalParallax("verticalParallax-container", ".verticalParallax-layer");
    new Responsive();
    ThemeHandler.getInstance("changeTheme");
    new CodeHighlighter(true);
  });
})();
