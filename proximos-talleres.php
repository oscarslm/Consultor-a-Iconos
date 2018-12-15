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

					<h4 class="center-align">IMAGEN PERSONAL</h4>
					<p class="center-align">Viernes 11 de enero de 2019<br />Viernes 1 de febrero de 2019<br />Viernes 22 de febrero de 2019<br />Viernes 15 de marzo de 2019<br />Viernes 5 de abril de 2019<br />Viernes 3 de mayo de 2019<br />Viernes 10 de mayo de 2019<br />Viernes 31 de mayo de 2019 <br />Viernes 21 de junio de 2019</p>

					<h4 class="center-align">AUTOMAQUILLAJE</h4>
					<p class="center-align">Sábado 12 de enero de 2019<br />Sábado 2 de febrero de 2019<br />Sábado 23 de febrero de 2019<br />Sábado 16 de marzo de 2019<br />Sábado 6 de abril de 2019<br />Sábado 4 de mayo de 2019<br />Sábado 11 de mayo de 2019<br />Sábado 1 de junio de 2019<br />Sábado 22 de junio de 2019</p>

					<h4 class="center-align">IMAGEN VERBAL Y NO VERBAL</h4>
					<p class="center-align">Viernes 18 de enero de 2019<br />Viernes 8 de febrero de 2019<br />Viernes 1 de marzo de 2019<br />Viernes 22 de marzo de 2019<br />Viernes 12 de abril de 2019<br />Viernes 17 de mayo de 2019<br />Viernes 7 de junio de 2019<br />Viernes 28 de junio de 2019</p>

					<h4 class="center-align">BUSCA CHAMBA</h4>
					<p class="center-align">Miércoles 23 de enero de 2019<br />Miércoles 13 de febrero de 2019<br />Miércoles 6 de marzo de 2019<br />Miércoles 27 de marzo de 2019<br />Miércoles 24 de abril de 2019<br />Miércoles 22 de mayo de 2019<br />Miércoles 12 de junio de 2019<br />Miércoles 3 de julio de 2019</p>

					<h4 class="center-align">IMAGEN Y PROTOCOLO PROFESIONAL</h4>
					<p class="center-align">Viernes 25 de enero de 2019<br />Viernes 15 de febrero de 2019<br />Viernes 8 de marzo de 2019<br />Viernes 29 de marzo de 2019<br />Viernes 26 de abril de 2019<br />Viernes 24 de mato de 2019<br />Viernes 14 de junio de 2019<br />Viernes 5 de julio de 2019</p>

					<div class="divider"></div>

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