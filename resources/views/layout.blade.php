<!DOCTYPE html>
<html class="no-js">
<head>
<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>@yield('title', 'Diseño de paginas web para tu negocio, empresa u oficina.')</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" type="image/png" href="images/favicon.png">
<meta name="description" content="Freelance, Diseño y programación de paginas web, tiendas online, sitios web profesionales para ti, tu negocio, o empresa freelance Roberto Figuera Venezuela">
<meta name="keywords" content="">
<meta name="author" content="http://roberto-figuera.16mb.com/">
<meta name="owner" content="Roberto Jose Figuera Espinoza">
<meta name="robots" content="index, follow">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<!-- Mobile Specific Metas
================================================== -->
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet"><!-- Template CSS Files
================================================== -->
<!-- Twitter Bootstrs CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Ionicons Fonts Css -->
<link rel="stylesheet" href="css/ionicons.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- animate css -->
<link rel="stylesheet" href="css/animate.css">
<!-- Hero area slider css-->
<link rel="stylesheet" href="css/slider.css">
<!-- owl craousel css -->
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<!-- template main css file -->
<link rel="stylesheet" href="css/main.css">
<!-- responsive css -->
<link rel="stylesheet" href="css/responsive.css">

<!-- Template Javascript Files
================================================== -->
<!-- modernizr js -->
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<!-- jquery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- owl carouserl js -->
<script src="js/owl.carousel.min.js"></script>
<!-- bootstrap js -->

<script src="js/bootstrap.min.js"></script>
<!-- wow js -->
<script src="js/wow.min.js"></script>
<!-- slider js -->
<script src="js/slider.js"></script>
<script src="js/jquery.fancybox.js"></script>
<!-- template main js -->
<script src="js/main.js"></script>
</head>
<body>
<!--
==================================================
Header Section Start
================================================== -->
<header id="top-bar" class="navbar-fixed-top animated-header">
<div class="container">
	<div class="navbar-header">
		<!-- responsive nav button -->
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<!-- /responsive nav button -->

		<!-- logo -->
		<div class="navbar-brand ocultar">
			<?php $inicio = 'https://web-kaz.herokuapp.com/'; ?>
			<a href="{{ $inicio }}" >
				<img style="margin-top:-30px;height: 85px" src="images/logo-pagina-web-webkaz.jpg" alt="Logo de la pagina web, Desarrollo | web-kaz">
			</a>
		</div>
		<!-- /logo -->
	</div>
	<!-- main menu -->
	<nav class="collapse navbar-collapse navbar-right" role="navigation">
		<div class="main-menu">
			<ul class="nav navbar-nav navbar-right">
                <?php $quiensoy = 'https://web-kaz.herokuapp.com/quien-soy'; ?>
                <?php $servicios = 'https://web-kaz.herokuapp.com/servicios'; ?>
                <?php $contacto = 'https://web-kaz.herokuapp.com/contacto'; ?>
				<li><a href="{{ $inicio }}" >Inicio</a></li>
				<li><a href="{{ $servicios }}">Servicios</a></li>
				<li><a href="{{ $quiensoy}}">Quien-soy</a></li>
				<li><a href="{{ $contacto }}">Contacto</a></li>
			</ul>
		</div>
	</nav>
	<!-- /main nav -->
</div>
</header>




@yield('content')
    <!-- 
    ================================================== 
        Call To Action Section Start
    ================================================== -->
    <section id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2 class="title wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">INTERESADO/A EN QUE TRABAJEMOS JUNTOS?</h1>
                        <p class="wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">
                        	Si tienes alguna pregunta, propuesta, duda o sugerencia no dudes en escribirme.<br> Te respondere a la brevedad posible.
                        </p>
                        <a href="{{ $contacto }}" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".8s" data-wow-duration="500ms">Contacta conmigo</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
<!--
==================================================
Footer Section Start
================================================== -->
<footer id="footer">
	<div class="container">
		<div class="col-md-8">
			<p class="copyright"><i class="fa fa-copyright" aria-hidden="true"></i>
 Copyright <span>2017 </span> | developed by <a href="https://www.facebook.com/RobertoDevel">Roberto Figuera</a></p>
		</div>
		<div class="col-md-4">
			<!-- Social Media -->
			<ul class="social">
				<li>
					<a href="https://www.facebook.com/RobertoDevel" class="Facebook">
						<i class="ion-social-facebook"></i>
					</a>
				</li>
				<li>
					<a href="http://wwww.twitter.com/robertoDevel" class="Twitter">
						<i class="ion-social-twitter"></i>
					</a>
				</li>
				<li>
					<a href="#" class="Linkedin">
						<i class="ion-social-linkedin"></i>
					</a>
				</li>
				<li>
					<a href="#" class="Google Plus">
						<i class="ion-social-googleplus"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
</footer> <!-- /#footer -->
</body>
</html>