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
					<ul class="center-align">
						<li>Viernes 26 de junio</li>
						<li>Viernes 17 de julio</li>
						<li>Viernes 7 de agosto</li>
						<li>Viernes 28 de agosto</li>
						<li>Viernes 18 de septiembre</li>
						<li>Viernes 9 de octubre</li>
						<li>Viernes 30 de octubre</li>
						<li>Viernes 20 de noviembre</li>
						<li>Viernes 11 de diciembre</li>
					</ul>

					<h4 class="center-align">AUTOMAQUILLAJE</h4>
					<ul class="center-align">
						<li>Sábado 18 de julio</li>
						<li>Sábado 29 de agosto</li>
						<li>Sábado 19 de septiembre</li>
						<li>Sábado 31 de octubre</li>
						<li>Sábado 21 de noviembre</li>
					</ul>

					<h4 class="center-align">IMAGEN VERBAL Y NO VERBAL</h4>
					<ul class="center-align">
						<li>Viernes 3 de julio</li>
						<li>Viernes 24 de julio</li>
						<li>Viernes 14 de agosto</li>
						<li>Viernes 4 de septiembre</li>
						<li>Viernes 25 de septiembre</li>
						<li>Viernes 16 de octubre</li>
						<li>Viernes 6 de noviembre</li>
						<li>Viernes 27 de noviembre</li>
					</ul>

					<h4 class="center-align">IMAGEN Y PROTOCOLO PROFESIONAL</h4>
					<ul class="center-align">
						<li>Viernes 10 de julio</li>
						<li>Viernes 31 de julio</li>
						<li>Viernes 21 de agosto</li>
						<li>Viernes 11 de septiembre</li>
						<li>Viernes 2 de octubre</li>
						<li>Viernes 23 de octubre</li>
						<li>Viernes 13 de noviembre</li>
						<li>Viernes 4 de diciembre</li>
					</ul>

					<h4 class="center-align">ENCUENTRA CHAMBA</h4>
					<ul class="center-align">
						<li>Miércoles 8 de julio</li>
						<li>Miércoles 22 de julio</li>
						<li>Miércoles 12 de agosto</li>
						<li>Miércoles 2 de septiembre</li>
						<li>Miércoles 23 de septiembre</li>
						<li>Miércoles 14 de octubre</li>
						<li>Miércoles 4 de noviembre</li>
						<li>Miércoles 25 de noviembre</li>
					</ul>

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

	<?php include './jivosite.php'; ?>
</body>
</html>