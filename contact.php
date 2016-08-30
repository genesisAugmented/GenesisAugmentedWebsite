<?php
if(isset($_POST['EMAIL']) && isset($_POST['CONTENT'])){
	require_once('scripts/connect-to-mysqli.php');

	$email = $_POST['EMAIL'];
	$content = $_POST['CONTENT'];

	$insert_query = mysqli_query($mysqli, "INSERT INTO emails(email, date_added)
									VALUES('$email',now())") or die(mysqli_error($mysqli));

	$to = "ryan@genesisaugmented.com";

	$subject = 'INQUIRY FROM ' . $email;

	$headers = "From: " . strip_tags($email) . "\r\n";
	$headers .= "Reply-To: ". $to . "\r\n";
	$headers .= "CC: ryan@genesisaugmented.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$response_message = '<html><body>';
	$response_message .= "<h3>".$email." has contacted you.</h3>";
	$response_message .= "<br /><p>".$content."</p>";
	$response_message .= "</body></html>";

	mail($to, "Contact from: ".$email, $response_message, $headers);

	header("Location: index.php");
	exit();
}
?>

<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

	<head>
		<title>Genesis Launchpad</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- OpenGraph Data -->
		<meta property="og:url" content="http://genesisaugmented.com" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Genesis Augmented" />
		<meta property="og:description" content="Calling all gamers! Introducting Genesis Augmented, a seamless combination of the latest augmented reality technology with hardcore battle systems. Who will emerge victorious? You decide." />
		<meta property="og:image" content="http://genesisaugmented.com/images/header-bg.jpg" />
		<meta property="fb:app_id" content="1622234504755688" />

		<meta name="google-site-verification" content="uyoHE6B_36C60PXCbqc3GId1A-3CPoa0NyuevCzkrJo" />

		<!-- LOAD JQUERY LIBRARY -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

		<!-- LOADING FONTS AND ICONS -->
		<link href="http://fonts.googleapis.com/css?family=Raleway:400,500,600" rel="stylesheet" property="stylesheet" type="text/css" media="all" />

		<link rel="stylesheet" type="text/css" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">

		<!-- REVOLUTION STYLE SHEETS -->
		<link rel="stylesheet" type="text/css" href="css/settings.css">
		<!-- REVOLUTION LAYERS STYLES -->
					<link rel="stylesheet" type="text/css" href="css/layers.css">

			<!-- REVOLUTION NAVIGATION STYLES -->
			<link rel="stylesheet" type="text/css" href="css/navigation.css">

			<link rel="stylesheet" type="text/css" href="css/noneed.css">
					<!-- REVOLUTION JS FILES -->
		<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>

		<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
		<script type="text/javascript" src="js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.carousel.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.video.min.js"></script>

		<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','https://connect.facebook.net/en_US/fbevents.js');

		fbq('init', '114254225605029');
		fbq('track', "PageView");</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=114254225605029&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-81823802-1', 'auto');
		  ga('send', 'pageview');
		</script>

	</head>


	<body>

		<?php include_once "facebookSDK.php"; ?>

		<!-- SLIDER EXAMPLE -->
		<section class="example">
			<article class="content">


				<div id="rev_slider_100_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="newsletter-hero72" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
					<div id="rev_slider_100_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
						<ul>	<!-- SLIDE  -->
							<li data-index="rs-282" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="../../assets/images/pierbg-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Intro" data-description="">
								<!-- MAIN IMAGE -->
								<img src="img/story-bg.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
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
									 data-y="['middle','top','top','top']" data-voffset="['-230','-30','-50','-100']"
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
									 data-y="['middle','top','top','top']" data-voffset="['-170','20','20','-50']"
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
									 style="z-index: 7; white-space: nowrap; font-size: 50px; line-height: 50px;">SEND US A MESSAGE
								</div>

								<!-- LAYER NR. 4 -->
								<div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0"
									 id="slide-282-layer-4"
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
									 data-y="['middle','top','top','top']" data-voffset="['-110','130','80','0']"
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
									 style="z-index: 8; white-space: nowrap;">POWERED BY GENESIS MAIL
								</div>

									<form action="contact.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="revtp-form" novalidate>
										<!-- LAYER NR. 5 -->
										<div class="tp-caption NotGeneric-CallToAction   rs-parallaxlevel-0"
											 id="slide-282-layer-11"
											 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
											 data-y="['top','top','top','top']" data-voffset="['346','180','140','100']"
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
													<textarea value="" name="CONTENT" id="contact-CONTENT" style="width: 440px; font-size: 20px; height: 200px; border: 0; padding: 10px 20px; line-height: 22px;" placeholder="Your Query..." required></textarea>
										</div>


																				<!-- LAYER NR. 5 -->
										<div class="tp-caption NotGeneric-CallToAction   rs-parallaxlevel-0"
											 id="slide-282-layer-11"
											 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
											 data-y="['center','center','center','center']" data-voffset="['200','200','220','250']"
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
