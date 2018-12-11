<?php include './setup.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo IDIOMA; ?>">
<head>

	<?php 
	$title = "Próximos talleres";
	$desc = "";
	$kw = "Consultoría de imagen pública, Imagen Corporativa, Iconos, Consultoría Iconos, Imagen pública, Imagen de personal, Imagen física, Cursos de imagen, Clases de imagen personal, Imagen corporativa, Asesoría de imagen personal, Imagen profesional, Asesoría de imagen, Asesores de imagen, Lenguaje corporal, Imagen personal, Imagen profesional";
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

				<div class="col s12">
					<h2 class="center-align topmargin-sm"><i><?php echo $title ?></i></h2>
				</div><!--.col s12-->

				<!--.Slider-->
					<div class="owl-carousel owl-theme bottommargin">
						<div class="item"><img src="images/proximos-talleres.jpg" alt="Slider"></div>
						<div class="item"><img src="images/proximos-talleres2.jpg" alt="Slider"></div>
					</div><!--.owl-carousel owl-theme-->

				<div class="container">

					<h4 class="center-align">Taller de Imagen Personal</h4>
					<p class="center-align">15 de junio de 2018<br />6 de julio de 2018<br />27 de julio de 2018<br />17 de agosto de 2018<br />7 de septiembre de 2018<br />28 de septiembre de 2018<br />26 de octubre de 2018<br />23 de noviembre de 2018<br />14 de diciembre de 2018</p>
					<h4 class="center-align">Taller de Imagen Verbal y No Verbal</h4>
					<p class="center-align">22 de junio de 2018<br />13 de julio de 2018<br />3 de agosto de 2018<br />24 de agosto de 2018<br />14 de septiembre de 2018<br />5 de octubre de 2018<br />9 de noviembre de 2018<br />30 de noviembre de 2018</p>
					<h4 class="center-align">Taller de Imagen y Protocolo Profesional</h4>
					<p class="center-align">29 de junio de 2018<br />20 de julio de 2018<br />10 de agosto de 2018<br />31 de agosto de 2018<br />21 de septiembre de 2018<br />19 de octubre de 2018<br />16 de noviembre de 2018<br />7 de diciembre de 2018</p>
					<h4 class="center-align">Taller de Automaquillaje</h4>
					<p class="center-align">28 de julio de 2018<br />18 de agosto de 2018<br />29 de septiembre de 2018<br />27 de octubre de 2018<br />14 de noviembre de 2018<br />15 de diciembre de 2018</p>
					<p class="center-align">Martes de Asesorías de Imagen Personal</p>
					<p class="center-align">Miércoles de Asesorías de Imagen y Protocolo Profesional</p>
					<p class="center-align">Jueves de Asesorías de Imagen Verbal y No Verbal</p>
					
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