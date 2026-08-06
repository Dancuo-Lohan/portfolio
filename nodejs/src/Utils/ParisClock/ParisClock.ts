import { ThemeChanger } from "../ThemeChanger/ThemeChanger";

export class ParisClock {
    private elementId: string; // ID of the HTML element to display the clock
    private themeChanger: ThemeChanger = ThemeChanger.getInstance(); // Singleton instance of ThemeChanger for managing UI themes

    /**
     * Constructor for creating a ParisClock instance.
     * @param elementId - The ID of the HTML element where the Paris time will be displayed.
     * Initializes the clock updates every second.
     */
    constructor(elementId: string) {
        this.elementId = elementId;
        this.updateTime();
        setInterval(() => this.updateTime(), 1000);
    }

    /**
     * Updates the time display for the element with Paris time.
     * Changes themes based on specific times of day.
     */
    private updateTime(): void {
        const parisTime = new Date().toLocaleTimeString("en-US", {
            timeZone: "Europe/Paris", // Set time zone to Paris
            hour: "2-digit",
            minute: "2-digit",
            hour12: true,
        });
        const element = document.getElementById(this.elementId); // Fetch the element by its ID
        if (element && element.innerText != parisTime) {
            element.innerText = parisTime; // Update the display only if the time has changed
            // Change theme based on specific times
            if (parisTime == "08:00 PM") {
                this.themeChanger.setTheme("night", true); // Set theme to 'night' at 8 PM
            } else if (parisTime == "06:00 AM" || parisTime == "06:00 PM") {
                this.themeChanger.setTheme("rise", true); // Set theme to 'rise' at 6 AM and 6 PM
            } else if (parisTime == "09:00 AM") {
                this.themeChanger.setTheme("day", true); // Set theme to 'day' at 9 AM
            }
        }
    }
}