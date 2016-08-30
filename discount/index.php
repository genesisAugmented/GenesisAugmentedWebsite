<?php 
/*
if(isset($_POST['EMAIL']) && isset($_POST['CONTENT'])){
	echo "SENT";
	exit();
}
*/
?>

<?php
if(isset($_POST['EMAIL']) && isset($_POST['NAME'])){
	require_once('../scripts/connect-to-mysqli.php');
	
	$email = $_POST['EMAIL'];
	$content = $_POST['CONTENT'];
	
	$sql = mysqli_query($mysqli, "INSERT INTO subscription_accounts(email, date_added)
									VALUES('$email', now())") or die(mysqli_error($mysqli));

	header("Location:../get-cards/free-cards.pdf");
	exit();
}
?>


<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Genesis AR - Contact</title>
		<meta name="description" content="Genesis AR is an augmented reality trading card game." />
		<meta name="keywords" content="GenesisAR, Augmented Reality, AR, Trading Cards, TCG" />
		<meta name="author" content="GenesisAR" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- LOAD JQUERY LIBRARY -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
		
		<!-- LOADING FONTS AND ICONS -->
		<link href="http://fonts.googleapis.com/css?family=Raleway:400,500,600" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
		
		<link rel="stylesheet" type="text/css" href="../fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
		<link rel="stylesheet" type="text/css" href="../fonts/font-awesome/css/font-awesome.min.css">
		
		<!-- REVOLUTION STYLE SHEETS -->
		<link rel="stylesheet" type="text/css" href="../css/settings.css">
		<!-- REVOLUTION LAYERS STYLES -->
					<link rel="stylesheet" type="text/css" href="../css/layers.css">
			
			<!-- REVOLUTION NAVIGATION STYLES -->
			<link rel="stylesheet" type="text/css" href="../css/navigation.css">
			
			<link rel="stylesheet" type="text/css" href="../css/noneed.css">
					<!-- REVOLUTION JS FILES -->
		<script type="text/javascript" src="../js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="../js/jquery.themepunch.revolution.min.js"></script>

		<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
		<script type="text/javascript" src="../js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="../js/extensions/revolution.extension.carousel.min.js"></script>
		<script type="text/javascript" src="../js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="../js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="../js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="../js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="../js/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="../js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="../js/extensions/revolution.extension.video.min.js"></script>
	</head>
	
	<body>
		
		<!-- SLIDER EXAMPLE -->
		<section class="example">
			<article class="content">
			

				<div id="rev_slider_100_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="newsletter-hero72" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
					<div id="rev_slider_100_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
						<ul>	<!-- SLIDE  -->
							<li data-index="rs-282" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="../../assets/images/pierbg-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Intro" data-description="">
								<!-- MAIN IMAGE -->
								<img src="../img/story-bg.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->

								<!-- LAYER NR. 1 -->
								<div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
									 id="slide-282-layer-10" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
												data-width="full"
									data-height="full"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="s:300;s:300;" 
									data-start="750" 
									data-basealign="slide" 
									data-responsive_offset="on" 
									data-responsive="off"
									
									style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0.50);"> 
								</div>

								<!-- LAYER NR. 2 -->
								<div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-282-layer-8" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['-230','-68','-78','-78']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];" 
									 data-mask_out="x:inherit;y:inherit;" 
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 6; white-space: nowrap;"><i class="fa-icon-send"></i> 
								</div>

								<!-- LAYER NR. 3 -->
								<div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-282-layer-1" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['-170','0','-22','-29']" 
									data-fontsize="['50','70','40','30']"
									data-lineheight="['50','70','40','30']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:0px;" 
									 data-mask_out="x:inherit;y:inherit;" 
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap; font-size: 50px; line-height: 50px;">Welcome To Genesis AR
								</div>


								<!-- LAYER NR. 3 -->
								<div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-282-layer-1" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['-110','0','-22','-29']" 
									data-fontsize="['30','70','40','30']"
									data-lineheight="['50','70','40','30']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:0px;" 
									 data-mask_out="x:inherit;y:inherit;" 
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap; font-size: 50px; line-height: 50px;">The Worlds First AR Card Game.
								</div>


								<!-- LAYER NR. 4 -->
								<div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-282-layer-4" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['-60','52','18','7']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];" 
									 data-mask_out="x:inherit;y:inherit;" 
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 8; white-space: nowrap;">To receive your free characters, please complete the following:
								</div>

									<form action="index.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="revtp-form" novalidate>
										<!-- LAYER NR. 5 -->


										<div class="tp-caption NotGeneric-CallToAction   rs-parallaxlevel-0" 
											 id="slide-282-layer-11" 
											 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
											 data-y="['center','center','center','center']" data-voffset="['0','336','252','191']" 
											data-width="none"
											data-height="none"
											data-whitespace="nowrap"
											data-transform_idle="o:1;"
												data-style_hover="cursor:default;"
								 
											 data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" 
											 data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
											data-start="1000" 
											data-splitin="none" 
											data-splitout="none" 
											data-responsive_offset="on" 
											data-responsive="off"
											
											style="z-index: 9; white-space: nowrap;padding:0px 0px 0px 0px;border-color:rgba(255, 255, 255, 0);border-style:none;">
		
		 										<input type="text" value="" name="NAME" class="name" id="contact-NAME" placeholder="Your Name" required> 
		
										</div> 
																				<!-- LAYER NR. 5 -->
										<div class="tp-caption NotGeneric-CallToAction   rs-parallaxlevel-0" 
											 id="slide-282-layer-11" 
											 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
											 data-y="['center','center','center','center']" data-voffset="['55','336','252','191']" 
														data-width="none"
											data-height="none"
											data-whitespace="nowrap"
											data-transform_idle="o:1;"
												data-style_hover="cursor:default;"
								 
											 data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" 
											 data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
											data-start="1000" 
											data-splitin="none" 
											data-splitout="none" 
											data-responsive_offset="on" 
											data-responsive="off"
											
											style="z-index: 9; white-space: nowrap;padding:0px 0px 0px 0px;border-color:rgba(255, 255, 255, 0);border-style:none;">
		
		 										<input type="text" value="" name="EMAIL" class="email" id="contact-EMAIL" placeholder="Your Email Address" required> 
												
		
										</div> 

										<div class="tp-caption NotGeneric-CallToAction   rs-parallaxlevel-0" 
											 id="slide-282-layer-11" 
											 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
											 data-y="['center','center','center','center']" data-voffset="['110','336','252','191']" 
														data-width="none"
											data-height="none"
											data-whitespace="nowrap"
											data-transform_idle="o:1;"
												data-style_hover="cursor:default;"
								 
											 data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" 
											 data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
											data-start="1000" 
											data-splitin="none" 
											data-splitout="none" 
											data-responsive_offset="on" 
											data-responsive="off"
											
											style="z-index: 9; white-space: nowrap;padding:0px 0px 0px 0px;border-color:rgba(255, 255, 255, 0);border-style:none;">
		
		 										<input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="button" style="display:inline-block; width: 139px; margin-left:-5px;">
												
		
										</div> 
										
								</form>

								
							</li>
						</ul>
						<div class="tp-static-layers"></div>
						<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
					</div>
				</div><!-- END REVOLUTION SLIDER -->
				<script type="text/javascript">
					var tpj=jQuery;					
					var revapi100;
					tpj(document).ready(function() {
						if(tpj("#rev_slider_100_1").revolution == undefined){
							revslider_showDoubleJqueryError("#rev_slider_100_1");
						}else{
							revapi100 = tpj("#rev_slider_100_1").show().revolution({
								sliderType:"hero",
								jsFileLocation:"../../revolution/js/",
								sliderLayout:"fullscreen",
								dottedOverlay:"none",
								delay:9000,
								navigation: {
								},
								responsiveLevels:[1240,1024,778,480],
								gridwidth:[1240,1024,778,480],
								gridheight:[800,500,400,300],
								lazyType:"none",
								parallax: {
									type:"mouse",
									origo:"slidercenter",
									speed:2000,
									levels:[2,3,4,5,6,7,12,16,10,50],
								},
								shadow:0,
								spinner:"off",
								autoHeight:"off",
								disableProgressBar:"on",
								hideThumbsOnMobile:"off",
								hideSliderAtLimit:0,
								hideCaptionAtLimit:0,
								hideAllCaptionAtLilmit:0,
								debugMode:false,
								fallbacks: {
									simplifyAll:"off",
									disableFocusListener:false,
								}
							});
						}
					});	/*ready*/
				</script>
			</article>
		</section>
			</body>
</html>
