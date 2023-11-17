let abrirMenu = document.getElementById('abrir');
let menu = document.getElementById('menu');
let overlay = document.getElementById('overlay')

abrirMenu.addEventListener('click', () => {
    menu.classList.add('abrir-menu');
} )
menu.addEventListener('click', () => {
    menu.classList.remove('abrir-menu');
} )
overlay.addEventListener('click', () => {
    menu.classList.remove('abrir-menu');
} )