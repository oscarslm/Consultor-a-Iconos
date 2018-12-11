<?php include './setup.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo IDIOMA; ?>">
<head>

	<?php 
	$title = "Taller de Imagen Verbal y no Verbal";
	$desc = "";
	$kw = "Consultoría de imagen pública, Imagen Verbal y no Verbal, Iconos, Consultoría Iconos, Imagen pública, Imagen de personal, Imagen física, Cursos de imagen, Clases de imagen personal, Imagen corporativa, Asesoría de imagen personal, Imagen profesional, Asesoría de imagen, Asesores de imagen, Lenguaje corporal, Imagen personal, Imagen profesional";
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
					<h4 class="center-align bottommargin-sm"><i>¡Él sí me convence!, ¡él es buenísimo para hablar!, ¡a ella le entiendo a la perfección!, ¡ella me motiva!, ¡él es muy simpático! ¿Lo has dicho o escuchado?</i></h4>

				</div><!--.container-->

				<div class="clear"></div>

				<div class="section parallax dark nomargin noborder" style="padding: 20px 0; background-image: url('images/parallax-3.jpg'); background-position: 50% 10% !important;" data-stellar-background-ratio="0.2">
					<div class="container clearfix">
						<div class="row">
							<div class="col s12 m12 l8 xl8">
								<p class="justify-align" id="text-parallax">Hablar y comunicarte no es exactamente lo mismo a pesar de lo que muchas personas podrían creer, hablar tiene que ver con emitir palabras, comunicar significa manifestar o hacer saber a alguien algo, y por mucho que creamos que nosotros nacimos con este don por el hecho de tener voz, la realidad es que se requiere habilidad.</p>
								<p class="justify-align" id="text-parallax">Tu cuerpo y tus gestos son indispensables para generar la coherencia que necesitas y obtener buenos resultados de tu audiencia, sea interés, comprensión, empatía, autoridad, miedo, seguridad o felicidad.</p>
								<p class="justify-align" id="text-parallax" class="nobottommargin">El reto es comunicar eficientemente para impactar, no sólo hablar.<br>El reto es captar la atención para lograr objetivos.</p>
							</div>
							<div class="col s12 m12 l4 xl4">
							</div>
						</div><!--.row-->
					</div><!--.container clearfix-->
				</div><!--.section parallax-->

				<div class="container">

					<h2 class="center-align topmargin-sm bottommargin-sm"><i>Asesorías de Imagen Verbal y No Verbal</i></h2>

					<div class="row bottommargin">
						<div class="col s12 m6 l6 xl6">
							<div id="text_photo">
								<h3 class="center-align"><i>¡Tus palabras y tus gestos cuentan!</i></h3>
								<p class="justify-align">La comunicación verbal y no verbal es una herramienta indispensable para que podamos expresar sentimientos a nuestra gente cercana, para vender un producto o para intercambiar ideas con un compañero de trabajo.</p>
							</div>
						</div><!--.col s12 m6 l6 xl6-->
						<div class="col s12 m6 l6 xl6">
							<img src="images/verbal-asesoria.jpg" alt="<?php echo $title ?>" class="img-responsive">
						</div><!--.col s12 m6 l6 xl6-->
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
		var swiper = new Swiper('.swiper-container', {
	        pagination: '.swiper-pagination',
	        paginationClickable: true,
	        nextButton: '.swiper-button-next',
	        prevButton: '.swiper-button-prev',
	        spaceBetween: 30,
	        loop: true,
	        autoplay: 2500,
	        centeredSlides: true,
        	autoplayDisableOnInteraction: false
	    });
	</script>

</body>
</html>