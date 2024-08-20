const navbar = document.querySelector('header');

window.addEventListener('scroll', navScroll);

function navScroll(){
    navbar.classList.toggle('scroll', scrollY > 0);
}

const hamburguer = document.querySelector('#hamburguer');

hamburguer.addEventListener('click', openMenu);

function openMenu(){
    hamburguer.classList.toggle('menu-open');
}

function drkMode(){
    body.classList.toggle('drk');
}