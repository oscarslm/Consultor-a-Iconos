<?php include './setup.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo IDIOMA; ?>">
<head>

	<?php 
	$title = "Taller de Imagen Personal";
	$desc = "";
	$kw = "Consultoría de imagen pública, Imagen Personal, Iconos, Consultoría Iconos, Imagen pública, Imagen de personal, Imagen física, Cursos de imagen, Clases de imagen personal, Imagen corporativa, Asesoría de imagen personal, Imagen profesional, Asesoría de imagen, Asesores de imagen, Lenguaje corporal, Imagen personal, Imagen profesional";
	?>

	<!-- FavIcon
	============================================= -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="<?php echo AUTOR; ?>" />
	<meta name="description" content="<?php echo $desc ?>" />
	<meta name="keywords" content="<?php echo $kw ?>" />

    <!-- FavIcon
    ============================================= -->
    <link rel="icon" type="image/png" href="<?php echo FAVICON; ?>" sizes="64x64" />
    <link rel="apple-touch-icon" href="images/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/touch-icon-ipad-retina.png">

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/materialize.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<link rel="stylesheet" href="css/colors.php?color=<?php echo COLOR_BASE; ?>" type="text/css" />
	<link rel="stylesheet" href="css/elastic.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

	<!-- Document Title
	============================================= -->
	<title><?php echo $title ?> | <?php echo EMPRESA; ?></title>

</head>

