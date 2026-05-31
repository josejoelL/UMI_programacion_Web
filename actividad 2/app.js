class CustomAlert {
    /**
     * Displays a custom alert popup with the provided message.
     * @param {string} message - The message to display in the popup.
     */
    render(message) {
        // Implementation for rendering the custom alert popup
        // Example:
        document.getElementById("popUpBox").style.display = "block";
        document.getElementById("popUpOverlay").style.display = "block";
        document.getElementById("popUpBox").innerText = message;
    }

    // Hides the pop-up box and overlay without clearing overlay content
    ok() {
        document.getElementById("popUpBox").style.display = "none";
        document.getElementById("popUpOverlay").style.display = "none";
    }
}

var Alert = new CustomAlert();