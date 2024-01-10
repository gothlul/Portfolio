const navbar = document.querySelector('header');

function navScroll(){
    navbar.classList.toggle('scroll', scrollY > 0);
}

window.addEventListener('scroll', navScroll);