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

// Display project details in a card
document.querySelectorAll(".project-card").forEach(card => {
    const title = card.dataset.title;
    const img = card.dataset.img;

    card.innerHTML = `
        <div class="card-header">
            <p>${title}</p>
        </div>
        <div class="card-body">
            <img src="${img}" class="img-fluid rounded">
        </div>
    `;
});

// Display project details in a modal
document.querySelectorAll(".project-card").forEach(card => {
    card.addEventListener("click", () => {
        const title = card.getAttribute("data-title");
        const img = card.getAttribute("data-img");
        const desc = card.getAttribute("data-desc");
        const github = card.getAttribute("data-github");

        document.getElementById("modalTitle").textContent = title;
        document.getElementById("modalImg").src = img;
        document.getElementById("modalDesc").textContent = desc;
        document.getElementById("modalGithub").href = github || "#";

        const modal = new bootstrap.Modal(document.getElementById("projectModal"));
        modal.show();
    });
});

// Remove focus from the card after closing the modal
document.getElementById("projectModal").addEventListener("hide.bs.modal", () => {
    document.activeElement.blur();
});