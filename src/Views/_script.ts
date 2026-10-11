import { Responsive } from "../Scripts/Utils/Responsive/Responsive";
import { ThemeHandler } from "../Scripts/Utils/ThemeHandler/ThemeHandler";
import { LanguageScrollHandler } from "../Scripts/Utils/LanguageScrollHandler/LanguageScrollHandler";
import { ClickableCards } from "../Scripts/Utils/ClickableCards/ClickableCards";

document.addEventListener("DOMContentLoaded", () => {
    new Responsive();
    new LanguageScrollHandler();
    new ClickableCards();
    ThemeHandler.getInstance("changeTheme");
});
