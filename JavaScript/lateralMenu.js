// Selecciona el botón de menú y el menú lateral
const menuToggle = document.getElementById('menu-toggle');
const sideMenu = document.getElementById('side-menu');
const mainContent = document.getElementById('main-content');
const closeMenu = document.getElementById('close-menu');

// Agrega un evento para abrir/cerrar el menú lateral
menuToggle.addEventListener('click', function() {
    sideMenu.classList.toggle('active');
    mainContent.classList.toggle('active');
});

closeMenu.addEventListener('click', function() {
    sideMenu.classList.remove('active');
    mainContent.classList.remove('active');
});