<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Lucas Rasoppi</title>
    <link rel="icon" href="resource/img/akua.svg" type="image/x-icon">
    <link rel="stylesheet" href="resource/styles/style.css" type="text/css">
    <script src="resource/scripts/javascript/main.js" defer></script>
    <script src="resource/scripts/javascript/interations.js" defer></script>
</head>

<body>
    <header>
        <div id="navbar">
            <div id="navhome">
                <h1>Lucas Rasoppi</h1>
            </div>
            <div id="hamburguer">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <nav>
                <input id="switch" type="checkbox" onclick="drkMode()"></input>
                <ul id="menu">
                    <hr>
                    <li class="nav-item"><a href="#">Home</a></li>
                    <hr>
                    <li class="nav-item"><a href="#sobre">Sobre</a></li>
                    <hr>
                    <li class="nav-item"><a href="#techs">Skills</a></li>
                    <hr>
                    <li class="nav-item"><a href="#projetos">Projetos</a></li>
                    <hr>
                </ul>
                <ul id="redes-mobile">
                    <li><a class="rede" target="_blank" href="https://github.com/gothlul"><img src="resource/img/icons/icon-github.svg"></a></li>
                    <li><a class="rede" target="_blank" href="https://www.linkedin.com/in/lucas-rasoppi-6b8000207/"><img src="resource/img/icons/icon-linkedin.svg"></a></li>
                    <li><a class="rede" target="_blank" href=""><img src="resource/img/icons/icon-cv.svg"></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!------------------------------------------>

    <main>
        <section id="inicio">
            <div class="texto">
                <h2>Lucas Rasoppi</h2>
                <h1>Desenvolvedor Full-Stack</h1>
                <hr>
                <ul id="redes-desktop">
                    <li><a class="rede" target="_blank" href="https://github.com/gothlul"><img src="resource/img/icons/icon-github.svg"></a></li>
                    <li><a class="rede" target="_blank" href="https://www.linkedin.com/in/lucas-rasoppi-6b8000207/"><img src="resource/img/icons/icon-linkedin.svg"></a></li>
                    <li><a class="rede" target="_blank" href=""><img src="resource/img/icons/icon-cv.svg"></a></li>
                </ul>
                <button class="btn" onclick="openMenu()">
                    <p>Contatos</p>
                </button>
            </div>
            <div class="foto">
                <img src="resource/img/perfil.svg">
            </div>
        </section>

        <section id="sobre">
            <div id="parallax"></div>
            <div id="sobre-content">
                <div id="titulo">
                    <h2 class="titulo">Sobre mim</h2>
                    <hr>
                </div>
                <div id="text">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with des</p>
                </div>
            </div>
        </section>

        <section id="techs">
            <div id="tecs-title">
                <h2 class="titulo">Tecnologias</h2>
                <hr>
            </div>
            <ul>
                <li class="tec"><img src="resource/img/icons/icon-html.svg"></li>
                <li class="tec"><img src="resource/img/icons/icon-css.svg"></li>
                <li class="tec"><img src="resource/img/icons/icon-javascript.svg"></li>
                <li class="tec"><img src="resource/img/icons/icon-php.svg"></li>
                <li class="tec"><img src="resource/img/icons/icon-figma.svg"></li>
                <li class="tec"><img src="resource/img/icons/icon-git.svg"></li>

                <li class="tec"><img src="resource/img/icons/icon-html.svg"></li>
                <li class="tec"><img src="resource/img/icons/icon-css.svg"></li>
                <li class="tec"><img src="resource/img/icons/icon-javascript.svg"></li>
                <li class="tec"><img src="resource/img/icons/icon-php.svg"></li>
                <li class="tec"><img src="resource/img/icons/icon-figma.svg"></li>
                <li class="tec"><img src="resource/img/icons/icon-git.svg"></li>

                <li class="tec"><img src="resource/img/icons/icon-html.svg"></li>
                <li class="tec"><img src="resource/img/icons/icon-css.svg"></li>
                <li class="tec"><img src="resource/img/icons/icon-javascript.svg"></li>
                <li class="tec"><img src="resource/img/icons/icon-php.svg"></li>
                <li class="tec"><img src="resource/img/icons/icon-figma.svg"></li>
                <li class="tec"><img src="resource/img/icons/icon-git.svg"></li>
            </ul>
            <button class="btn" onclick="loading()">
                <p>Ver mais</p>
            </button>
        </section>

        <section id="projetos">
            <h2 class="titulo">Projetos em destaque</h2>
            <hr>
            <ul id="lista-projetos">
            </ul>
            <button id="btn-proj" class="btn" onclick="loading()">
                <p>Ver mais</p>
            </button>
        </section>

    </main>

    <!------------------------------------------>

    <footer>
        <div id="footer-content">
            <p>&copy; 2024 Lucas R. - Design, layout e conteúdo textual protegidos por direitos autorais. Este site
                utiliza conteúdo licenciado sob a Licença Creative Commons Attribution-ShareAlike 4.0 International.
                Imagens e ícones retirados do site <span class="link-foot">Freepik</span>, utilizadas com permissão de <span class="link-foot">Storyset</span> e <span class="link-foot">Starline</span>. - Desenvolvido por:
            </p>
            <div>
                <h2><span class="dev-link">Lucas Rasoppi:</span></h2>
                <ul>
                    <li class="footer-item"><a class="rede-footer" target="_blank" href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSGLdfmpTlRJBCrtMtmMVhLcNlPHnlLwkGBDzgGjTVRBghQDjtQmmZJXKzLPCGcqDBbqFPlc">
                        <div>
                            <img src="resource/img/icons/icon-email.svg">
                        </div>
                        <p>lrasoppi11@gmail.com</p>
                        </a>
                    </li>
                    <li class="footer-item"><a class="rede-footer" target="_blank" href="https://www.linkedin.com/in/gothlul/">
                        <div>
                            <img src="resource/img/icons/icon-linkedin.svg">
                        </div>
                        <p>Lucas Rasoppi</p>
                        </a>
                    </li>
                    <li class="footer-item"><a class="rede-footer" target="_blank" href="https://github.com/gothlul/">
                        <div>
                            <img src="resource/img/icons/icon-github.svg">
                        </div>
                        <p>@gothlul</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>

