@extends('layout')
@section('title', 'Desarrollo de aplicaciones web, tiendas online, blog, paginas web, landing pages.')

@section('content')

<!--
==================================================
Slider Section Start
================================================== -->
<section id="hero-area" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="block wow fadeInUp" data-wow-delay=".3s">

                    <!-- Slider -->
                    <section class="cd-intro">
                        <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".8s" >
                            <span>DISEÑO Y PROGRAMACIÓN DE</span><br>
                            <span class="cd-words-wrapper">
                                <b class="is-visible">Tiendas-online | <i class="fa fa-cart-plus" aria-hidden="true"></i></b>
                                <b>Paginas-de-contacto | <i class="fa fa-users" aria-hidden="true"></i></b>
                                <b>Blogs-informativos | <i class="fa fa-rss" aria-hidden="true"></i></b>
                                 <b>Sistemas-admins. | <i class="fa fa-user-plus" aria-hidden="true"></i>
                                </b>
                                <b>Proy.universitarios | <i class="fa fa-graduation-cap" aria-hidden="true"></i></b>
                            </span> 
                        </h1>
                    </section> <!-- cd-intro -->
                    <!-- /.slider -->
                    <h2 class="wow fadeInUp animated" data-wow-delay="1.4s" >
                        Enfocado en dar soluciones web a tu medida.<br>
                        <b>Desarrollo | Web-kaz</b>
                        </h2>
                    <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay="1.8s" href="#works" data-section="#works" ><i class="fa fa-angle-double-down fa-2x" aria-hidden="true"></i></i></a>

                </div>
            </div>
        </div>
    </div><br><br><br><br><br><br>
</section><!--/#main-slider-->
<!--
==================================================
Slider Section Start
================================================== -->
<?php $quien_soy = 'https://web-kaz.herokuapp.com/quien-soy'; ?>


<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <div style="background: #02bdd5; border:1px solid black" class="jumbotron block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms"">
                  <h3 style="color:white; letter-spacing: 2px;font-size: 2em;text-align: center;margin-bottom: 1em;"><img style="margin-left: 10px;" class="avatar" src="images/about/roberto-figuera-developer.png" alt="Roberto figuera programador de paginas web desarrollo web-kaz" width="100%" height="100%">Hola!!! bienvenidos a mi website</h3>
                  <p style="padding: 1em;" class="text-indent">Mi nombre es Roberto Figuera y me encanta programar me considero una persona 100% autodidacta, en mis ratos libres me divierto con juegos online, de alli nacio mi seudónimo Kazama me gustan los retos, ayudar a las personas y vivir aplicando el paradigma Lifelong learning...</p>
              </div>
          </div>
          <div class="col-lg-4 col-md-5">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                    <img class="img-responsive img-thumbnail" src="images/about/about.jpg" alt="Programador de paginas web Roberto Figuera Desarrollo | web-kaz">
                </div>
            </div>
      </div>
  </div>
</section>
 <!--
