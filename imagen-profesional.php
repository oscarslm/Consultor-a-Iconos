<?php include './setup.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo IDIOMA; ?>">
<head>

	<?php 
	$title = "Taller de Imagen Profesional";
	$desc = "";
	$kw = "Consultoría de imagen pública, Imagen Profesional, Iconos, Consultoría Iconos, Imagen pública, Imagen de personal, Imagen física, Cursos de imagen, Clases de imagen personal, Imagen corporativa, Asesoría de imagen personal, Imagen profesional, Asesoría de imagen, Asesores de imagen, Lenguaje corporal, Imagen personal, Imagen profesional";
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
					
					<h2 class="center-align topmargin-sm nobottommargin"><i><?php echo $title ?></i></h2>
					<h4 class="center-align"><i>Desarrollar estrategias y habilidades de comunicación que permitan favorecer la percepción que tiene el participante sobre sí mismo, la que tienen los demás sobre él y la existente sobre la institución mediante su desempeño</i>.</h4>

					<div class="row">
						<div class="col s12 m5 l5 xl5">
							<h4 class="nobottommargin"><i>Imagen Personal</i></h4>
							<p class="notopmargin justify-align">Conocer tu cuerpo, tu estilo y tu personalidad va a ayudar a que te vistas adecuadamente y te sientas más cómodo en cualquier lugar. Recuerda que al iniciar una relación la forma en cómo te ven sí influye en el trato que tengan contigo.</p>
							<h4 class="nobottommargin"><i>Imagen Verbal</i></h4>
							<p class="notopmargin justify-align">La buena utilización de las palabras, de nuestra voz e incluso de las pausas que realizamos son fundamentales para transmitir lo que queremos decir.</p>
							<h4 class="nobottommargin"><i>Imagen No Verbal</i></h4>
							<p class="notopmargin justify-align">Todo nos brinda información, el cuerpo es parte esencial para esto, porque podemos expresar mucho sin necesidad de hablar. Con el lenguaje no verbal logramos crear códigos de autoridad, agradecimiento, atención, cordialidad, desinterés, etc.</p>
							<h4 class="nobottommargin"><i>Imagen Profesional</i></h4>
							<p class="notopmargin justify-align">Determina las formas bajo las cuales se realizan todos los actos de relevancia en la institución, mismos que ayudan a mantener un buen ambiente laboral.</p>
						</div><!--.col s12 m5 l5 xl5-->
						<div class="col s12 m7 l7 xl7">
							<img src="images/profesional-taller.jpg" alt="<?php echo $title ?>" class="responsive-img topmargin-sm">
						</div><!--.col s12 m7 l7 xl7-->
					</div><!--.row-->

					<h2 class="center-align"><i>Asesorías de Imagen Profesional</i></h2>

					<div class="row">
						<div class="col s12 m12 l6 x6">
							<div class="tarjeta" style="background: lightgray;" data-animate="fadeInLeft">
								<h4 class="center-align">Un vestir profesional</h4>
								<p class="center-align"><i>¿Te has preguntado si las personas que trabajan en la misma empresa que tú realmente visten acorde a sus actividades profesionales?</i></p>
								<p class="justify-align">La vestimenta que utilicemos para trabajar va a comunicar mucho a nuestros clientes, compañeros de trabajo, jefes y personas que tenemos a nuestro cargo.</p>
								<p class="center-align nobottommargin"><strong>¡Con este servicio ya no habrá pretextos para vestir acorde al ámbito laboral en el que te desenvuelvas!</strong></p>
							</div><!--.tarjeta-->
						</div><!--.col s12 m12 l6 x6-->
						<div class="col s12 m12 l6 x6">
							<div class="tarjeta" style="background: lightgray;" data-animate="fadeInRight">
								<h4 class="center-align">Ejecutivo eficiente</h4>
								<p class="justify-align">Lo que comunicamos con nuestra ropa es igual de importante que lo que decimos con nuestras palabras, <i>¿nunca has visto a alguien muy bien arreglado en una reunión y cuando habla se te acaba el encanto porque no entendiste nada?</i></p>
								<p class="justify-align nobottommargin">En este servicio aprenderás a vestir y a hablar en forma correcta para que no sólo luzcas profesional, sino que también los demás encuentren en tus palabras la lógica necesaria. <strong>Olvida las muletillas y el tartamudeo, ¡nosotros te ayudamos a resolverlo!</strong></p>
							</div><!--.tarjeta-->
						</div><!--.col s12 m12 l6 x6-->
						<div class="col s12 m12 l6 x6">
							<div class="tarjeta" style="background: lightgray;" data-animate="fadeInLeft">
								<h4 class="center-align">Ejecutivo congruente</h4>
								<p class="justify-align">Tu ropa, tus palabras, tus gestos y tus ademanes deben ser coherentes entre ellos. <i>¡La intención es que logres proyectar correctamente a tus públicos objetivo!</i></p>
								<p class="justify-align nobottommargin"><strong>Hacer una presentación o participar en una reunión debe generar un impacto positivo</strong> a quienes te están viendo y escuchando, porque con ello vas a lograr una mayor comprensión de tu idea y así el objetivo profesional que te has planteado. </p>
							</div><!--.tarjeta-->
						</div><!--.col s12 m12 l6 x6-->
						<div class="col s12 m12 l6 x6">
							<div class="tarjeta" style="background: lightgray;" data-animate="fadeInRight">
								<h4 class="center-align">Ejecutivo ideal</h4>
								<p class="justify-align">Honestidad, confianza y credibilidad, <i>¡eso es lo que hay que generar en un ambiente corporativo!</i> Por esto es que además de proyectar tu imagen profesional eficientemente mediante lo que llevas puesto, tu lenguaje corporal y tu imagen verbal, también debes comunicar tus valores, los de tu equipo de trabajo y los de tu empresa.</p>
								<p class="justify-align nobottommargin"><strong>Crecer debe ser algo que se hace en conjunto y para ello es necesario que tu protocolo esté vinculado con los de la empresa que representas</strong>.</p>
							</div><!--.tarjeta-->
						</div><!--.col s12 m12 l6 x6-->
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

	<?php include './jivosite.php'; ?>
</body>
</html>