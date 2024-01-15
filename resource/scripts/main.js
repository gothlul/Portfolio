const navbar = document.querySelector('header');
const listaProjetos = document.getElementById('lista-projetos');
const btnProjeto = document.getElementById('btn-proj');
let i = 0;

var projetos = {
    titulo:['teste1', 'teste2', 'teste3', 'teste4', 'teste5', 'teste6', 'teste7'], descricao:[], capa:[], tecs:['teste1', 'teste2', 'teste3', 'teste4', 'teste5', 'teste6', 'teste7']
}

function navScroll(){
    navbar.classList.toggle('scroll', scrollY > 0);
}

window.addEventListener('scroll', navScroll);

for(i; i < 3; i++){
    listaProjetos.innerHTML += `<li class="card"><div class="capa"><img src="${projetos.capa[i]}"/></div><div><h3>${projetos.titulo[i]}</h3><p>${projetos.descricao[i]}</p><ul>${contaTec(i)}</ul><div class="view"><p>Visualizar</p></div></div></li>`;
}

function loading(){
    for(i > 2; i < projetos.titulo.length; i++){
        listaProjetos.innerHTML += `<li class="card"><div class="capa"><img src="${projetos.capa[i]}"/></div><div><h3>${projetos.titulo[i]}</h3><p>${projetos.descricao[i]}</p><ul>${contaTec(i)}</ul><div class="view"><p>Visualizar</p></div></div></li>`;
    }

    btnProjeto.style.display = 'none';
}

function contaTec(i){
    let cont = 0;
    let tecnologia = projetos.tecs[i]
    while(cont < tecnologia.length){
        listaProjetos.getElementsByClassName('ul').innerHTML += `<li class="tec-projeto"><img src="${tecnologia[cont]}"/></li>`;
        cont++;
    }
}