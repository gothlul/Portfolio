const listaProjetos = document.getElementById('lista-projetos');
const btnProjeto = document.getElementById('btn-proj');
const body = document.querySelector('body');
const tecs = document.querySelectorAll("#techs > ul > li");
const tecList = document.querySelectorAll("#techs > ul");
let i = 0;

window.addEventListener("DOMContentLoaded", (event) => {
    tecsList.innerHTML = '';

    for(i; i < 6; i++){
        if(i < 3){
            listaProjetos.innerHTML += `<li class="card"><div class="capa"><img src="${projetos.capa[i]}"/></div><div><h3>${projetos.titulo[i]}</h3><p>${projetos.descricao[i]}</p><ul id="item-${i}"></ul><div class="view"><p>Visualizar</p></div></div></li>`;
            listaTec(i);
        }

        tecsList.innerHTML += tecs[i];
    }
});


function loadingTecs(){
    for(i > 2; i < projetos.titulo.length; i++){
        listaProjetos.innerHTML += `<li class="card"><div class="capa"><img src="${projetos.capa[i]}"/></div><div><h3>${projetos.titulo[i]}</h3><p>${projetos.descricao[i]}</p><ul id="item-${i}"></ul><div class="view"><p>Visualizar</p></div></div></li>`;

        contaTec(i);
    }

    btnProjeto.style.display = 'none';
}

function listaTec(i){
    let projTecs = document.querySelectorAll("#techs > ul");
    i = 0;


    if(tecnologia.length > 0){
        while(cont < tecnologia.length){
            listaTec.innerHTML += `<li class="tec-projeto"><img src="${tecnologia[cont]}"/></li>`;
            cont++;
        }
    }
}