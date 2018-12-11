<?php include './setup.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo IDIOMA; ?>">
<head>

	<?php 
	$title = "Imagen Digital";
	$desc = "";
	$kw = "Consultoría de imagen pública, Imagen Digital, Iconos, Consultoría Iconos, Imagen pública, Imagen de personal, Imagen física, Cursos de imagen, Clases de imagen personal, Imagen corporativa, Asesoría de imagen personal, Imagen profesional, Asesoría de imagen, Asesores de imagen, Lenguaje corporal, Imagen personal, Imagen profesional";
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

					<div class="col s12">
						<h2 class="center-align topmargin-sm"><i><?php echo $title ?></i></h2>
						<h3 class="center-align"><i class="font300">¿Te gustaría tener mayor captación de clientes por medio de tu imagen?</i><br>
						<i>Nos encargamos de posicionar su presencia dentro del mundo virtual, cuidando la coherencia de lo que quieren proyectar y comunicándolo a la audiencia necesaria.</i></h3>
					</div>

					<div class="row center bottommargin">
						<div class="col s12 m12 l4 xl4">
							<div class="hover-identidad-corporativa hide-on-med-and-down">
							</div>
							<img src="images/imagen-digital-above.jpg" class="responsive-img hide-on-large-only" alt="<?php echo $title ?>">
						</div>
						<div class="col s12 m12 l4 xl4" align="center">
							<div class="hover-social-media hide-on-med-and-down">
							</div>
							<img src="images/imagen-digital-mkt-above.jpg" class="responsive-img hide-on-large-only" alt="<?php echo $title ?>">
						</div>
						<div class="col s12 m12 l4 xl4">
							<div class="hover-marketing-on-line hide-on-med-and-down">
							</div>
							<img src="images/imagen-digital-media-above.jpg" class="responsive-img hide-on-large-only" alt="<?php echo $title ?>">
						</div>
					</div><!--.row center bottommargin -->

				</div><!--.container -->

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

</body>
</html>