document.addEventListener("DOMContentLoaded", () => {
    const menuIcon = document.getElementById("menu-icon");
    const sideMenu = document.getElementById("side-menu");

    menuIcon.addEventListener("click", () => {
        menuIcon.classList.toggle("open");
        sideMenu.classList.toggle("open");
    });
});

