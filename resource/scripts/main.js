import {sql} from '../data/database.js'

const listaProjetos = document.getElementById('lista-projetos');
const btnProjeto = document.getElementById('btn-proj');
const body = document.querySelector('body');
let i = 0;

window.addEventListener("DOMContentLoaded", (event) => {
    for(i; i < 3; i++){
        listaProjetos.innerHTML += `<li class="card"><div class="capa"><img src="${projetos.capa[i]}"/></div><div><h3>${projetos.titulo[i]}</h3><p>${projetos.descricao[i]}</p><ul id="item-${i}"></ul><div class="view"><p>Visualizar</p></div></div></li>`;
        
        contaTec(i);
    }
});


function loading(){
    for(i > 2; i < projetos.titulo.length; i++){
        listaProjetos.innerHTML += `<li class="card"><div class="capa"><img src="${projetos.capa[i]}"/></div><div><h3>${projetos.titulo[i]}</h3><p>${projetos.descricao[i]}</p><ul id="item-${i}"></ul><div class="view"><p>Visualizar</p></div></div></li>`;

        contaTec(i);
    }

    btnProjeto.style.display = 'none';
}

function contaTec(i){
    let cont = 0;
    let listaTec = document.getElementById(`item-${i}`);
    let tecnologia = projetos.tecs[i];

    if(tecnologia.length > 0){
        while(cont < tecnologia.length){
            listaTec.innerHTML += `<li class="tec-projeto"><img src="${tecnologia[cont]}"/></li>`;
            cont++;
        }
    }
}