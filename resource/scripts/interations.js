const navbar = document.querySelector('header');

window.addEventListener('scroll', navScroll);

function navScroll(){
    navbar.classList.toggle('scroll', scrollY > 0);
}