<body class="stretched" data-loader-color="#00cdbd">

	<?php include_once("analyticstracking.php") ?>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<?php include './header-servicios.php' ?>
		<!-- #header end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container">

					<div class="row topmargin-sm">
						<div class="col s12">
							<h2 class="center-align"><?php echo $title ?></h2>
						</div>
						<div class="col s12 m6 l6">
							<h4 class="center-align"><i>¿Sabías que tu cuerpo, la vestimenta y los accesorios que usas también comunican algo a los demás?</i></h4>
							<p class="justify-align">En la imagen personal es importante conocer quiénes somos, qué estilo tenemos, cuál es nuestro tipo de cuerpo y rostro y qué colores son los que nos quedan, para así comunicar eficientemente al mundo nuestros objetivos y nuestra personalidad.</p>
							<p class="justify-align">¿Qué quieres comunicar?, ¿estás seguro que realmente proyectas lo que deseas? El 83% de las decisiones que tomamos los seres humanos nacen de la vista, es por ello que es importante ser coherentes en los mensajes que deseas transmitir a tu receptor.</p>
						</div><!--.col s12 m6 l6-->
						<div class="col s12 m6 l6">
							<div class="owl-carousel owl-theme">
								<div class="item"><img src="images/personal-talleres-banner3.jpg" alt="Slider"></div>
								<div class="item"><img src="images/personal3-talleres-banner2.jpg" alt="Slider"></div>
								<div class="item"><img src="images/personal2-talleres-banner3.jpg" alt="Slider"></div>
							</div><!--.owl-carousel owl-theme-->
						</div><!--.col s12 m6 l6-->
					</div><!--.row-->

					<div class="col s12">
						<h2 class="center-align">Asesorías de Imagen Personal</h2>
					</div>

					<!--.Slider-->
					<div class="owl-carousel owl-theme">
						<div class="item"><img src="images/personal-servicios.jpg" alt="Slider"></div>
						<div class="item"><img src="images/personal2-servicios.jpg" alt="Slider"></div>
						<div class="item"><img src="images/personal3-servicios.jpg" alt="Slider"></div>
					</div><!--.owl-carousel owl-theme-->

					<div class="col s12">
						<h2 class="center-align topmargin">Mujeres</h2>
					</div>

					<div class="row">
						<div class="col s12 m12 l6 xl4">
							<div class="tarjeta rosa1" data-animate="fadeInLeft">
								<h4 class="center-align">Imagen express</h4>
								<p class="center-align">Se busca conocer tus intereses personales o profesionales para que descubras lo que estás comunicando mediante tu cuerpo y vestimenta.</p>
								<p class="justify-align">Te explicaremos cuál es tu tipo de cuerpo y rostro, aprenderás a vestirte acorde a él para generar el balance necesario que te permita sentirte y verte hermosa.</p>
								<p class="center-align nobottommargin"><strong>Tiene una duración de 2 horas</strong>.</p>
							</div><!--.tarjeta-->
						</div><!--.col s12 m12 l6 xl4-->
						<div class="col s12 m12 l6 xl4">
							<div class="tarjeta gris" data-animate="fadeInDown">
								<h4 class="center-align">Mujer moderna</h4>
								<p class="center-align">Se realizará un test con la finalidad de conocer tus gustos en vestimenta y la actividad que desarrollas.</p>
								<p class="justify-align">Realizaremos una precompra de una hora en la que podrás hacer diferentes cambios de ropa y observar qué es lo que mejor te queda acorde a tu tipo de cuerpo y rostro.</p>
								<p class="center-align nobottommargin"><strong>Tiene una duración de 3 horas y media</strong>.</p>	
							</div><!--.tarjeta-->
						</div><!--.col s12 m12 l6 xl4-->
						<div class="col s12 m12 l6 xl4">
							<div class="tarjeta rosa2" data-animate="fadeInRight">
								<h4 class="center-align">Mujer ejecutiva</h4>
								<p class="center-align"><i>¿Estás comunicando eficientemente tus objetivos de acuerdo a tu estilo y personalidad?</i></p>
								<p class="justify-align">Conocerás los códigos de autoridad necesarios para tu profesión.</p>
								<p class="center-align nobottommargin"><strong>Tiene una duración de 4 horas y media</strong>.</p>		
							</div><!--.tarjeta-->
						</div><!--.col s12 m12 l6 xl4-->
						<div class="col s12 m12 l6 xl4">
							<div class="tarjeta rosa2" data-animate="fadeInLeft">
								<h4 class="center-align">¡Me caso!</h4>
								<p class="center-align"><i>¿Qué vestidos son los ideales para ti de acuerdo a tu personalidad y a tu cuerpo?</i></p>
								<p class="justify-align">Te enseñaremos cuál es el color del vestido y maquillaje que mejor le quedarán a tu piel en este día.</p>
								<p class="center-align nobottommargin"><strong>Tiene una duración de 7 horas</strong>.</p>
							</div><!--.tarjeta-->
						</div><!--.col s12 m12 l6 xl4-->
						<div class="col s12 m12 l6 xl4">
							<div class="tarjeta gris" data-animate="fadeInDown">
								<h4 class="center-align">Novia y 3 madrinas</h4>
								<p class="center-align"><i>¿Qué te queda y qué les queda a tus madrinas? ... ¡Deben lucir magníficas!</i></p>
								<p class="justify-align">Platicaremos con la novia para saber cuál es el estilo de su boda, les recomendaremos maquillaje y vestido, haciéndoles saber cuál es el estilo que mejor les queda.</p>
								<p class="center-align nobottommargin"><strong>Tiene una duración de 10 horas</strong>.</p>
							</div><!--.tarjeta-->
						</div><!--.col s12 m12 l6 xl4-->
						<div class="col s12 m12 l6 xl4">
							<div class="tarjeta rosa1" data-animate="fadeInRight">
								<h4 class="center-align">Mujer sociable</h4>
								<p class="center-align"><i>¿Cómo te gusta vestir y qué comunicas?</i></p>
								<p class="justify-align">Te brindaremos información para comunicarte eficientemente con tus amistades en reuniones y se te darán consejos de protocolo para eventos sociales.</p>
								<p class="center-align nobottommargin"><strong>Tiene una duración de 7 horas</strong>.</p>
							</div><!--.tarjeta-->
						</div><!--.col s12 m12 l6 xl4-->
						<div class="col s12 m12 l6 xl4">
							<div class="tarjeta rosa2" data-animate="fadeInLeft">
								<h4 class="center-align">Mujer Madura (40+)</h4>
								<p class="center-align"><i>¿Cuáles son los tonos que hacen lucir tu piel más joven?</i></p>
								<p class="justify-align">Te brindaremos consejos de maquillaje y vestimenta, podrás elegir entre una hora de personal shopper o de análisis de clóset.</p>
								<p class="center-align nobottommargin"><strong>Tiene una duración de 5 horas y media.</strong></p>
							</div><!--.tarjeta-->
						</div><!--.col s12 m12 l6 xl4-->
						<div class="col s12 m12 l6 xl4">
							<div class="tarjeta gris" data-animate="fadeInUp">
								<h4 class="center-align">Personal Shopper</h4>
								<p class="center-align"><i>¿Tienes un evento y no sabes qué ponerte?</i></p>
								<p class="justify-align">Platicaremos sobre el evento y después te acompañaremos una hora de compras para que puedas escoger la vestimenta ideal.</p>
								<p class="center-align nobottommargin"><strong>Tiene una duración de 1 hora y media</strong>.</p>
							</div><!--.tarjeta-->
						</div><!--.col s12 m12 l6 xl4-->
						<div class="col s12 m12 l6 xl4">
							<div class="tarjeta rosa2" data-animate="fadeInRight">
								<h4 class="center-align">Actualización de clóset</h4>
								<p class="center-align"><i>¿Ya no te gusta nada de lo que te pones?</i></p>
								<p class="justify-align">Dos horas de análisis de clóset y dos horas de personal shopper serán las que te ayuden a renovar tu vestimenta completamente y a lucir increíble.</p>
								<p class="center-align nobottommargin"><strong>Tiene una duración de 4 horas</strong>.</p>
							</div><!--.tarjeta-->
						</div><!--.col s12 m12 l6 xl4-->
					</div><!--.row-->

					<div class="col s12 topmargin">
						<h2 class="center-align">Hombres</h2>
					</div>

					<div class="row">
						<div class="col s12 m12 l6 xl4">
							<div class="tarjeta azul1" data-animate="fadeInLeft">
								<h4 class="center-align">Imagen express</h4>
								<p class="center-align"><i>¡No se trata de cambiar quien eres!</i></p>
								<p class="justify-align">De hecho, lo primero que hacemos es conocer tus gustos en vestimenta, la actividad que desarrollas, tu edad y lo que quieres comunicar.</p>
								<p class="center-align nobottommargin"><strong>Tiene una duración de 2 horas</strong>.</p>
							</div><!--.tarjeta azul1-->
						</div><!--.col s12 m12 l6 xl4-->
						<div class="col s12 m12 l6 xl4">
							<div class="tarjeta azul2" data-animate="fadeInDown">
								<h4 class="center-align">Hombre actual</h4>
								<p class="center-align"><i>¿Cuáles son tus intereses profesionales?</i></p>
								<p class="justify-align">Aprenderás cuál es tu tipo de cuerpo y rostro para así vestirlo de forma adecuada y generar el balance necesario que te permita sentirte y verte aún mejor.</p>
								<p class="center-align nobottommargin"><strong>Tiene una duración de 3 horas y media</strong>.</p>
							</div><!--.tarjeta azul2-->
						</div><!--.col s12 m12 l6 xl4-->
						<div class="col s12 m12 l6 xl4">
							<div class="tarjeta azul3" data-animate="fadeInRight">
								<h4 class="center-align">Hombre ejecutivo</h4>
								<p class="center-align"><i>¿Estás comunicando eficientemente tus objetivos de acuerdo a tu estilo y personalidad?</i></p>
								<p class="justify-align">Conocerás los códigos de autoridad necesarios para tu profesión.</p>
								<p class="center-align nobottommargin"><strong>Tiene una duración de 4 horas y media</strong>.</p>
							</div><!--.tarjeta azul3-->
						</div><!--.col s12 m12 l6 xl4-->
						<div class="col s12 m12 l6 xl4">
							<div class="tarjeta azul3" data-animate="fadeInLeft">
								<h4 class="center-align">¡Adiós a la soltería!</h4>
								<p class="center-align"><i>Debes lucir como lo que eres ... ¡El hombre más importante de la noche!</i></p>
								<p class="justify-align">Nos contarás un poco sobre el lugar, la fecha y la hora del evento y descubriremos cuál es tu tipo de cuerpo para conocer qué outfit te quedará mejor.</p>
								<p class="center-align nobottommargin"><strong>Tiene una duración de 7 horas</strong>.</p>
							</div><!--.tarjeta azul3-->
						</div><!--.col s12 m12 l6 xl4-->
						<div class="col s12 m12 l6 xl4">
							<div class="tarjeta azul2" data-animate="fadeInUp">
								<h4 class="center-align">Novio y 3 padrinos</h4>
								<p class="center-align"><i>¿Fuiste solo a tu fiesta de soltero? ¡Obviamente no!</i></p>
								<p class="justify-align">Primero platicaremos con el novio para conocer lo que tiene en mente para su boda y así poder trabajar con sus padrinos, a los cuales se les recomendará qué usar en ese día.</p>
								<p class="center-align nobottommargin"><strong>Tiene una duración de 10 horas</strong>.</p>
							</div><!--.tarjeta azul2-->
						</div><!--.col s12 m12 l6 xl4-->
						<div class="col s12 m12 l6 xl4">
							<div class="tarjeta azul1" data-animate="fadeInRight">
								<h4 class="center-align">Hombre social</h4>
								<p class="center-align"><i>¿Te gusta lo que vistes?</i></p>
								<p class="justify-align">Conocerás lo que comunicas y aprenderás a generar balance con tu tipo de cuerpo y rostro mediante tu vestimenta. ¡Lucir varonil y con estilo es importante!</p>
								<p class="center-align nobottommargin"><strong>Tiene una duración de 6 horas</strong>.</p>	
							</div><!--.tarjeta azul1-->
						</div><!--.col s12 m12 l6 xl4-->
						<div class="col s12 m12 l6 xl4">
							<div class="tarjeta azul1" data-animate="fadeInLeft">
								<h4 class="center-align">Hombre maduro (40+)</h4>
								<p class="center-align"><i>¡No hay momento para dejar de verse bien!</i></p>
								<p class="justify-align">Conocerás cuál es tu tipo de cuerpo y rostro y aprenderás a vestirlo sin que dejes tu masculinidad, tu estilo y tu personalidad a un lado.</p>
								<p class="center-align nobottommargin"><strong>Tiene una duración de 5 horas y media</strong>.</p>
							</div><!--.tarjeta azul1-->
						</div><!--.col s12 m12 l6 xl4-->
						<div class="col s12 m12 l6 xl4">
							<div class="tarjeta azul2" data-animate="fadeInUp">
								<h4 class="center-align">¡De fiesta!</h4>
								<p class="center-align"><i>¿Tienes un evento importante y no sabes qué ponerte? ¡No te preocupes!</i></p>
								<p class="justify-align">Hablaremos de las características del evento y te acompañaremos una hora de compras para que puedas escoger el outfit perfecto.</p>
								<p class="center-align nobottommargin"><strong>Tiene una duración de 1 hora y media</strong>.</p>
							</div><!--.tarjeta azul2-->
						</div><!--.col s12 m12 l6 xl4-->
						<div class="col s12 m12 l6 xl4">
							<div class="tarjeta azul3" data-animate="fadeInRight">
								<h4 class="center-align">Actualización de clóset</h4>
								<p class="center-align"><i>¿Cansado de tu outfit?</i></p>
								<p class="justify-align">Haremos combinaciones que generen balance con tu cuerpo, compraremos ropa que te permita renovar tu vestimenta completamente y empieces a comunicar lo que necesitas.</p>
								<p class="center-align nobottommargin"><strong>Tiene una duración de 4 horas</strong>.</p>
							</div><!--.tarjeta azul3-->
						</div><!--.col s12 m12 l6 xl4-->
					</div><!--.row-->

				</div><!--.container-->

			</div><!--.content-wrap-->

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<?php include './footer.php' ?>
		<!-- #footer end -->            

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up waves-effect waves-light btn-floating"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/jquery.elastic.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

	<script type="text/javascript">
		$('.owl-carousel').owlCarousel({
			margin:10,
			loop:true,
			autoWidth:false,
			items:2,
			autoplay:true,
			autoplayTimeout:5000,
			autoplayHoverPause:false,
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
					nav:true
				},
				600:{
					items:1,
					nav:false
				},
				1000:{
					items:1,
					nav:true,
					loop:false
				}
			}
		})
	</script>

	<?php include './jivosite.php'; ?>
</body>
</html>