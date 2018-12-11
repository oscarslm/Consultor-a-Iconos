<?php include './setup.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo IDIOMA; ?>">
<head>

	<?php 
	$title = "Inicio";
	$desc = "Somos una consultoría mexicana dedicada a la Imagen Pública, con la finalidad de brindar a nuestros clientes características de liderazgo y persuasión acorde a sus diferentes tipos de audiencia. Buscamos darte el mejor servicio posible para que logres las metas que te has propuesto a nivel personal y profesional.";
	$kw = "Consultoría de imagen pública";
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
	<link rel="stylesheet" type="text/css" href="css/custom.css">

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

	</style>

</head>

<body class="stretched" data-loader-color="#00cdbd">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<?php include './header.php' ?>
		<!-- #header end -->

        <!-- Slider
        ============================================= -->
        <section id="slider" class="revslider-wrap clearfix">

        	<div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic-carousel2" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">

        		<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
        		<div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
        			<ul>	<!-- SLIDE  -->
        				<li data-index="rs-1" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="include/rs-plugin/demos/assets/images/datcolor-60x60.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
        					<!-- MAIN IMAGE -->
        					<img src="images/mezclilla-camisa-banner.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

        				</li>

        				<li data-index="rs-2" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="include/rs-plugin/demos/assets/images/datcolor-60x60.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
        					<!-- MAIN IMAGE -->
        					<img src="images/composicion-vestido-banner.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

        				</li>

        				<li data-index="rs-3" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="include/rs-plugin/demos/assets/images/datcolor-60x60.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
        					<!-- MAIN IMAGE -->
        					<img src="images/camisa-zapatos-banner.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

        				</li>

        				<li data-index="rs-4" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="include/rs-plugin/demos/assets/images/datcolor-60x60.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
        					<!-- MAIN IMAGE -->
        					<img src="images/accesorios-mujer-banner.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

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

				<div class="section parallax dark nomargin noborder" style="padding: 50px 0; background-image: url('images/bg-somos.jpg');" data-stellar-background-ratio="0.2">
					<div class="container clearfix">
						<div class="row">
							<div class="col s12 m6 l6">
								<h3>ICONOS</h3>
								<p id="text-parallax">Somos una consultoría mexicana dedicada a la Imagen Pública, con la finalidad de brindar a nuestros clientes características de liderazgo y persuasión acorde a sus diferentes tipos de audiencia. Buscamos darte el mejor servicio posible para que logres las metas que te has propuesto a nivel personal y profesional.</p>
								<h3>¿QUÉ ES LA IMAGEN PÚBLICA?</h3>
								<p id="text-parallax">Es la percepción que se tiene de una persona o institución por parte de 
									sus grupos objetivos como consecuencia de los estímulos emanados.</p>
							</div>
							<div class="col s12 m6 l6">
									
							</div>
						</div><!--.row-->
					</div><!--.container clearfix-->
				</div><!--.section parallax-->

				<div class="pleca">
					<h2 class="center-align">Servicios</h2>
				</div>

				<div class="row">
					<div class="col s12 m4 l4">
						<div class="hover-personal">
							
						</div>
					</div>
					<div class="col s12 m4 l4">
						<div class="hover-shopper">
							
						</div>
					</div>
					<div class="col s12 m4 l4">
						<div class="hover-verbal">
							
						</div>
					</div>
					<div class="col s12 m4 l4">
						<div class="hover-profesional">
							
						</div>
					</div>
					<div class="col s12 m4 l4">
						<div class="hover-atencion">
							
						</div>
					</div>
					<div class="col s12 m4 l4">
						<div class="hover-atencion">
							
						</div>
					</div>
					<div class="col s12 m4 l4">
						<div class="hover-politica">
							
						</div>
					</div>
					<div class="col s12 m4 l4">
						<div class="hover-ambiental">
							
						</div>
					</div>
					<div class="col s12 m4 l4">
						<div class="hover-digital">
							
						</div>
					</div>
					<div class="col s12 m4 l4">
						<div class="hover-corporativa">
							
						</div>
					</div>
				</div>

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
		});	/*ready*/
	</script>

</body>
</html>