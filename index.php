<?php include './setup.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo IDIOMA; ?>">
<head>

	<?php 
	$title = "Inicio";
	$desc = "Somos una consultoría mexicana dedicada a la Imagen Pública, con la finalidad de brindar a nuestros clientes características de liderazgo y persuasión acorde a sus diferentes tipos de audiencia. Buscamos darte el mejor servicio posible para que logres las metas que te has propuesto a nivel personal y profesional.";
	$kw = "Consultoría de imagen pública, Iconos, Consultoría Iconos, Imagen pública, Imagen de personal, Imagen física, Cursos de imagen, Clases de imagen personal, Imagen corporativa, Asesoría de imagen personal, Imagen profesional, Asesoría de imagen, Asesores de imagen, Lenguaje corporal, Imagen personal, Imagen profesional";
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
	<link rel="stylesheet" href="/css/materialize.css" type="text/css" />
	<link rel="stylesheet" href="/style.css" type="text/css" />
	<link rel="stylesheet" href="/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="/css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="/css/responsive.css" type="text/css" />
	<link rel="stylesheet" href="/css/colors.php?color=<?php echo COLOR_BASE; ?>" type="text/css" />
	<link rel="stylesheet" type="text/css" href="/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="/css/custom.css">

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

		<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
		<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">


	<!-- Document Title
	============================================= -->
	<title><?php echo $title ?> | <?php echo EMPRESA; ?></title>

	<style>

		.demos-filter {
			margin: 0;
			text-align: right;
		}

		.demos-filter li {
			list-style: none;
			margin: 10px 0px;
		}

		.demos-filter li a {
			display: block;
			border: 0;
			text-transform: uppercase;
			letter-spacing: 1px;
			color: #444;
		}

		.demos-filter li a:hover,
		.demos-filter li.activeFilter a { color: #1ABC9C; }

		@media (max-width: 991px) {
			.demos-filter { text-align: center; }

			.demos-filter li {
				float: left;
				width: 33.3%;
				padding: 0 20px;
			}
		}

		@media (max-width: 767px) {
			.demos-filter li { width: 50%; }
		}

		.revo-slider-emphasis-text {
			font-size: 64px;
			font-weight: 700;
			letter-spacing: -1px;
			font-family: 'Raleway', sans-serif;
			padding: 15px 20px;
			border-top: 2px solid #FFF;
			border-bottom: 2px solid #FFF;
		}

		.revo-slider-desc-text {
			font-size: 20px;
			font-family: 'Lato', sans-serif;
			width: 650px;
			text-align: center;
			line-height: 1.5;
		}

		.revo-slider-caps-text {
			font-size: 16px;
			font-weight: 400;
			letter-spacing: 3px;
			font-family: 'Raleway', sans-serif;
		}
		.tp-video-play-button { display: none !important; }

		.tp-caption { white-space: nowrap; }

		.swiper-container {
	        width: 100%;
	        height: 100%;
	    }

	    .swiper-slide {
	        text-align: center;
	        font-size: 18px;
	        background: #fff;
	        /* Center slide text vertically */
	        display: -webkit-box;
	        display: -ms-flexbox;
	        display: -webkit-flex;
	        display: flex;
	        -webkit-box-pack: center;
	        -ms-flex-pack: center;
	        -webkit-justify-content: center;
	        justify-content: center;
	        -webkit-box-align: center;
	        -ms-flex-align: center;
	        -webkit-align-items: center;
	        align-items: center;
	    }

	</style>

	<script src='https://www.google.com/recaptcha/api.js'></script>

	<meta name="google-site-verification" content="f4MC-LpHa01lHUsDqASv6QvqyVVikOso2IM3LLlzQkg" />

</head>

<body class="stretched no-transition animated fadeIn" data-loader-color="#00cdbd">

	<?php include_once("analyticstracking.php"); ?>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<?php include './header.php'; ?>
		<!-- #header end -->

        <!-- Slider
        ============================================= -->
        <section id="slider" class="revslider-wrap container clearfix">

        	<div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic-carousel2" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">

        		<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
        		<div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
        			<ul>
						<!-- SLIDE  -->
        				<li data-index="rs-1" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="include/rs-plugin/demos/assets/images/datcolor-60x60.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
        					<!-- MAIN IMAGE -->
        					<img src="images/taller-protocolo-banner.jpg"  alt="Taller de Protocolo"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

        				</li>
						<!-- SLIDE  -->
        				<li data-index="rs-1" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="include/rs-plugin/demos/assets/images/datcolor-60x60.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
        					<!-- MAIN IMAGE -->
        					<img src="images/banner-mama2.jpg"  alt="Taller de Protocolo"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

        				</li>
        				<!-- SLIDE  -->
        				<li data-index="rs-1" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="include/rs-plugin/demos/assets/images/datcolor-60x60.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
        					<!-- MAIN IMAGE -->
        					<img src="images/mezclilla-camisa-banner.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

        				</li>

        				<li data-index="rs-2" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="include/rs-plugin/demos/assets/images/datcolor-60x60.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
        					<!-- MAIN IMAGE -->
        					<img src="images/banner-index.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

        				</li>

        				<li data-index="rs-4" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="include/rs-plugin/demos/assets/images/datcolor-60x60.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
        					<!-- MAIN IMAGE -->
        					<img src="images/accesorios-mujer-banner.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

        				</li>

        				<li data-index="rs-3" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="include/rs-plugin/demos/assets/images/datcolor-60x60.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
        					<!-- MAIN IMAGE -->
        					<img src="images/banner-index-oficina.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

        				</li>

        			</ul>
        			<div class="tp-static-layers"></div>
        			<div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
        		</div>
        	</div><!-- END REVOLUTION SLIDER -->
        	<!-- END REVOLUTION SLIDER -->
        </section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div id="somos" class="section dark nomargin noborder parallax" style="background-image: url('/images/parallax-1.jpg');" data-stellar-background-ratio="0.1">
					<div class="container clearfix">
						<div class="row nobottommargin">
							<div class="col s12 m6 l6">
								<h3>ICONOS</h3>
								<p id="text-parallax">Somos una consultoría mexicana dedicada a la Imagen Pública, con la finalidad de brindar a nuestros clientes características de liderazgo y persuasión acorde a sus diferentes tipos de audiencia. Buscamos darte el mejor servicio para que logres las metas que te has propuesto a nivel personal y profesional.</p>
								<h3>¿QUÉ ES LA IMAGEN PÚBLICA?</h3>
								<p id="text-parallax">Es la percepción que se tiene de una persona o institución por parte de 
									sus grupos objetivos como consecuencia de los estímulos emanados.</p>
							</div>
							<div class="col s12 m6 l6">
									
							</div>
						</div><!--.row-->
					</div><!--.container clearfix-->
				</div><!--.section parallax-->

					<div class="container">

						<div class="pleca" id="servicios">
							<h2 class="center-align">Servicios</h2>
						</div>

						<div class="row hide-on-med-and-down nobottommargin">
							<div class="col s12 m4 l4">
								<a href="/imagen-profesional">
									<div class="hover-profesional">
									</div>
								</a>
								
							</div>
							<div class="col s12 m4 l4">
								<a href="/atencion-al-cliente">
									<div class="hover-atencion">
									</div>
								</a>
								
							</div>
							<div class="col s12 m4 l4">
								<a href="/imagen-verbal-y-no-verbal">
									<div class="hover-verbal">
									</div>
								</a>
							</div>
							<div class="col s12 m4 l4">
								<a href="/imagen-personal">
									<div class="hover-personal">
									</div>
								</a>
							</div>
							<div class="col s12 m4 l4">
								<a href="/personal-shopper">
									<div class="hover-shopper">
									</div>
								</a>
							</div>
							<div class="col s12 m4 l4">
								<a href="/imagen-politica">
									<div class="hover-politica">
									</div>
								</a>
							</div>
							<div class="col s12 m4 l4">
								<a href="/imagen-ambiental">
									<div class="hover-ambiental">
									</div>
								</a>
							</div>
							<div class="col s12 m4 l4">
								<a href="/imagen-digital">
									<div class="hover-digital">
									</div>
								</a>
							</div>
							<div class="col s12 m4 l4">
								<a href="/proximos-talleres">
									<div class="hover-corporativa">
									</div>
								</a>
							</div>
						</div><!--.row-->

						<div class="row hide-on-large-only nobottommargin" align="center">
							<div class="col s6 m4 l4">
								<a href="/imagen-profesional">
									<img src="images/profesional-boton-servicios-hover-08.jpg" class="responsive-img">
								</a>
								
							</div>
							<div class="col s6 m4 l4">
								<a href="/atencion-al-cliente">
									<img src="images/atencion-boton-servicios-hover-08.jpg" class="responsive-img">
								</a>
								
							</div>
							<div class="col s6 m4 l4">
								<a href="/imagen-verbal-y-no-verbal">
									<img src="images/verbal-boton-servicios-hover-08.jpg" class="responsive-img">
								</a>							
								
							</div>
							<div class="col s6 m4 l4">
								<a href="/imagen-personal">
									<img src="images/personal-boton-servicios-hover-08.jpg" class="responsive-img">
								</a>
							</div>
							<div class="col s6 m4 l4">
								<a href="/personal-shopper">
									<img src="images/shopper-boton-servicios-hover-08.jpg" class="responsive-img">
								</a>
							</div>
							<div class="col s6 m4 l4">
								<a href="/imagen-politica">
									<img src="/images/politica-boton-servicios-hover-08.jpg" class="responsive-img">
								</a>
							</div>
							<div class="col s6 m4 l4">
								<a href="/imagen-ambiental">
									<img src="images/ambiental-boton-servicios-hover-08.jpg" class="responsive-img">
								</a>
							</div>
							<div class="col s6 m4 l4">
								<a href="/imagen-digital">
									<img src="images/digital-boton-servicios-hover-08.jpg" class="responsive-img">
								</a>
							</div>
							<div class="col s6 m4 l4 offset-s3">
								<a href="/proximos-talleres">
									<img src="images/corporativa-boton-servicios-hover-08.jpg" class="responsive-img">
								</a>
							</div>
						</div><!--.row-->

						<div class="pleca" id="manuales">
							<h2 class="center-align">Manuales</h2>
						</div>

					</div><!--.container-->

					<!-- Swiper -->
				    <div class="swiper-container hide-on-small-only">
				        <div class="swiper-wrapper ">
				            <div class="swiper-slide"><img src="images/personal-banner2-index-09.jpg" alt="Slider"></div>
				            <div class="swiper-slide"><img src="images/verbal-banner2-index-09.jpg" alt="Slider"></div>
				        </div>
				        <!-- Add Pagination -->
				        <div class="swiper-pagination"></div>
				        <!-- Add Arrows -->
				        <div class="swiper-button-next hide"></div>
				        <div class="swiper-button-prev hide"></div>
				    </div>

				    <!-- Swiper -->
				    <div class="swiper-container hide-on-med-and-up">
				        <div class="swiper-wrapper ">
				            <div class="swiper-slide"><img src="images/manuales_img_pers.png" alt="Slider"></div>
				            <div class="swiper-slide"><img src="images/manuales_img_verb-noverb.png" alt="Slider"></div>
				        </div>
				        <!-- Add Pagination -->
				        <div class="swiper-pagination"></div>
				        <!-- Add Arrows -->
				        <div class="swiper-button-next hide"></div>
				        <div class="swiper-button-prev hide"></div>
				    </div>

					<div class="pleca" id="conferencias">
						<h2 class="center-align">Conferencias</h2>
					</div>

					<div class="section parallax dark nomargin noborder" style="padding: 50px 0; background-image: url('images/conferencias.jpg');     background-position: 50% 30%; padding: 90px 0; background-repeat: no-repeat; background-size: cover;" data-stellar-background-ratio="0.1">
						<div class="clearfix" style="padding: 0 38px;">
							<div class="row">
								<div class="col s12 m6 l6">
									<p id="text-parallax"><strong>Un espacio para adquirir nuevos conocimientos nunca está de más.</strong> Las conferencias de imagen ayudarán a comprender la importancia de cuidar los estímulos que están enviando a los demás en beneficio de su reputación y de su futuro, aprendiendo que comunicar eficientemente puede ser una de las más grandes ventajas que puedan obtener. </p>
									<p id="text-parallax">El crecimiento de una empresa también está relacionado con el de las personas que laboran en ella. </p>
								</div>
								<div class="col s12 m6 l6">
									
								</div>
							</div><!--.row-->
						</div><!--.container clearfix-->
					</div><!--.section parallax-->

					<div class="pleca" id="multimedia">
						<h2 class="center-align">Multimedia</h2>
					</div>

					<h3 class="center-align nobottommargin">Galería</h3>

					<div class="container">
						<div class="masonry-thumbs col-5" data-lightbox="gallery">
							<a href="images/gal1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gal1.jpg" alt="Galería Iconos"></a>
							<a href="images/gal2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gal2.jpg" alt="Galería Iconos"></a>
							<a href="images/gal3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gal3.jpg" alt="Galería Iconos"></a>
							<a href="images/gal4.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gal4.jpg" alt="Galería Iconos"></a>
							<a href="images/gal5.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gal5.jpg" alt="Galería Iconos"></a>
							<a href="images/gal6.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gal6.jpg" alt="Galería Iconos"></a>
							<a href="images/gal7.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gal7.jpg" alt="Galería Iconos"></a>
							<a href="images/gal8.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gal8.jpg" alt="Galería Iconos"></a>
							<a href="images/gal9.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gal9.jpg" alt="Galería Iconos"></a>
							<a href="images/gal10.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/gal10.jpg" alt="Galería Iconos"></a>
							<a href="images/galeria1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/galeria1.jpg" alt="Gallery Thumb 1"></a>
							<a href="images/galeria5.jpg" class="hide" data-lightbox="gallery-item"><img class="image_fade" src="images/galeria5.jpg" alt="Gallery Thumb 5"></a>
							<a href="images/galeria6.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/galeria6.jpg" alt="Gallery Thumb 6"></a>
							<a href="images/galeria7.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/galeria7.jpg" alt="Gallery Thumb 7"></a>
							<a href="images/galeria8.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/galeria8.jpg" alt="Gallery Thumb 9"></a>
							<a href="images/galeria9.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/galeria9.jpg" alt="Gallery Thumb 10"></a>
							<a href="images/galeria12.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/galeria12.jpg" alt="Gallery Thumb 13"></a>
							<a href="images/galeria13.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/galeria13.jpg" alt="Gallery Thumb 14"></a>
							<a href="images/galeria15.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/galeria15.jpg" alt="Gallery Thumb 15"></a>
							<a href="images/galeria-17.png" data-lightbox="gallery-item"><img class="image_fade" src="images/galeria-17.png" alt="Gallery Thumb 15"></a>
							<a href="images/galeria-18.png" data-lightbox="gallery-item"><img class="image_fade" src="images/galeria-18.png" alt="Gallery Thumb 15"></a>
							<a href="images/es-noticia.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/es-noticia.jpg" alt="Gallery Thumb 15"></a>
							<a href="images/itam.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/itam.jpg" alt="Gallery Thumb 15"></a>
							<a href="images/radio.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/radio.jpg" alt="Gallery Thumb 15"></a>
							<a href="images/tec2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/tec2.jpg" alt="Gallery Thumb 15"></a>
							<a href="images/tv.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/tv.jpg" alt="Gallery Thumb 15"></a>
							<a href="images/tv2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/tv2.jpg" alt="Gallery Thumb 15"></a>
							<a href="images/washington.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/washington.jpg" alt="Gallery Thumb 15"></a>
						</div>

						<div style="clear: both;"></div>

						<h3 class="center-align nobottommargin">Videos</h3>

						<div class="masonry-thumbs col-2 clearfix">
							<a href="https://www.youtube.com/watch?v=cjexqL3uUfk" data-lightbox="iframe">
								<img src="images/mejora-tu-imagen.png" alt="Youtube Video">
								<div class="overlay"><div class="overlay-wrap"><i class="icon-youtube-play"></i></div></div>
							</a>
							<a href="https://www.youtube.com/watch?v=KFgrweQXH7Y" data-lightbox="iframe">
								<img src="images/cuidado-con-lo-que-dices.png" alt="Youtube Video">
								<div class="overlay"><div class="overlay-wrap"><i class="icon-youtube-play"></i></div></div>
							</a>
						</div>

						<div align="left">
							<a href="https://www.youtube.com/channel/UCeyv9L0FuKYS78rHu6-TYww" target="_blank" class="button button-3d"><i class="icon icon-plus"></i> Ver más</a>
						</div>

						<div class="clear"></div>

						<div class="pleca">
							<h2 class="center-align">Contacto</h2>
						</div>

					</div><!--container-->

					<div class="bg-contacto" id="contacto">

						<div class="contact-widget container">

							<div class="contact-form-result"></div>

							<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

								<div class="form-process"></div>

								<div class="row">
									<div class="col s12 m4 l4"></div><!--.col s12 m4 l4-->
									<div class="col s12 m4 l4">
										<div class="row">
											<div class="input-field col s12">
												<input type="text" id="template-contactform-name" name="template-contactform-name" class="validate">
												<label for="template-contactform-name">Nombre</label>
											</div><!--.input-field col s12-->
											<div class="input-field col s12">
												<input type="email" id="template-contactform-email" name="template-contactform-email" class="validate">
												<label for="template-contactform-email">Correo</label>
											</div><!--.input-field col s12-->
											<div class="input-field col s12">
												<input type="tel" id="template-contactform-phone" name="template-contactform-phone" class="validate">
												<label for="template-contactform-phone">Teléfono</label>
											</div><!--.input-field col s12-->
											<div class="input-field bottommargin-sm col s12">
												<input name="genero" type="radio" value="Femenino" id="femenino" />
												<label for="femenino">Femenino</label>
												<input name="genero" type="radio" value="Masculino" id="masculino" />
												<label for="masculino">Masculino</label> 
											</div><!--.input-field col s12-->
											<div class="input-field col s12">
												<select id="template-contactform-service" name="template-contactform-service">
													<option value="" disabled selected>Selecciona una opción</option>
													<option value="Imagen personal">Imagen personal</option>
													<option value="Personal shopper">Personal shopper</option>
													<option value="Imagen verbal y no verbal">Imagen verbal y no verbal</option>
													<option value="Imagen profesional">Imagen profesional</option>
													<option value="Atención al cliente">Atención al cliente</option>
													<option value="Imagen política">Imagen política</option>
													<option value="Imagen ambiental">Imagen ambiental</option>
													<option value="Imagen digital">Imagen digital</option>
													<option value="Imagen corporativa">Imagen corporativa</option>
												</select>
												<label for="template-contactform-service">Servicio</label>
											</div><!--.input-field col s12-->
											<div class="input-field col s12">
												<textarea id="template-contactform-message" name="template-contactform-message" class="materialize-textarea"></textarea>
												<label for="textarea1">Comentarios</label>
											</div><!--.input-field col s12-->
											<div class="input-field col s12 hidden">
												<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="validate show-error-msg" />
											</div><!--.input-field col s12-->
											<div class="input-field col s12 center-on-small-only" align="right">
												<button class="btn waves-effect waves-light" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit"><i class="icon icon-send"></i> Enviar mensaje</button>
											</div><!--.input-field col s12-->
										</div><!--.row-->
										<div align="center" class="g-recaptcha" data-sitekey="6LcCFSYUAAAAADA9X-4JkTYgUIYu0eQOLOHZumml"></div>
									</div><!--.col s12 m4 l4-->
									<div class="col s12 m4 l4"></div><!--.col s12 m4 l4-->
								</div><!--.row-->

								<p class="center-align" style="padding-bottom: 50px;">Presa Don Martín #78-1, Col. Irrigación, Del. Miguel Hidalgo<br>C.P. 11500, México, Ciudad de México<br>6360 4389 / (55) 4554 2668 / 5576 6710<br><?php echo CORREO; ?></p>
								
							</form>
							
						</div><!--.contact-widget-->
						
					</div><!--.bg-contacto-->

				</div><!--.content-wrap-->

			</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<?php include './footer.php'; ?>
		<!-- #footer end -->            

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up waves-effect waves-light btn-floating"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/plugins.js"></script>
	<script type="text/javascript" src="/js/jquery.elastic.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="/js/functions.js"></script>

	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

	<script type="text/javascript">
		var tpj=jQuery;
		var revapi2;
		tpj(document).ready(function() {
			if(tpj("#rev_slider_2_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_2_1");
			}else{
				revapi2 = tpj("#rev_slider_2_1").show().revolution({
					sliderType:"carousel",
					jsFileLocation:"include/rs-plugin/js/",
					sliderLayout:"fullwidth",
					dottedOverlay:"none",
					delay:9000,
					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
						onHoverStop:"off",
						arrows: {
							style:"metis",
							enable:true,
							hide_onmobile:true,
							hide_under:600,
							hide_onleave:true,
							hide_delay:200,
							hide_delay_mobile:1200,
							//tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div>    <div class="tp-arr-img-over"></div>	<span class="tp-arr-titleholder">{{title}}</span> </div>',
							left: {
								h_align:"left",
								v_align:"center",
								h_offset:30,
								v_offset:0
							},
							right: {
								h_align:"right",
								v_align:"center",
								h_offset:30,
								v_offset:0
							}
						}
						,
						thumbnails: {
							style:"gyges",
							enable:false,
							width:60,
							height:60,
							min_width:60,
							wrapper_padding:0,
							wrapper_color:"transparent",
							wrapper_opacity:"1",
							tmp:'<span class="tp-thumb-img-wrap">  <span class="tp-thumb-image"></span></span>',
							visibleAmount:5,
							hide_onmobile:true,
							hide_under:800,
							hide_onleave:false,
							direction:"horizontal",
							span:false,
							position:"inner",
							space:5,
							h_align:"center",
							v_align:"bottom",
							h_offset:0,
							v_offset:20
						}
					},
					carousel: {
						horizontal_align: "center",
						vertical_align: "center",
						fadeout: "off",
						maxVisibleItems: 3,
						infinity: "on",
						space: 0,
						stretch: "off"
					},
					viewPort: {
						enable:true,
						outof:"pause",
						visible_area:"80%"
					},
					responsiveLevels:[1280,1024,778,480],
					gridwidth:[1280,1024,778,480],
					gridheight:[640,600,500,400],
					lazyType:"none",
					
					shadow:5,
					spinner:"off",
					stopLoop:"off",
					stopAfterLoops:-1,
					stopAtSlide:-1,
					shuffle:"off",
					autoHeight:"off",
					hideThumbsOnMobile:"on",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:false,
					}
				});
			}

			var hash = window.location.hash;

			if (hash === "#somos") {
				jQuery("html, body").delay(500).animate({scrollTop: jQuery('body').offset().top + 595 }, 2000);
			}

		});	/*ready*/

		jQuery("#somosClick").click(function(e) {

			e.preventDefault();
			jQuery("html, body").animate({ scrollTop: jQuery('body').offset().top + 595 }, 1000);

		});

	</script>

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

	<?php include './jivosite.php'; ?>
</body>
</html>