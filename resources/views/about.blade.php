@extends('layout')
@section('title', 'Quien soy? Programador de aplicaciones, tiendas online, paginas web.')

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
                            <h2>Sobre mi</h2>
                            <ol class="breadcrumb">
                                <li>
                                 <?php $inicio = 'https://web-kaz.herokuapp.com/'; ?>
                                    <a href="{{ $inicio }}">
                                        <i class="ion-ios-home"></i>
                                        Inicio
                                    </a>
                                </li>
                                <li class="active">Sobre mi</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 
        ================================================== 
            Company Description Section Start
        ================================================== -->
        <section class="company-description">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                        <img src="images/about/sobre-mi-roberto-figuera.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-6">
                        <div class="block">
                            <h2 style="text-align: center;" class="subtitle wow fadeInUp  " data-wow-delay=".7s" data-wow-duration="500ms">Marcando la diferencia en desarrollo de aplicaciones web</h2>
                            <p class="wow fadeInUp text-indent" data-wow-delay=".9s" data-wow-duration="500ms">
                                Para desarrollar una aplicacion web, pagina personal, blog, o tienda en linea se debe tener conocimiento y dominio de uno o mas <strong>lenguajes de programaci&oacute;n</strong> y dependiendo de los requerimientos que va a llevar el desarrollo del proyecto y de el grado de complejidad se deben utilizar unas u otras herramientas.<br><br> Por eso siempre estoy enfocado en aprender distintas tecnologias y lenguajes de programaci&oacute;n para un desarrollo oportuno y confiable, esto con la finalidad de brindar un servicio profesional y que el cliente quede feliz y satisfecho con la inversion hecha.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- 
        ================================================== 
            Company Feature Section Start
        ================================================== -->
        <section class="about-feature clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="block about-feature-1 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                        <h2>
                        En construcci&oacute;n
                        </h2>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
                        </p>
                    </div>
                    <div class="block about-feature-2 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        <h2 class="item_title">
                        En construcci&oacute;n
                        </h2>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
                        </p>
                    </div>
                    <div class="block about-feature-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".7s">
                        <h2 class="item_title">
                        En construcci&oacute;n
                        </h2>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- 
        ================================================== 
            Team Section Start
        ================================================== -->
        <section id="team">
            <div class="container">
                <div class="row">
                    <h2 class="subtitle text-center fondo-h2 wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Conocimientos adquiridos</h2>
                    <div class="col-sm-4">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                            <div class="team-img">
                                <img src="images/team/team-1.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Roberto Figuera</h3>
                            <p class="team_designation">Programador de aplicaciones web<br></p>
                            <p class="social-icons">
                                <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a> 
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                           
                            <h3 class="team_name">Estudios finalizados</h3><br>
                            <p class="team_text">Tecnico superior en informatica. ( UPTJAA-2013 )</p>
                            <p class="team_text">Ingeniero en informatica. ( UPTJAA-2016 )</p> 
                            
                            <h3 class="team_name">Cursos</h3><br>
                            <p class="team_text">Html5,css3 y php 25/horas.</p>
                            <p class="team_text">Dise&ntilde;o web desde cero a avanzado <a target="_blank" href="https://www.udemy.com/diseno-web-desde-cero/"> ( Udemy ) </a> - 45/horas.</p>
                            <p class="team_text">Manejo gnu-linux 20-horas.</p>
                            <p class="team_text">Ofimatica en software libre 20-horas.</p>
                            <p class="team_text">Reparaci&oacute;n y mantenimiento de computadoras 20/horas.</p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="1s">

                            <h3 class="team_name">Dominio y uso de tecnologias</h3>
                            <br>
                            <div class="progress">
                              <div class="progress-bar barras" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;background: yellow;color:black">
                                HTML5 - 75%
                            </div>
                        </div>
                    </div>

                    <div class="row">   
                        <div class="col-md-12">  
                        <div class="margin-top-barras team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="1.2s">
                                                    <div class="progress">

                              <div class="progress-bar barras" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;background: yellow;color:black">
                                CSS3 - 60%
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="row">   
                        <div class="col-md-12">  
                        <div class="margin-top-barras team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="1.3s">
                                                    <div class="progress">

                              <div class="progress-bar barras" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 55%;background: yellow;color:black">
                                PHP - 55%
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="row">   
                        <div class="col-md-12">  
                        <div class="margin-top-barras team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="1.4s">
                                                    <div class="progress">

                              <div class="progress-bar barras" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;background: blue;">
                                WORPRESS - 70%
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                     <div class="row">   
                        <div class="col-md-12">  
                        <div class="margin-top-barras team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="1.5s">
                                                    <div class="progress">

                              <div class="progress-bar barras" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;background: blue;">
                                LARAVEL 5.4 - 50%
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                     <div class="row">   
                        <div class="col-md-12">  
                        <div class="margin-top-barras team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="1.6s">
                                                    <div class="progress">

                              <div class="progress-bar barras" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;background: blue;">
                                JQUERY - 40%
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                     <div class="row">   
                        <div class="col-md-12">  
                        <div class="margin-top-barras team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="1.7s">
                                                    <div class="progress">

                              <div class="progress-bar barras" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;background: red;color:black">
                                GIT & GIT-HUB - 70%
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                     <div class="row">   
                        <div class="col-md-12">  
                        <div class="margin-top-barras team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="1.6s">
                                                    <div class="progress">

                              <div class="progress-bar barras" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 55%;background: red;color:black">
                                BOOTSTRAP - 55%
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="row">   
                        <div class="col-md-12">  
                        <div class="margin-top-barras team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="1.7s">
                                                    <div class="progress">

                              <div class="progress-bar barras" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;background: red;color:black">
                                SQL - 40%
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    {{-- <div class="row">   
                        <div class="col-md-12">  
                        <div class="margin-top-barras team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="2.6s">
                                                    <div class="progress">
                              <div class="progress-bar barras" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                MATERIAL DESIGN - 60%
                            </div>
                            </div>
                        </div>
                        </div>
                    </div> --}}


                </div>


                </div>
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
                        <h2 class="subtitle text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Our Happy Clinets</h2>
                        <p class="subtitle-des text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.</p>
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
        </section> --}}
@stop