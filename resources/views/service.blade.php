@extends('layout')
@section('title', 'Pagina donde se enumeran los distintos servicios y ventajas que ofrezco')
@section('content')

        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Servicios</h2>
                            <ol class="breadcrumb">
                                <li>
                                 <?php $inicio = 'https://web-kaz.herokuapp.com/'; ?>
                                    <a href="{{ $inicio }}">
                                        <i class="ion-ios-home"></i>
                                        Inicio
                                    </a>
                                </li>
                                <li class="active">Servicios</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>   
        </section><!--/#Page header-->


        <!-- 
        ================================================== 
            Service Page Section  Start
            ================================================== -->
            <section id="service-page" class="pages service-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="block">
                                <h2 class="subtitle wow fadeInUp animated fondo-h2" data-wow-delay=".3s" data-wow-duration="500ms">Lo que me encanta hacer <i class="fa fa-code" aria-hidden="true"></i></h2><br>
                                <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis porro recusandae non quibusdam iure adipisci.</p>
                                <div class="row service-parts">
                                    <div class="col-md-6">
                                        <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="600ms">
                                            <i class="ion-ios-paper-outline"></i>
                                            <h4>En construcción</h4>
                                            <p>Veritatis eligendi, dignissimos. Porta fermentum mus aute pulvinar earum minus platea massa feugiat rutrum urna facilisi ipsameum.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="800ms">
                                            <i class="ion-ios-pint-outline"></i>
                                            <h4>En construcción</h4>
                                            <p>Veritatis eligendi, dignissimos. Porta fermentum mus aute pulvinar earum minus platea massa feugiat rutrum urna facilisi ipsameum.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1s">
                                            <i class="ion-ios-paper-outline"></i>
                                            <h4>En construcción</h4>
                                            <p>Veritatis eligendi, dignissimos. Porta fermentum mus aute pulvinar earum minus platea massa feugiat rutrum urna facilisi ipsameum.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1.1s">
                                            <i class="ion-ios-paper-outline"></i>
                                            <h4>En construcción</h4>
                                            <p>Veritatis eligendi, dignissimos. Porta fermentum mus aute pulvinar earum minus platea massa feugiat rutrum urna facilisi ipsameum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 sm-12 lg-12">
                        <div class="block wow fadeInRight" data-wow-delay=".8s" data-wow-duration="500ms">
                                <img class="img-responsive" src="images/desarrollo-webkaz.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!--Mi seccion -->

        <div class="container">
        <div class="row">
        <div class="col-md-6">
            <h2 class="subtitle wow fadeInUp animated fondo-h2" data-wow-delay=".3s" data-wow-duration="500ms">Creación de Tiendas online, Blogs, Portafolios, Landing pages empresariales

                </h2><br>
                <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
                 Si estas leyendo esta sección es porque :<br><br> - Opcion (1) estas interesado en darte a conocer por alguna actividad que realices y quieras ser reconocido/a por lo que haces y deseas tener un <strong>blog</strong> donde escribir tus ideas, notas, recetas y lo sepa la gente.<br><br> - Opcion (2) Eres emprendedor y quieres comerte al mundo ofreciendo productos unicos y asi comenzar a tener presencia online que se traducirian en mas ventas y trafico para tu negocio.<br><br> - Opcion (3) Tienes una <strong>empresa</strong> y necesitas una <strong>pagina web</strong> para tener mas contacto y cercania con tus clientes o tener mas control y llevar registro de lo que ingresa y lo que no a la misma.<br><br>- Opcion (4) Eres estudiante universitario y necesitas soporte para entregar el proyecto ya finiquitado en los lapsos estipulados por tus asesores o profesores.<br><br> Cualquiera que sea su opcion esta en el lugar indicado contacte mis servicios de <strong>freelance</strong> para hacer un estudio de la problematica y asi poder brindar la solución que mas se adapte a su necesidad.
             </p>
             </div>

             <div class="col-md-6">
            <h2 class="subtitle wow fadeInUp animated fondo-h2" data-wow-delay=".4s" data-wow-duration="500ms">Optimizacion de tu pagina web, blog, tienda online (SEO + VENTAS)

                </h2><br>
                <p class="subtitle-des wow fadeInUp animated text-indent" data-wow-delay=".6s" data-wow-duration="500ms">
                   Si tienes en mente abrir una <strong>tienda online</strong> o que en google te busquen y te encuentren de una manera mas facil o aparezcas sin buscarte :D, debes tener presente que hoy en dia existe mucha gente que te pueden diseñar y hacer una <strong>pagina web</strong> sin muchos conocimientos del tema, pero no de una manera profesional, Optimizarla en <strong>SEO</strong> ya es otro nivel. Alcanzar un buen posicionamiento en resultados de búsqueda lleva su tiempo y dedicacion.<br><br>
                   Tambien debes tener claro lo que es el <strong>SEO</strong> esto es nada mas y nada menos la forma en como <strong>google</strong> y otros buscadores te integran o(indexan) en su buscador, teniendo google el 98% de todas las busquedas diarias a nivel mundial. de manera que para que google te lea y te indexe en buenas posiciones se debe llevar una metodologia, que no se hace de un dia para otro es un conjunto de pasos y tecnicas bien analizadas que permitiran al <strong>freelance</strong> tratar de posicionar la <strong>pagina web</strong> entre las primeras busquedas dependiendo el nicho de mercado al cual te vas a dirigir, esto hace la diferencia entre una buena y bien trabajada<strong> pagina web</strong> a cualquier cosa que te vendan como bueno por alli con texto html sin mucho sentido.<br><br>Como trabajador <strong>freelance</strong> me dedico a usar distintos metodos para llevar a cabo esta acción, Porque de nada sirve el <strong>sitio web</strong> mas hermoso y pintoresco del mundo, si no estas posicionado en google, ya que no vas a aparecer y esto a la final no valdria de mucho.Trabajando de este modo el futuro dueño de la <strong>pagina web</strong> va a sentirse muy satisfecho ya que obtendria grandes beneficios a favor de su marca o negocio : mas visitas, mas ventas, mas reconocimiento, mas interacción y podras llegar a estar encima de tu competencia dependiendo del posicionamiento que estos tengan.
             </p>
             </div>
         </div>

         <div class="row">

             <div class="col-md-12">
            <h2 class="subtitle wow fadeInUp animated fondo-h2" data-wow-delay=".6s" data-wow-duration="500ms">Enfoque a la usabilidad y rapidez (de carga)

                </h2><br>
                <p class="subtitle-des wow fadeInUp animated text-indent" data-wow-delay=".8s" data-wow-duration="500ms">
                Estamos en el 2017 y las personas en el mundo se conectan mas al internet desde dispositivos moviles que desde computadoras de escritorio, por esta razon y muchas mas veo necesario siempre realizar la <strong>pagina web </strong>con diseño web adaptativo, que no es mas que la construcción de webs adaptables a cualquier tamaño de pantallas, tanto de computadoras de escritorio como de tablets y móviles, con lo que se busca una experiencia en navegación cómoda y atractiva para el usuario final, y ademas personalizada para cada dispositivo.<br><br>

                Estudios como el reciente de www.pagescoring.com (2017) han comprobado que al menos el 50% de los visitantes esperan que una web, cargue en 3 segundos o menos, y si no carga en este tiempo las personas o futuros clientes se van, Y que el 40% de los visitantes abandonan el sitio si toman mas de 4 segundos en cargar, esto no es lo que queremos y por eso trabajo para ello, queremos que los </strong>usuarios y clientes finales</strong> regresen porque les agrade su velocidad y la forma facil de acceder al contenido de una manera bien intuitiva, gracias a el diseño y a la manera en como se va mostrando la información mas importante de todo el <strong>sitio web</strong>, pues de esto trata la usabilidad, por eso como <strong>freelance</strong> pongo especial enfasis en poner en practica todos estos conceptos tan fundamentales antes de hacer el lanzamiento(deploy) de nuestra aplicación o <strong>pagina web.</strong>
             </p>
             </div>
         </div>
     </div>


        <!-- 
        ================================================== 
            Works Section Start
        ================================================== -->
        <section class="works service-page">
            <div class="container">
                <h2 style="margin-top: -20px" class="subtitle wow fadeInUp animated fondo-h2" data-wow-delay=".1s" data-wow-duration="500ms">Algunos de mis proyectos
