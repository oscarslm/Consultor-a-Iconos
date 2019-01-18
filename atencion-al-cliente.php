<?php include './setup.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo IDIOMA; ?>">
<head>

	<?php 
	$title = "Atención al Cliente";
	$desc = "";
	$kw = "Consultoría de imagen pública, Atención al Cliente, Iconos, Consultoría Iconos, Imagen pública, Imagen de personal, Imagen física, Cursos de imagen, Clases de imagen personal, Imagen corporativa, Asesoría de imagen personal, Imagen profesional, Asesoría de imagen, Asesores de imagen, Lenguaje corporal, Imagen personal, Imagen profesional";
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

				<div class="container bottommargin">

					<div class="col s12 topmargin-sm">
						<h2 class="center-align"><i><?php echo $title ?></i></h2>
					</div>

					<!--.Slider-->
					<div class="owl-carousel owl-theme bottommargin-sm">
						<div class="item"><img src="images/atencion-cliente-vestimenta-m.jpg" alt="Slider"></div>
						<div class="item"><img src="images/atencion-cliente-vestimenta.jpg" alt="Slider"></div>
					</div><!--.owl-carousel owl-theme-->

					<h3 class="center-align nobottommargin"><i>¡Somos especialistas en hacerte sentir como te mereces!</i></h3>
					<h4 class="center-align"><i>¿Qué estás esperando para probar nuestros talleres y asesorías?</i></h4>

					<h3 class="nobottommargin"><i>Un buen servicio al cliente</i></h3>

					<p class="justify-align"><strong>¡Todos son parte fundamental de la imagen de una empresa!</strong> Es relevante que las personas conozcan qué es lo que están comunicando con su vestimenta y también se desenvuelvan con el protocolo adecuado.</p>

					<h3 class="nobottommargin"><i>Ejecutivo vendedor, cliente comprador</i></h3>

					<p class="justify-align">Comprender que todo comunica es parte fundamental para todo ejecutivo y trabajador de una empresa; <strong>tu vestimenta, el lenguaje corporal, las palabras que utilizas</strong> y también la forma en que te conduces con tus compañeros, jefes y personas allegadas al sector van a proyectar en beneficio de tu compañía generando una reputación correcta.</p>

					<h3 class="nobottommargin"><i>Un cliente contento y una empresa que hace historia</i></h3>

					<p class="justify-align">La felicidad del cliente no sólo es un beneficio para la imagen y reputación de nuestra empresa, sino la satisfacción del vendedor. <strong>Para lograrlo es necesario que tu cuerpo, tus palabras, tu vestimenta y también el adecuado manejo de crisis estén en congruencia</strong>.</p>
					
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