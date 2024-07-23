document.getElementById('menu-icon').addEventListener('click', function() {
    this.classList.toggle('open');
    document.getElementById('side-menu').classList.toggle('open');
});

document.querySelector('.open-menu').addEventListener('click', function () {
    document.getElementById('myMenu').style.width = '250px';
});

function closeMenu() {
    document.getElementById('myMenu').style.width = '0';
}