@extends('layout')
@section('title', 'Aca va el titulo de esta sección')

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
                                <b>Proyectos-universitarios | <i class="fa fa-graduation-cap" aria-hidden="true"></i></b>
                            </span> 
                        </h1>
                    </section> <!-- cd-intro -->
                    <!-- /.slider -->
                    <h2 class="wow fadeInUp animated" data-wow-delay="1.4s" >
                        Enfocado en dar soluciones web a tu medida<br> adaptando tu necesidad a resultados positivos.                     </h2>
                    <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay="1.8s" href="#works" data-section="#works" ><i class="fa fa-angle-double-down fa-2x" aria-hidden="true"></i></i></a>

                </div>
            </div>
        </div>
    </div>
</section><!--/#main-slider-->
<!--
==================================================
Slider Section Start
================================================== -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2>
                        SOBRE MI
                    </h2>
                    <p>
                        Mi nombre es Roberto Figuera me encanta programar  <i class="fa fa-heart-o" aria-hidden="true"></i> , Me considero una persona 100% autodidacta, en mis ratos libres me divierto con juegos online, me gustan los retos, ayudar a las personas y vivir aplicando este paradigma : Lifelong learning...</p>
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, adipisci voluptatum repudiandae, natus impedit repellat aut officia illum at assumenda iusto reiciendis placeat. Temporibus, vero.
                    </p>
                </div>
                
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                    <img src="images/about/about.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#about -->

 <!--
==================================================
Portfolio Section Start
================================================== -->
<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">ULTIMOS PROYECTOS</h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere <br> tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.
            </p>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-1.jpg">Demo</a>
                                <a target="_blank" href="single-portfolio.html">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Dew Drop
                            </a>
                        </h4>
                        <p>
                            Redesigne UI Concept
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/item-2.jpg" class="img-responsive" alt="this is a title" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-2.jpg">Demo</a>
                                <a target="_blank" href="single-portfolio.html">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Bottle Mockup
                            </a>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit.
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/item-3.jpg" class="img-responsive" alt="" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-3.jpg">Demo</a>
                                <a target="_blank" href="single-portfolio.html">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Table Design
                            </a>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet.
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/item-4.jpg" class="img-responsive" alt="" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-4.jpg">Demo</a>
                                <a target="_blank" href="single-portfolio.html">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Make Up elements
                            </a>
                        </h4>
                        <p>
                            Lorem ipsum dolor.
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/item-5.jpg" class="img-responsive" alt="" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-5.jpg">Demo</a>
                                <a target="_blank" href="single-portfolio.html">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Shoping Bag Concept
                            </a>
                        </h4>
                        <p>
                            Lorem ipsum dolor.
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/item-6.jpg" class="img-responsive" alt="" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-6.jpg">Demo</a>
                                <a target="_blank" href="single-portfolio.html">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Caramel Bottle
                            </a>
                        </h4>
                        <p>
                            Lorem ipsum dolor.
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
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">SERVICIOS</h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,<br> quasi dolores numquam dolor vero ex, tempora commodi repellendus quod laborum.
            </p>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-alarm"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Responsabilidad.</h4>
                        <p class="text-indent">Es la manera como voy trabajando cada fase de cada proyecto de <strong class="strong">pagina web</strong>, esto con la finalidad de mantener clientes contentos en la fecha prevista.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
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
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-android-options"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Optimización web.</h4>
                        <p class="text-indent">De nada sirve tener la web mas bonita si esta oculta y no te encuentran, <strong class="strong">seo</strong> es una serie de pasos y técnicas que sirven para posicionar tu página web de forma natural en google.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-6 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-social-html5"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Tecnologias.</h4>
                        <p class="text-indent"> Dependiendo del enfoque del proyecto, se utilizan unas u otras tecnologias : Html5, Css3, Php, Javascript,  JQuery, Wordpress, Laravel 5.3, Bootstrap, Material Design, Sql, Eloquent Orm, Composer, Git, y Git-hub.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-6 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1500ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-android-cloud-done"></i>
                        </div>
                    </div>
                    <div class="media-body">
                             <h4 class="media-heading">Usabilidad.</h4>
                        <p class="text-indent">Estudio la forma de crear <strong class="strong">paginas web</strong> para que los usuarios puedan interactuar con ellas de la forma más fácil y eficiente posible, esto ayudara a conseguir una mayor cantidad de clientes potenciales.</p>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section> <!-- /#feature -->
@stop

