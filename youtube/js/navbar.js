document.addEventListener("DOMContentLoaded", () => {
    const menuIcon = document.getElementById("menu-icon");
    const menuContent = document.getElementById("menu-content");

    menuIcon.addEventListener("click", () => {
        menuIcon.classList.toggle("open");
        menuContent.classList.toggle("open-menu");
    });
});
