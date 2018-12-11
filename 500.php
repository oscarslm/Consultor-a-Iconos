<?php include './setup.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo IDIOMA; ?>">
<head>

	<?php 
	$title = "Error";
	?>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex,nofollow">

    <!-- FavIcon
    ============================================= -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="<?php echo AUTOR; ?>" />
	<meta name="description" content="<?php echo $desc ?>" />
	<meta name="keywords" content="<?php echo $kw ?>" />

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
	<link rel="stylesheet" type="text/css" href="css/custom.css">

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

	<!-- Document Title
	============================================= -->
	<title><?php echo $title ?> | <?php echo EMPRESA; ?></title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<?php include './header-servicios.php' ?>
		<!-- #header end -->  

		<!-- section-title
		============================================= -->
		<?php include './section-title.php' ?>
		<!-- #section-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="row">
						<div class="col s12 m8 l8">
							<h1 class="error404 center-on-small-only">500</h1>
							<p class="center-on-small-only">500 Internal Server Error</p>
						</div><!--.col s12 m8 l8-->
						<div class="col s12 m4 l4">
							<div class="topmargin">
								<h4 class="center-on-small-only">Intenta buscando lo siguiente:</h4>
								<ul class="center-on-small-only">
									<li><a href="/somos"><div><i class="icon icon-caret-right"></i> Somos</div></a></li>
									<li><a href="/servicios"><div><i class="icon icon-caret-right"></i> Servicios</div></a></li>
									<li><a href="/manuales"><div><i class="icon icon-caret-right"></i> Manuales</div></a></li>
									<li><a href="/conferencias"><div><i class="icon icon-caret-right"></i> Conferencias</div></a></li>
									<li><a href="/multimedia"><div><i class="icon icon-caret-right"></i> Multimedia</div></a></li>
									<li><a href="/contacto"><div><i class="icon icon-caret-right"></i> Contacto</div></a></li>
									<li><a href="/blog"><div><i class="icon icon-caret-right"></i> Blog</div></a></li>
								</ul>
							</div>
						</div><!--.col s12 m4 l4-->
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
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>