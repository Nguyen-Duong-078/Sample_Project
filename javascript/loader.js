document.addEventListener("DOMContentLoaded", function() {
    // Simulate a delay (e.g., 3 seconds) to show the loading effect.
    setTimeout(function() {
        // Remove the loading container and show the content.
        const loadingContainer = document.querySelector(".loading-container");
        const content = document.querySelector(".content");
        loadingContainer.style.display = "none";
        content.style.display = "block";
    }, 1000); // 3000 milliseconds = 3 seconds
});