==================================================
Portfolio Section Start
================================================== -->
<section id="works" class="works">
    <div class="container">
        
        <div class="section-heading">
        <h2 class="wow fadeInDown fondo-h2" data-wow-delay=".4s">SERVICIOS</h2><br>
        <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p class="wow fadeInDown" data-wow-delay=".8s">
                        En esta sección muestro algunos de mis proyectos ya terminados y otros que estan por terminar<br> en este caso una tienda en linea y dos portafolios personales.
                    </p>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/portafolio-web.jpg" class="img-responsive" alt="Portafolio web Roberto figuera desarrollo web-kaz" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/portafolio-web.jpg">Demo</a>
                                <a target="_blank" href="single-portfolio.html">Detalles</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Portafolio personal
                            </a>
                        </h4>
                        <p>
                            Estilo material design
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/portafolio-tienda-online.jpg" class="img-responsive" alt="Tienda online creada por Roberto Figuera desarrollo web-kaz" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/portafolio-tienda-online.jpg">Demo</a>
                                <a target="_blank" href="https://subli-forgames.rhcloud.com/">Detalles</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Tienda online
                            </a>
                        </h4>
                        <p>
                            Plantilla y algunos scripts adaptados a wordpress
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/portafolio-webkaz-roberto-figuera.png" class="img-responsive" alt="pagina web hecha por Roberto Figuera" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/portafolio-webkaz-roberto-figuera.png">Demo</a>
                                <a target="_blank" href="https://web-kaz.herokuapp.com/">Detalles</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Portafolio profesional
                            </a>
                        </h4>
                        <p>
                            Diseño con enfoque al contacto
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/portafolio-web-paginas-web.jpg" class="img-responsive" alt="mi proyecto de portafolio web " >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/portafolio-web-paginas-web.jpg">Demo</a>
                                <a target="_blank" href="single-portfolio.html">Detalles</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Portafolio personal
                            </a>
                        </h4>
                        <p>
                            Estilo material design
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/portafolio-web-tienda-online.jpg" class="img-responsive" alt="Tienda online hecha por Roberto Figuera, pagina web" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/portafolio-web-tienda-online.jpg">Demo</a>
                                <a target="_blank" href="https://subli-forgames.rhcloud.com/">Detalles</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Tienda online
                            </a>
                        </h4>
                        <p>
                            Plantilla y algunos scripts adaptados a wordpress
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/portafolio-web-kaz-roberto-figuera.png" class="img-responsive" alt="Portafolio personal Desarrollo web-kaz pagina web" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/portafolio-web-kaz-roberto-figuera.png">Demo</a>
                                <a target="_blank" href="https://web-kaz.herokuapp.com/">Detalles</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Portafolio profesional
                            </a>
                        </h4>
                        <p>
                            Diseño con enfoque al contacto
                        </p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section> <!-- #works -->
 <!--
==================================================
Portfolio Section Start
================================================== -->
<section id="feature">
    <div class="container">
     <div class="section-heading">
        <h2 class="wow fadeInDown fondo-h2" data-wow-delay=".4s">SERVICIOS</h2><br>
        <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p class="wow fadeInDown" data-wow-delay=".8s">
                        Aca muestro un poco sobre la ventaja de elegirme para que podamos trabajar en algun proyecto<br> personal o alguna idea de negocio siempre pensando en la solucion<br> que mas se adapte a la necesidad del cliente.
                    </p>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-alarm"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Responsabilidad.</h4>
                        <p class="text-indent">Es la manera como voy trabajando cada fase de cada proyecto de <strong class="strong">pagina web</strong>, esto con la finalidad de mantener clientes contentos en la fecha prevista.</p>
                    </div>
                    </div></div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-cart"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Productos.</h4>
                        <p> - Tiendas online
                            <br>- <strong class="strong">Paginas web.</strong>
                            <br>- Blog informativos.
                            <br>- Landing page empresariales.
                            <br>- Portafolios.
                            <br>- Proyectos universitarios.
                        </p> 
                    </div>
                </div>
                </div></div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-android-options"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Optimización web.</h4>
                        <p class="text-indent">De nada sirve tener la web mas bonita si esta oculta y no te encuentran, <strong class="strong">seo</strong> es una serie de pasos y técnicas que sirven para posicionar tu página web de forma natural en google.</p>
                    </div>
                </div></div></div>
            </div>
            <div class="col-md-4 col-lg-6 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-social-html5"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Tecnologias.</h4>
                        <p class="text-indent"> Dependiendo del enfoque del proyecto, se utilizan unas u otras tecnologias : Html5, Css3, Php, Javascript,  JQuery, Wordpress, Laravel 5.3, Bootstrap, Material Design, Sql, Eloquent Orm, Composer, Git, y Git-hub.</p>
                    </div>
                    </div></div>
                </div>
            </div>
            <div class="col-md-4 col-lg-6 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1500ms">
                <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-android-cloud-done"></i>
                        </div>
                    </div>
                    <div class="media-body">
                             <h4 class="media-heading">Usabilidad.</h4>
                        <p class="text-indent">Estudio la forma de crear <strong class="strong">paginas web</strong> para que los usuarios puedan interactuar con ellas de la forma más fácil y eficiente posible, esto ayudara a conseguir una mayor cantidad de clientes potenciales.</p>
                    </div>
                    </div></div>
                </div>
            </div>
           
        </div>
    </div>
</section> <!-- /#feature -->
@stop
