<?php
include_once ('Templates/defaults/head.php');
include_once ('Templates/defaults/menu.php');
/*include_once ('public/CSS');*/
?>
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manish Mahadew</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>-->
<body>
    <section id="about-me">
        <!--<nav>
            <div class="personal_logo">Manish Mahadew</div>
            <ul class="nav_link--list">
                <li>
                 <a href="index.html" class="
                 nav_link--anchor
                 link_hover-effect
                 link_hover-effect--black
                 ">Home</a>
                </li>  
                 <li>
                    <a href="mijn motivatie.html" class="
                    nav_link--anchor
                    link_hover-effect
                    link_hover-effect--black
                    ">Mijn motivatie</a>
                </li>
                <li>
                    <a href="mijn eigenschappen.html" class="
                    nav_link--anchor
                    link_hover-effect
                    link_hover-effect--black
                    ">Mijn eigenschappen</a>
                </li>
                <li>
                  <a href="mijn beroepsprofiel.html" class="
                  nav_link--anchor
                  link_hover-effect
                  link_hover-effect--black
                  ">Mijn beroepsprofiel</a>
              </li>
                <li>
                    <a href="contact.php" class="
                    nav_link--anchor
                    nav_link--anchor-primary
                    ">Contact</a>
                </li>
            </ul>
        </nav>-->
        <div class="flex flex-1">
            <div class="about-me__info row">
              <div class="about-me__info--container">
                <figure class="about-me__picture--mask">
                  <img src="public/Images/Projecten.jpg" class="about-me__picture" alt="Picture of Me!">
                </figure>
                <!-- <h2>Contact mij</h2>
                <h3>Mijn email: manshimah@gmail.com</h3> -->
                <div class="row align-items-center">
                    <div class="col-12">
                      <h2 class= "Tekst">Projecten van mij</h2>
                      <!-- <img src="Images/Mijn projecten.jpg" alt="foto van een puzzel als project" style="width:550px;height:auto;" class= "img-fluid center mx-auto d-block" id="Image4"> -->
                    </div>
                    <div class="col-12">
                        <h3 class= "Tekst">Dit is een rekenmachine</h3>
                        <div>
                            <input id="a" type="text"/>
                            <input id="b" type="text"/>
                            <input type="button" onclick="sum()" value="sum"/>
                            <input type="button" onclick="substract()" value="subtract"/>
                            <input type="button" onclick="mult()" value="multiply"/>
                            <input type="button" onclick="div()" value="divide"/>
                        </div>
                        <hr size="30" noshade>
                        <h3 class= "Tekst">Dit is een spelletje</h3> 
                        <div class="col-12">
                          <section>
                            <h1 class="game--title">Tic Tac Toe</h1>
                            <div class="game--container">
                                <div data-cell-index="0" class="cell"></div>
                                <div data-cell-index="1" class="cell"></div>
                                <div data-cell-index="2" class="cell"></div>
                                <div data-cell-index="3" class="cell"></div>
                                <div data-cell-index="4" class="cell"></div>
                                <div data-cell-index="5" class="cell"></div>
                                <div data-cell-index="6" class="cell"></div>
                                <div data-cell-index="7" class="cell"></div>
                                <div data-cell-index="8" class="cell"></div>
                            </div>
                            <h2 class="game--status"></h2>
                            <button class="game--restart">Restart Game</button>
                        </section>
                    
                        <!--<script src="script.js"></script> -->
                        </div>
                    </div>
                 </div>
                <div class="about-me__links">
                  <a href="mijn motivatie.html" class="about-me__link">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                  <a href="" class="about-me__link">
                    <i class="fab fa-github"></i>
                  </a>
                  <a href="" class="about-me__link">
                    <i class="far fa-envelope"></i>
                  </a>
                  <a href="./assets/Example Resume.pdf" target="_blank" class="about-me__link">
                    <i class="fas fa-file-pdf"></i>
                  </a>
                </div>
              </div>
              <figure class="about-me__img--container">
                <img src="./assets/undraw_websites.svg" class="about-me__img" alt="">
              </figure>
            </div>
          </div>
    </section>
    <section id="languages">
        <div class="container">
          <div class="row">
            <h1 class="section__title">Dit zijn de talen <span class="text--purple">die ik beheers.</span></h1>
            <div class="language__list">
              <div class="language">
                <figure class="language__img--wrapper">
                  <img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/HTML5_Badge.svg/240px-HTML5_Badge.svg.png"
                    alt="Html Logo" class="language__img" />
                </figure>
                <span class="language__name">HTML</span>
              </div>
              <div class="language">
                <figure class="language__img--wrapper">
                  <img src="https://cdn.iconscout.com/icon/free/png-256/css-131-722685.png" alt="CSS Logo"
                    class="language__img" />
                </figure>
                <span class="language__name">CSS</span>
              </div>
              <div class="language">
                <figure class="language__img--wrapper">
                  <img src="https://cdn.iconscout.com/icon/free/png-256/javascript-1-225993.png" alt="JavaScript Logo"
                    class="language__img" />
                </figure>
                <span class="language__name">JavaScript</span>
              </div>
              <!-- <div class="language">
                <figure class="language__img--wrapper">
                  <img src="https://cdn.iconscout.com/icon/free/png-256/typescript-3521774-2945272.png"
                    alt="TypeScript Logo" class="language__img" />
                </figure>
                <span class="language__name">TypeScript</span>
              </div>
              <div class="language">
                <figure class="language__img--wrapper">
                  <img src="https://cdn.iconscout.com/icon/free/png-256/vue-282497.png" alt="Vue Logo"
                    class="language__img" />
                </figure>
                <span class="language__name">Vue</span>
              </div>
              <div class="language">
                <figure class="language__img--wrapper">
                  <img src="https://cdn.iconscout.com/icon/free/png-256/nuxt-dot-js-3628959-3030184.png" alt="Nuxt Logo"
                    class="language__img" />
                </figure>
                <span class="language__name">Nuxt</span>
              </div>
              <div class="language">
                <figure class="language__img--wrapper">
                  <img src="https://cdn.iconscout.com/icon/free/png-256/react-3-1175109.png" alt="React Logo"
                    class="language__img" />
                </figure>
                <span class="language__name">React</span>
              </div>
              <div class="language">
                <figure class="language__img--wrapper">
                  <img src="https://mobx.js.org/img/mobx.png" alt="MobX Logo" class="language__img" />
                </figure>
                <span class="language__name">MobX</span>
              </div> -->
            </div>
          </div>
        </div>
      </section>
      <section id="projects">
        <div class="container">
          <div class="row">
            <h1 class="section__title">Hier zijn een paar <span class="text--purple">projecten</span></h1>
            <ul class="project__list">
              <li class="project">
                <div class="project__wrapper">
                  <img src="public/Images/Projecten.jpg" class="project__img" alt="Car subscription project">
                  <div class="project__description">
                    <h3 class="project__description--title">Car sales project</h3>
                    <h4 class="project__description--sub-title">
                      Html, CSS, JavaScript, Vue, Vuex
                    </h4>
                    <p class="project__description--para">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam leo, scelerisque sed odio eget,
                      luctus faucibus augue. Fusce volutpat iaculis dapibus. Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit. Maecenas id eleifend libero. In hac habitasse platea dictumst.
                    </p>
                    <div class="project__description--links">
                      <a href="public/Templates/mijn projecten.php" class="project__description--link">Mijn projecten</a>
                      <i class="fas fa-link"></i>
                      <a href="https://www.github.com/yourlink" target="_blank" class="project__description--link">
                        <i class="fab fa-github"></i>
                      </a>
                      <a href="https://www.yourwebsite.com" class="project__description--link">
                        <i class="fas fa-link"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="project">
                <div class="project__wrapper">
                  <img src="./assets/loopit.png" class="project__img" alt="Car subscription project">
                  <div class="project__description">
                    <h3 class="project__description--title">Car sales project</h3>
                    <h4 class="project__description--sub-title">
                      Html, CSS, JavaScript, Vue, Vuex
                    </h4>
                    <p class="project__description--para">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam leo, scelerisque sed odio eget,
                      luctus faucibus augue. Fusce volutpat iaculis dapibus. Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit. Maecenas id eleifend libero. In hac habitasse platea dictumst.
                    </p>
                    <div class="project__description--links">
                      <a href="https://www.github.com/yourlink" target="_blank" class="project__description--link">
                        <i class="fab fa-github"></i>
                      </a>
                      <a href="https://www.yourwebsite.com" class="project__description--link">
                        <i class="fas fa-link"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="project">
                <div class="project__wrapper">
                  <img src="./assets/loopit.png" class="project__img" alt="Car subscription project">
                  <div class="project__description">
                    <h3 class="project__description--title">Dashboard</h3>
                    <h4 class="project__description--sub-title">
                      Html, CSS, JavaScript, Vue, Vuex
                    </h4>
                    <p class="project__description--para">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam leo, scelerisque sed odio eget,
                      luctus faucibus augue. Fusce volutpat iaculis dapibus. Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit. Maecenas id eleifend libero. In hac habitasse platea dictumst.
                    </p>
                    <div class="project__description--links">
                      <a href="https://www.github.com/yourlink" target="_blank" class="project__description--link">
                        <i class="fab fa-github"></i>
                      </a>
                      <a href="https://www.yourwebsite.com" class="project__description--link">
                        <i class="fas fa-link"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!--<footer>
        <div class="row footer__row">
          <a href="#" class="footer__anchor">
            <figure class="footer__logo">
              <img src="./assets/logo.svg" class="footer__logo--img" alt="">
            </figure>
            <span class="footer__logo--popper">
              Top
              <i class="fas fa-arrow-up"></i>
            </span>
          </a>
          <div class="footer__social--list">
            <a href="https://google.com" target="_blank" class="
              footer__social--link
              link__hover-effect
              link__hover-effect--white
            " target="_blank">GitHub</a>
            <a href="https://google.com" target="_blank" class="
              footer__social--link
              link__hover-effect
              link__hover-effect--white
            " target="_blank">LinkedIn</a>
            <a href="mailto:email@email.com" target="_blank" class="
              footer__social--link
              link__hover-effect
              link__hover-effect--white
            " target="_blank">Email</a>
            <a href="./assets/Example Resume.pdf" target="_blank" class="
              footer__social--link
              link__hover-effect
              link__hover-effect--white
            " target="_blank">Resume</a>
          </div>
          <div class="footer__copyright">Copyright © 2021 Manish Mahadew</div>
        </div>
      </footer>-->
      <script src="public/Javascript/javascript.js"></script>
</body>
</html>