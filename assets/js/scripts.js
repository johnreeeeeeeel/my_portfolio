// Toogle theme
function setTheme(theme) {
    const html = document.documentElement;
    const btn = document.getElementById("themeToggle");

    html.setAttribute("data-bs-theme", theme);
    localStorage.setItem("theme", theme);
}

function toggleTheme() {
    const currentTheme = document.documentElement.getAttribute("data-bs-theme") || "dark";
    const newTheme = currentTheme === "dark" ? "light" : "dark";
    setTheme(newTheme);
}

document.addEventListener("DOMContentLoaded", () => {
    const savedTheme = localStorage.getItem("theme") || "dark";
    setTheme(savedTheme);
});

// Remove focus from the card after closing the modal
document.getElementById("projectModal").addEventListener("hide.bs.modal", () => {
    document.activeElement.blur();
});

// Go back to the previous page and reload it
function goBackAndReload() {
    window.history.back();

    setTimeout(() => {
        window.location.reload();
    }, 200);
}

window.addEventListener("pageshow", function(event) {
    if (event.persisted || performance.getEntriesByType("navigation")[0].type === "back_forward") {
        window.location.reload();
    }
});