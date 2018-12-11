<?php include './setup.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo IDIOMA; ?>">
<head>

	<?php 
	$title = "Personal Shopper";
	$desc = "";
	$kw = "Consultoría de imagen pública, Personal Shopper, Iconos, Consultoría Iconos, Imagen pública, Imagen de personal, Imagen física, Cursos de imagen, Clases de imagen personal, Imagen corporativa, Asesoría de imagen personal, Imagen profesional, Asesoría de imagen, Asesores de imagen, Lenguaje corporal, Imagen personal, Imagen profesional";
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
					
					<div class="col s12 topmargin-sm">
						<h2 class="center-align"><i><?php echo $title ?></i></h2>
					</div>

					<!--.Slider-->
					<div class="owl-carousel owl-theme bottommargin">
						<div class="item"><img src="images/shoppe-banner-servicios.jpg" alt="Slider"></div>
						<div class="item"><img src="images/shoppe2-banner-servicios.jpg" alt="Slider"></div>
						<div class="item"><img src="images/shoppe3-banner-servicios.jpg" alt="Slider"></div>
					</div><!--.owl-carousel owl-theme-->

					<h3 class="center-align nobottommargin"><i>¿Comprar te causa más terror que satisfacción? ¿No sabes qué te queda mejor?</i></h3>
					<h3 class="center-align"><i>¡Nuestro servicio de personal shopper es la opción para ti!</i></h3>
					<p class="justify-align">Aprenderás a comprar sin miedo a que no te quede la ropa , recuerda que más allá de la marca, lo importante es elegir ropa de calidad para que te veas y te sientas mejor, nos encargamos de realizar compras acorde al evento, a tu estilo y a tu personalidad, te acompañaremos y asesoraremos en cada momento.</p>
					<h4 class="center-align"><i>¿No sabes qué regalar? ¿Qué escribir en la tarjeta de felicitación?</i></h4>
					<p class="bottommargin">También ofrecemos el servicio de compra y personificación de regalos, tarjetas de felicitación y agradecimientos.</p>
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

</body>
</html>