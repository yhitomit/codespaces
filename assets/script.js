/* script.js */
document.addEventListener("DOMContentLoaded", function () {
    const main = document.getElementById("main");

    // Trigger animation after a short delay to ensure styles are applied
    setTimeout(() => {
        main.style.opacity = "1";
        main.style.transform = "translateY(0)";
    }, 500);
});