</h2><br>
                    <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">
                       En esta sección muestro algunos de mis proyectos ya terminados y otros que estan por terminar en este caso una tienda en linea y dos portafolios personales.
                    </p>
                <div class="row">
                    <div class="col-sm-3">
                         <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" >
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item-1.jpg">Demo</a>        
                                        <a target="_blank" href="">Details</a>
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

                    <div class="col-sm-3">
                        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item-2.jpg" class="img-responsive" alt="this is a title" >
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item-2.jpg">Demo</a>        
                                        <a target="_blank" href="">Details</a>
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

                    <div class="col-sm-3">
                        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item-3.jpg" class="img-responsive" alt="" >
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item-3.jpg">Demo</a>        
                                        <a target="_blank" href="">Details</a>
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

                    <div class="col-sm-3">
                        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item-4.jpg" class="img-responsive" alt="" >
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item-4.jpg">Demo</a>        
                                        <a target="_blank" href="">Details</a>
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

                   

                </div>
            </div>
        </section>
        {{-- <!-- 
        ================================================== 
            Clients Section Start
        ================================================== -->
        <section id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">Our Happy Clinets</h2>
                        <p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.</p>
                        <div id="clients-logo" class="owl-carousel">
                            <div>
                                <img src="images/clients/logo-1.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-2.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-3.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-4.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-5.jpg" alt="">
                            </div>
                             <div>
                                <img src="images/clients/logo-1.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-2.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-3.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-4.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 --}}





@stop