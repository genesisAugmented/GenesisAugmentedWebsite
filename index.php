<?php
require 'scripts/connect-to-mysqli.php';
if(isset($_POST['EMAIL']))	{
	$email = $_POST['EMAIL'];
	$sql = mysqli_query($mysqli, "INSERT INTO emails(email, date_added)
									VALUES('$email', now())") or die(mysqli_error($mysqli));

	header("Location: thankyou.php");
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
<!-- 		<script type="text/javascript" src="js/jquery.min.js"></script> -->

		<!-- LOADING FONTS AND ICONS -->
		<link href="http://fonts.googleapis.com/css?family=Raleway:300,500,800" rel="stylesheet" property="stylesheet" type="text/css" media="all" />

		<link rel="stylesheet" type="text/css" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">

		<!-- REVOLUTION STYLE SHEETS -->
		<link rel="stylesheet" type="text/css" href="css/settings.css">
		<!-- REVOLUTION LAYERS STYLES -->
		<link rel="stylesheet" type="text/css" href="css/layers.css">

		<style>
		.white-popup {
		  position: relative;
		  background: #FFF;
		  padding: 25px;
		  width: auto;
		  max-width: 400px;
		  margin: 0 auto;
		}
		</style>

		<!-- REVOLUTION NAVIGATION STYLES -->
		<link rel="stylesheet" type="text/css" href="css/navigation.css">

		<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

		<!-- <link rel="stylesheet" type="text/css" href="css/noneed.css"> -->

		<!-- REVOLUTION JS FILES -->
		<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>

		<!-- Facebook Pixel Code -->
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

	<body style="margin: 0;">

		<?php include_once "facebookSDK.php"; ?>
<!--
		 HEADER
		<article class="content">
			 Add your site or application content here
			<section class="header" style="height: 100px;">
				<span class="logo" style="float:left"><img src="img/logo.png" style="width: 100%; height: 100%;" /></span>
 				<a class="button" style="float:right" href="http://www.themepunch.com/revsliderjquery-doc/slider-revolution-jquery-5-x-documentation/"><i class="pe-7s-help2"></i>Online Documentation</a>
				<div class="clearfix"></div>
			</section>
		</article>
-->

<!--
		<article class="small-history">
			<h2 class="textaligncenter" style="margin-bottom:25px;">Image Hero</h2>
			<p>The Slider below is a classic Hero Image Slider with 1 Slide without any Navigation or progression bar. Slider Revolution offers millions of layout combinations.</p>
		</article>
-->

		<!-- SLIDER EXAMPLE -->
		<section class="example">
			<article class="content">


				<div id="rev_slider_20_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="image-hero20" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
					<div id="rev_slider_20_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
						<ul>	<!-- SLIDE  -->
							<li data-index="rs-68" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="img/notgenericherobg.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Home" data-description="">
								<!-- MAIN IMAGE -->
								<img src="img/background_withoutlogo.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->

								<!-- LAYER NR. 1 -->
								<div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0"
									 id="slide-68-layer-10"
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

									style="z-index: 5;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0.50);">
								</div>

								<!-- LAYER NR. 2 -->
								<div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0"
									id="slide-68-layer-1"
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
									data-y="['middle','top','top','middle']" data-voffset="['-200','100','90','-15']"
									data-fontsize="['32','40','28','18']"
									data-lineheight="['70','70','40','50']"
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
									style="z-index: 7; white-space: nowrap;">Crowdfunding Soon
								</div>

								<!-- LAYER NR. 3 -->
<!--
								<div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0"
									 id="slide-68-layer-8"
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
									 data-y="['middle','middle','middle','middle']" data-voffset="['-120','-68','-78','20']"
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"

									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
									data-start="1000"
									data-splitin="none"
									data-splitout="none"
									data-responsive_offset="on"


									style="z-index: 6; white-space: nowrap;"><img src="img/Assets/line.png" data-ww="['270px','300px','300px','120px']" data-hh="['50px','80px','80px','22px']" data-no-retina />
								</div>
-->
<!--
	                            <a class="tp-caption Agency-Social tp-resizeme"
		                        	data-actions=''
									data-basealign="slide"
									data-hoffset="['-110','-30','-30','-60']"
									data-voffset="['-120','30','30','20']"
									data-responsive_offset="on"
									data-splitin="none"
									data-splitout="none"
									data-start="1000"
									data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(51, 51, 51, 1.00);"
									data-transform_hover="o:1;rX:0;rY:0;z:0;s:400;e:Power1.easeInOut;"
									data-transform_idle="o:1;"
									data-transform_in="y:50px;opacity:0;s:1500;e:Power2.easeInOut;"
									data-transform_out="opacity:0;s:300;s:300;"
									data-whitespace="normal"
									data-width="['60','50','50','30']"
									data-height="['60','50','50','30']"
									data-lineheight="['60','30','30','30']"
									data-fontsize="['32','30','30','20']"
									data-x="['center','center','center','center']"
									data-y="['center','center','center','center']"
									href="https://www.facebook.com/Genesisaugmentedreality/"
									id="slide-898-layer-10"
									style="z-index: 12; min-width: 50px; white-space: normal;text-align:center;cursor:pointer;" target="_blank">
										<i class="fa-icon-facebook"></i>
								</a> -->

								<!-- <a class="tp-caption Agency-Social tp-resizeme"
		                        	data-actions=''
									data-basealign="slide"
									data-hoffset="['-40','-30','-30','-20']"
									data-voffset="['-120','30','30','20']"
									data-responsive_offset="on"
									data-splitin="none"
									data-splitout="none"
									data-start="1000"
									data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(51, 51, 51, 1.00);"
									data-transform_hover="o:1;rX:0;rY:0;z:0;s:400;e:Power1.easeInOut;"
									data-transform_idle="o:1;"
									data-transform_in="y:50px;opacity:0;s:1500;e:Power2.easeInOut;"
									data-transform_out="opacity:0;s:300;s:300;"
									data-whitespace="normal"
									data-width="['60','50','50','30']"
									data-height="['60','50','50','30']"
									data-lineheight="['60','30','30','30']"
									data-fontsize="['32','30','30','20']"
									data-x="['center','center','center','center']"
									data-y="['center','center','center','center']"
									href="https://twitter.com/Genesis__AR"
									id="slide-898-layer-10"
									style="z-index: 12; min-width: 50px; white-space: normal;text-align:center;cursor:pointer;" target="_blank">
										<i class="fa-icon-twitter"></i>
								</a> -->

	                            <!-- <a class="tp-caption Agency-Social tp-resizeme"
		                        	data-actions=''
									data-basealign="slide"
									data-hoffset="['30','-30','-30','20']"
									data-voffset="['-120','30','30','20']"
									data-responsive_offset="on"
									data-splitin="none"
									data-splitout="none"
									data-start="1000"
									data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(51, 51, 51, 1.00);"
									data-transform_hover="o:1;rX:0;rY:0;z:0;s:400;e:Power1.easeInOut;"
									data-transform_idle="o:1;"
									data-transform_in="y:50px;opacity:0;s:1500;e:Power2.easeInOut;"
									data-transform_out="opacity:0;s:300;s:300;"
									data-whitespace="normal"
									data-width="['60','50','50','30']"
									data-height="['60','50','50','30']"
									data-lineheight="['60','30','30','30']"
									data-fontsize="['32','30','30','20']"
									data-x="['center','center','center','center']"
									data-y="['center','center','center','center']"
									href="https://www.youtube.com/user/ryanneale3"
									id="slide-898-layer-10"
									style="z-index: 12; min-width: 50px; white-space: normal;text-align:center;cursor:pointer;" target="_blank">
										<i class="fa-icon-youtube"></i>
								</a> -->

	                            <!-- <a class="tp-caption Agency-Social tp-resizeme"
		                        	data-actions=''
									data-basealign="slide"
									data-hoffset="['100','-30','-30','60']"
									data-voffset="['-120','30','30','20']"
									data-responsive_offset="on"
									data-splitin="none"
									data-splitout="none"
									data-start="1000"
									data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(51, 51, 51, 1.00);"
									data-transform_hover="o:1;rX:0;rY:0;z:0;s:400;e:Power1.easeInOut;"
									data-transform_idle="o:1;"
									data-transform_in="y:50px;opacity:0;s:1500;e:Power2.easeInOut;"
									data-transform_out="opacity:0;s:300;s:300;"
									data-whitespace="normal"
									data-width="['60','50','50','30']"
									data-height="['60','50','50','30']"
									data-lineheight="['60','30','30','30']"
									data-fontsize="['32','30','30','20']"
									data-x="['center','center','center','center']"
									data-y="['center','center','center','center']"
									href="https://www.instagram.com/genesisar_official/"
									id="slide-898-layer-10"
									style="z-index: 12; min-width: 50px; white-space: normal;text-align:center;cursor:pointer;" target="_blank">
										<i class="fa-icon-instagram"></i>
								</a> -->


							<!-- LAYER NR. 4 -->
							<div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0"
								 id="slide-68-layer-1"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['-50','0','0','50']"
								 data-fontsize="['40','32','26','20']"
								 data-lineheight="['60','40','30','30']"
								 data-width="['800','600','500','400']"
								 data-height="none"
								 data-transform_idle="o:1;"
								 data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
								 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
								 data-mask_in="x:0px;y:0px;"
								 data-mask_out="x:inherit;y:inherit;"
								 data-start="1000"
								 data-splitin="none"
								 data-splitout="none"
								 data-responsive_offset="on"
								 style="z-index: 7; white-space: pre-wrap; text-align: center; font-weight: 300">Blurring The Lines Between Real and Make Believe. You Become the Hero
							</div>


                            <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-shape tp-shapewrapper"
                data-basealign="slide"
	              data-end="bytrigger"
		            data-height="full"
			          data-hoffset="['0','0','0','0']"
				        data-lasttriggerstate="reset"
					      data-responsive="off"
						    data-responsive_offset="off"
								data-start="bytrigger"
								data-transform_idle="o:1;"
								data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;"
								data-transform_out="opacity:0;s:500;s:500;"
								data-voffset="['0','0','0','0']"
								data-whitespace="nowrap"
								data-width="full"
								data-x="['center','center','center','center']"
								data-y="['middle','middle','middle','middle']"
								id="slide-898-layer-19"
								style="z-index: 6;background-color:rgba(0, 0, 0, 0.75);border-color:rgba(0, 0, 0, 0);">
              </div>

                            <!-- LAYER NR. 6 -->
              <div class="tp-caption Agency-PlayBtn rev-btn tp-resizeme"
								id="slide-898-layer-17"
							  data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-898-layer-18","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-898-layer-18","delay":""},{"event":"click","action":"startlayer","layer":"slide-898-layer-15","delay":""},{"event":"click","action":"startlayer","layer":"slide-898-layer-19","delay":""},{"event":"click","action":"startlayer","layer":"slide-898-layer-20","delay":"1000"},{"event":"click","action":"playvideo","layer":"slide-898-layer-15","delay":"1000"}]'
				        data-hoffset="['0','0','0','0']"
								data-x="['center','center','center','center']"
								data-y="['middle','middle','middle','top']"
					      data-voffset="['110','80','70', '60']"
					      data-responsive_offset="on"
						    data-splitin="none"
							  data-splitout="none"
								data-start="1000"
								data-style_hover="c:rgba(255, 255, 255, 1.00);"
								data-transform_hover="o:1;sX:1.1;sY:1.1;rX:0;rY:0;rZ:0;z:0;s:500;e:Power1.easeInOut;"
								data-transform_idle="o:1;"
								data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;"
								data-transform_out="opacity:0;s:300;s:300;"
								data-whitespace="nowrap"
								data-lineheight="['140','90','70','45']"
								data-width="['140','90','75','50']"
								data-height="['140','90','75','50']"
								data-fontsize="['60','40','40','22']"
								style="z-index: 10; white-space: nowrap;text-align:center;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                      <i class="fa-icon-play"></i>
                </div>

                            <!-- LAYER NR. 7 -->
                            <!-- <div class="tp-caption Agency-SmallText tp-resizeme"
	                            data-elementdelay="0.03"
		                        data-end="bytrigger"
			                    data-height="none"
				                data-hoffset="['0','0','0','0']"
					            data-voffset="['230','130','130','130']"
					            data-lasttriggerstate="reset"
						        data-mask_in="x:0px;y:0px;"
							    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
								data-responsive_offset="on"
								data-splitin="chars"
								data-splitout="none"
								data-start="bytrigger"
								data-transform_idle="o:1;"
								data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:500;e:Power2.easeInOut;"
								data-transform_out="y:[-100%];s:500;s:500;"
								data-whitespace="nowrap"
								data-width="none"
								data-x="['center','center','center','center']"
								data-y="['middle','middle','middle','middle']"
								id="slide-898-layer-18"
								style="z-index: 11; font-family: Raleway; font-weight: 800; white-space: nowrap;">
                                PLAY VIDEO
                            </div> -->
                            <!-- LAYER NR. 8 -->


                            <!-- LAYER NR. 9
                            <a class="tp-caption Agency-Social tp-resizeme"
	                            data-actions=''
		                        data-basealign="slide"
			                    data-height="50"
				                data-hoffset="['30','30','30','30']"
					            data-responsive_offset="on"
						        data-splitin="none"
							    data-splitout="none"
								data-start="3250"
								data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(51, 51, 51, 1.00);"
								data-transform_hover="o:1;rX:0;rY:0;rZ:360;z:0;s:400;e:Power1.easeInOut;"
								data-transform_idle="o:1;"
								data-transform_in="y:50px;rZ:60deg;opacity:0;s:1500;e:Power2.easeInOut;"
								data-transform_out="opacity:0;s:300;s:300;"
								data-voffset="['30','30','30','30']"
								data-whitespace="normal"
								data-width="50"
								data-x="['center','center','center','center']"
								data-y="['bottom','bottom','bottom','bottom']"
								href="https://twitter.com/themepunch"
								id="slide-898-layer-11"
								style="z-index: 13; min-width: 50px; max-width: 50px; max-width: 50px; max-width: 50px; white-space: normal;text-align:center;cursor:pointer;" target="_blank">
									<i class="fa-icon-twitter"></i>
								</a>
-->

                            <!-- LAYER NR. 10 -->
<!--
                            <div class="tp-caption tp-resizeme tp-videolayer"
	                            data-autoplay="off"
		                        data-end="bytrigger"
			                    data-hoffset="['0','0','0','0']"
				                data-lasttriggerstate="reset"
					            data-responsive_offset="on"
						        data-start="bytrigger"
							    data-transform_idle="o:1;"
								data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
								data-transform_out="auto:auto;s:300;"
								data-videoattributes="title=0&byline=0&portrait=0&api=1"
								data-videoheight="['540px','405px','270px','203px']"
								data-videoloop="none"
								data-videowidth="['960px','720px','480px','360px']"
								data-vimeoid="142874198"
								data-voffset="['0','0','0','0']"
								data-volume="100"
								data-whitespace="nowrap"
								data-x="['center','center','center','center']"
								data-y="['middle','middle','middle','middle']"
								id="slide-898-layer-15" style="z-index: 14;">
							</div>
-->

	            <div class="tp-caption tp-resizeme tp-videolayer"
								 id="slide-898-layer-15"
								 data-x="center"
								 data-hoffset="['0','0','0','0']"
								 data-y="center"
								 data-voffset="['-20','0','0','0']"
								 data-width="['auto']"
								 data-height="['auto']"
								 data-transform_idle="o:1;"
								 data-end="bytrigger"
								 data-start="bytrigger"
								 data-lasttriggerstate="reset"
								 data-transform_in="opacity:0;s:300;e:Power2.easeInOut;"
								 data-transform_out="opacity:0;s:300;s:300;"
								 data-start="500"
								 data-responsive_offset="on"
								 data-ytid="nj-19v_zPes"
								 data-videoattributes="version=3&amp;enablejsapi=1&amp;html5=1&amp;volume=100&hd=1&amp;wmode=opaque&amp;showinfo=0&amp;ref=0;;origin=http://server.local;"
								 data-videorate="1"
								 data-videowidth="['1230px','950px','750px','480px']"
								 data-videoheight="['692px','450px','370px','300px']"
								 data-videocontrols="controls"
								 data-videoloop="none"
								 data-autoplay="off"
								 data-volume="100" data-forcerewind="on"
								 style="z-index: 14;">
							</div>

                            <!-- LAYER NR. 11 -->
             <div class="tp-caption Agency-CloseBtn rev-btn"
						 		id="slide-898-layer-20"
		            data-actions='[{"event":"click","action":"stoplayer","layer":"slide-898-layer-15","delay":""},{"event":"click","action":"stoplayer","layer":"slide-898-layer-19","delay":""},{"event":"click","action":"stoplayer","layer":"slide-898-layer-20","delay":""}]'
			          data-end="bytrigger"
				        data-height="none"
								data-x="['center','center','right','center']"
								data-y="['middle','middle','middle','middle']"
				        data-hoffset="['510','389','40','199']"
								data-voffset="['-298','-200','-163','-118']"
					      data-lasttriggerstate="reset"
						  	data-responsive="off"
							  data-responsive_offset="on"
								data-splitin="none"
								data-splitout="none"
								data-start="bytrigger"
								data-style_hover="c:rgba(255, 255, 255, 1.00);"
								data-transform_hover="o:1;sX:1.1;sY:1.1;rX:0;rY:0;rZ:0;z:0;s:500;e:Power1.easeInOut;"
								data-transform_idle="o:1;"
								data-transform_in="z:0;rX:0;rY:0;rZ:45deg;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:500;e:Power3.easeInOut;"
								data-transform_out="auto:auto;s:500;"
								data-whitespace="nowrap"
								data-width="50"
								style="z-index: 15; min-width: 50px; max-width: 50px; white-space: nowrap;text-align:center;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                    <i class="pe-7s-close"></i>
                </div>


								                            <!-- LAYER NR. 6
                            <div class="tp-caption Agency-PlayBtn rev-btn tp-resizeme"
	                            data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-68-layer-30","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-68-layer-30","delay":""},{"event":"click","action":"startlayer","layer":"slide-68-layer-31","delay":""},{"event":"click","action":"startlayer","layer":"slide-898-layer-32","delay":""},{"event":"click","action":"startlayer","layer":"slide-898-layer-20","delay":"1000"},{"event":"click","action":"playvideo","layer":"slide-68-layer-31","delay":"1000"}]'
		                            data-height="none"
			                        data-hoffset="['0','0','0','0']"
				                    data-responsive_offset="on"
					                data-splitin="none"
						            data-splitout="none"
							        data-start="2000"
								    data-style_hover="c:rgba(255, 255, 255, 1.00);"
									data-transform_hover="o:1;sX:1.1;sY:1.1;rX:0;rY:0;rZ:0;z:0;s:500;e:Power1.easeInOut;"
									data-transform_idle="o:1;"
									data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;"
									data-transform_out="opacity:0;s:300;s:300;"
									data-voffset="['51','53','38','39']"
									data-whitespace="nowrap"
									data-width="75"
									data-x="['center','center','center','center']"
									data-y="['middle','middle','middle','middle']"
									id="slide-68-layer-31"
									style="z-index: 10; min-width: 75px; max-width: 75px; white-space: nowrap;text-align:center;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                <i class="fa-icon-play"></i>
                            </div>

								                           <!-- LAYER NR. 7
                            <div class="tp-caption Agency-SmallText tp-resizeme"
	                             id="slide-68-layer-30"
	                            data-elementdelay="0.05"
		                            data-end="bytrigger"
			                        data-height="none"
				                    data-hoffset="['0','0','0','0']"
									data-lasttriggerstate="reset"
						            data-mask_in="x:0px;y:0px;"
							        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
								                        data-responsive_offset="on" data-splitin="chars" data-splitout="none" data-start="bytrigger" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:500;e:Power2.easeInOut;" data-transform_out="y:[-100%];s:500;s:500;" data-voffset="['114','116','102','102']" data-whitespace="nowrap" data-width="none" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']"style="z-index: 11; white-space: nowrap;">
                                PLAY VIDEO
                            </div>


<!--
								<div styl>
									<img src="img/Assets/logo.png" />
								</div>
-->

								<!-- LAYER NR. 6 -->
								<div class="tp-caption  rs-parallaxlevel-0"
									id="slide-68-layer-20"
									data-x="['left','center','center','left']" data-hoffset="['20','-5','-5','10']"
									data-y="['top','top','top','top']" data-voffset="['-5','10','10','-10']"
									data-width="['300','200','200','110']"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
									data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
								 	data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
								 	data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
								 	data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
									data-start="1250"
									data-splitin="none"
									data-splitout="none"
									data-responsive_offset="on"
									data-responsive="off"
									style="z-index: 9; padding:15px 0; text-align: center; white-space: nowrap;outline:none;box-shadow:none;">
										<img src="img/Assets/logo.png" data-ww="['300px','200px','200px','140px']" data-hh="['80px','60px','55px','45px']" />
								</div>

								<!-- LAYER NR. 2 -->
								<a href="#" class="popupstart">
									<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0"
										 id="slide-68-layer-1"
										 data-x="['right','right','left','right']" data-hoffset="['0','20','20','20']"
										 data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
										data-fontsize="['16','16','16','12']"
										data-lineheight="['70','70','70','50']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
										 data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
										 data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
										 data-mask_in="x:0px;y:0px;"
										data-start="1250"
										data-splitin="none"
										data-splitout="none"
										data-responsive_offset="on"
										style="z-index: 7; white-space: nowrap;">SUBSCRIBE
									</div>
								</a>

								<!-- LAYER NR. 2 -->
								<a href="contact.php" target="_blank">
									<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0"
										 id="slide-68-layer-1"
										 data-x="['right','right','right','right']" data-hoffset="['125','140','20','0']"
										 data-y="['top','top','top','top']" data-voffset="['0','0','0','-200']"
										data-fontsize="['16','16','16','16']"
										data-lineheight="['70','70','70','50']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
										 data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
										 data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
										 data-mask_in="x:0px;y:0px;"
										data-start="1250"
										data-splitin="none"
										data-splitout="none"
										data-responsive_offset="on"
										style="z-index: 7; white-space: nowrap;">CONTACT
									</div>
								</a>

								<!-- LAYER NR. 2 -->
								<!-- <a href="http://genesisarblog.wordpress.com" target="_blank">
									<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0"
										 id="slide-68-layer-1"
										 data-x="['right','right','right','right']" data-hoffset="['225','0','0','0']"
										 data-y="['top','top','top','top']" data-voffset="['0','0','0','-200']"
										data-fontsize="['16','16','16','16']"
										data-lineheight="['70','70','70','50']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
										 data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
										 data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
										 data-mask_in="x:0px;y:0px;"
										data-start="1250"
										data-splitin="none"
										data-splitout="none"
										data-responsive_offset="on"
										style="z-index: 7; white-space: nowrap;">DEV BLOG
									</div>
								</a>


								<a href="hhttp://www.genesisar.com/creationix/" target="_blank">
									<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0"
										 id="slide-68-layer-1"
										 data-x="['right','right','right','right']" data-hoffset="['345','0','0','0']"
										 data-y="['top','top','top','top']" data-voffset="['0','0','0','-200']"
										data-fontsize="['16','16','16','16']"
										data-lineheight="['70','70','70','50']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
										 data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
										 data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
										 data-mask_in="x:0px;y:0px;"
										data-start="1250"
										data-splitin="none"
										data-splitout="none"
										data-responsive_offset="on"
										style="z-index: 7; white-space: nowrap;">CREATE A CARD
									</div>
								</a>


								<a href="generic/otherdriftors.php" target="_blank">
									<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0"
										 id="slide-68-layer-1"
										 data-x="['right','right','right','right']" data-hoffset="['505','0','0','100']"
										 data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
										data-fontsize="['16','16','16','12']"
										data-lineheight="['70','70','70','50']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
										 data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
										 data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
										 data-mask_in="x:0px;y:0px;"
										data-start="1250"
										data-splitin="none"
										data-splitout="none"
										data-responsive_offset="on"
										style="z-index: 7; white-space: nowrap;">CHARACTERS
									</div>
								</a> -->

								<!-- LAYER NR. 11 -->
								<div class="tp-caption  rev-btn  rs-parallaxlevel-0"
									 id="slide-68-layer-7"
									 data-x="['right','right','right','right']" data-hoffset="['-30','10','20','0']"
									 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['100','40','20','10']"
									data-width="['240','180','120','110']"
									data-height="50"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"

									 data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
									 data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
									data-start="1250"
									data-splitin="none"
									data-splitout="none"
									data-responsive_offset="on"
									data-responsive="off"

									style="z-index: 9; padding: 0;"><a href="http://blog.up.co/2015/12/07/global-startup-battle-2015-champions-track-finalists/" target="_blank">
										<img src="img/gsb-icon.png" data-ww="['240px','180px','120px','85px']" data-hh="['100px','80px','50px','40px']" data-no-retina /></a>
								</div>

<!--
								 LAYER NR. 11
								<div class="tp-caption  rev-btn  rs-parallaxlevel-0"
									 id="slide-68-layer-7"
									 data-x="['left','left','left','left']" data-hoffset="['-50','0','0','30']"
									 data-y="['bottom','bottom','bottom','top']" data-voffset="['-10','0','0','10']"
									data-width="['50','50','50','50']"

									data-height="50"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"

									 data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
									 data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
									data-start="1000"
									data-splitin="none"
									data-splitout="none"
									data-responsive_offset="on"
									data-responsive="off"

									style="z-index: 9; padding: 0;">

										<div id="fb-root"></div>
										<script>(function(d, s, id) {
										  var js, fjs = d.getElementsByTagName(s)[0];
										  if (d.getElementById(id)) return;
										  js = d.createElement(s); js.id = id;
										  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=765011986932197";
										  fjs.parentNode.insertBefore(js, fjs);
										}(document, 'script', 'facebook-jssdk'));</script>

										<div class="fb-like"
											data-href="https://www.facebook.com/Genesisaugmentedreality/"
										    data-width="40"
											data-layout="box_count"
											data-action="like"
											data-show-faces="false"
											data-share="true">
										</div>
								</div>

								 LAYER NR. 11
								<div class="tp-caption  rev-btn  rs-parallaxlevel-0"
									 id="slide-68-layer-8"
									 data-x="['left','left','left','left']" data-hoffset="['20','0','0','30']"
									 data-y="['bottom','bottom','bottom','top']" data-voffset="['30','0','0','10']"
									data-width="['50','50','50','50']"

									data-height="50"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"

									 data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
									 data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
									data-start="1000"
									data-splitin="none"
									data-splitout="none"
									data-responsive_offset="on"
									data-responsive="off"

									style="z-index: 9; padding: 0;">

<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://genesisar.com" data-text="Check out the worlds first augmented reality trading card game!" data-via="Genesis__AR" data-size="large">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

								</div>


								<div class="tp-caption  rev-btn  rs-parallaxlevel-0"
									 id="slide-68-layer-9"
									 data-x="['left','left','left','left']" data-hoffset="['20','0','0','30']"
									 data-y="['bottom','bottom','bottom','top']" data-voffset="['90','0','0','10']"
									data-width="['50','50','50','50']"

									data-height="50"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"

									 data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
									 data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
									data-start="1000"
									data-splitin="none"
									data-splitout="none"
									data-responsive_offset="on"
									data-responsive="off"

									style="z-index: 9; padding: 0;">

<style>.ig-b- { display: inline-block; }
.ig-b- img { visibility: hidden; }
.ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
.ig-b-48 { width: 48px; height: 48px; background: url(//badges.instagram.com/static/images/ig-badge-sprite-48.png) no-repeat 0 0; }
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (minmoz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
.ig-b-48 { background-image: url(//badges.instagram.com/static/images/ig-badge-sprite-48@2x.png); background-size: 60px 178px; } }</style>
<a href="https://www.instagram.com/genesisar_official/?ref=badge" target="_blank" class="ig-b- ig-b-48"><img src="//badges.instagram.com/static/images/ig-badge-48.png" alt="Instagram" /></a>

								</div>
-->

								<!-- LAYER NR. 11 -->
<!--
								<div class="tp-caption  rev-btn  rs-parallaxlevel-0"
									 id="slide-68-layer-11"
									 data-x="['left','left','left','left']" data-hoffset="['-50','0','0','30']"
									 data-y="['bottom','bottom','bottom','top']" data-voffset="['50','0','0','10']"
									data-width="['50','50','50','50']"

									data-height="50"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"

									 data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
									 data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
									data-start="1000"
									data-splitin="none"
									data-splitout="none"
									data-responsive_offset="on"
									data-responsive="off"

									style="z-index: 5; padding: 0;">

<script src="https://apis.google.com/js/platform.js"></script>

<div class="g-ytsubscribe" data-channelid="UCkPyUgQ149CibyNkClbTeFw" data-layout="full" data-theme="dark" data-count="hidden"></div>
								</div>
-->

								<!-- LAYER NR. 12 -->

								<div class="tp-caption  rev-btn  rs-parallaxlevel-0"
									 id="slide-68-layer-7"
									 data-x="['right','right','right','right']" data-hoffset="['100','0','0','30']"
									 data-y="['bottom','bottom','bottom','top']" data-voffset="['90','124','80','10']"
									data-width="['200','124','80','110']"

									data-height="50"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"

									 data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
									 data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
									data-start="1250"
									data-splitin="none"
									data-splitout="none"
									data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
									data-responsive_offset="on"
									data-responsive="off"

									style="z-index: 9; padding: 0;">
								</div>

								<div id="popup" class="white-popup mfp-with-anim mfp-hide" style="border-radius: 4px;">
									<p style="font-family: 'Ariel', sans-serif; text-align: center; line-height: 34px;">Get exclusive access to the Genesis <span style="color:red;">CLOSED BETA</span> </p>
									<div style="color: grey;">
										<!-- Begin MailChimp Signup Form -->
										<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
										<style type="text/css">
											#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif;}
											#mc_embed_signup label {color: black;}

											#mc-embedded-subscribe {
												background-color: #008000 !important;
												color: white;
												border:0;
												padding: 0 20px;
												font-family: "Arial", sans-serif;
												line-height: 46px;
												letter-spacing: 1px;
												text-transform: uppercase;
												font-size: 15px;
												font-weight: 700;
											}

											/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
											   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
										</style>
										<div id="mc_embed_signup">
										<form action="//genesisaugmented.us1.list-manage.com/subscribe/post?u=7d217728e53617bda27873180&amp;id=c9ce21b1d7" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate popup-form" target="_blank" novalidate>
										    <div id="mc_embed_signup_scroll">

										<!-- <div class="indicates-required"><span class="asterisk">*</span> indicates required</div> -->
										<div class="mc-field-group">
											<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
										</label>
											<input type="email" value="" name="EMAIL" class="required email popup-email" style="width: 100%;" id="mce-EMAIL">
										</div>
										<div class="mc-field-group">
											<label for="mce-FNAME">First Name </label>
											<input type="text" value="" name="FNAME" class="popup-fname" id="mce-FNAME">
										</div>
										<div class="mc-field-group">
											<label for="mce-LNAME">Last Name </label>
											<input type="text" value="" name="LNAME" class="popup-lname" id="mce-LNAME">
										</div>
											<div id="mce-responses" class="clear">
												<div class="response" id="mce-error-response" style="display:none"></div>
												<div class="response" id="mce-success-response" style="display:none"></div>
											</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
										    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7d217728e53617bda27873180_c9ce21b1d7" tabindex="-1" value=""></div>
										    <div class="clear"><br />
													<button name="subscribe" id="mc-embedded-subscribe" class="button popup-submit">Let's Do It!</button>
													<!-- <input type="submit" value="Lets Do It!" name="subscribe" id="mc-embedded-subscribe" class="button popup-submit"> -->
												</div>
										    </div>
										</form>
										</div>

										<!--End mc_embed_signup-->
									</div>
								</div>

								<!-- LAYER NR. 13 -->
								<a href="#" class="popupstart">
									<div class="tp-caption  rev-btn  rs-parallaxlevel-0"
										 id="slide-70-layer-7"
										 data-x="['middle','middle','middle','middle']" data-hoffset="['0','0','0','0']"
										 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['60','20','0','0']"
										 data-width="['220','190','150','120']"
										 data-height="none"
										 data-whitespace="nowrap"
										 data-transform_idle="o:1;"
										 data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										 data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
										 data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
										 data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
										 data-start="1250"
										 data-splitin="none"
										 data-splitout="none"
										 data-responsive_offset="on"
										 data-responsive="off"
										 style="z-index: 9; padding: 0;"><img src="img/button2-09.png"
										 data-ww="['220px','190px','150px','120px']"
										 data-hh="['60px','55px','50px','40px']" data-no-retina/>
									</div>
								</a>

							</li>
						</ul>
						<div class="tp-static-layers"></div>
						<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
					</div>
				</div><!-- END REVOLUTION SLIDER -->
				<script type="text/javascript">
					var tpj=jQuery;
					var revapi20;
					tpj(document).ready(function() {
						if(tpj("#rev_slider_20_1").revolution == undefined){
							revslider_showDoubleJqueryError("#rev_slider_20_1");
						}else{
							revapi20 = tpj("#rev_slider_20_1").show().revolution({
								sliderType:"hero",
								jsFileLocation:"js/",
								sliderLayout:"fullwidth",
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

		<?php include 'subscribe.php'; ?>

		<?php include 'storyline.php'; ?>

		<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

		<script>
		$(".Agency-PlayBtn").on("click", function(){
			fbq('track', 'Lead', {
				content_name: 'Video Lead',
				content_category: 'Play',
			});

			ga('send', 'event', 'Videos', 'play', 'New Hero Page Video');
		});
		</script>

		<script>

			var popupForm = null;

			function openPopup(){
				$.magnificPopup.open({
					items: {
						src: '#popup',
					},
					mainClass: 'mfp-newspaper'
				});
				$("button").prop("disabled", false);
			}

			$(".popupstart").click(function(){
				openPopup();
				ga('send', 'event', 'Signup Button Pressed', 'click', 'Popup Button');
			});
		</script>

		<script>
		$(document).ready(function(){
			var signupButton = $(".popup-submit");

			signupButton.on('click', function(e){
				e.preventDefault();
				var fname = $(".popup-fname").val();
				var lname = $(".popup-lname").val();
				var email = $(".popup-email").val();

				$.ajax({
					type: "POST",
					url: "scripts/emailInsert.php",
					data: {fname: fname, lname: lname, email: email},
					success: function (response) {
						console.log(response);

						ga('send', 'event', 'Signup Form Submit', 'submit', 'Popup Subscribe');
						ga('send', 'event', 'Signup Form', 'submit');

						fbq('track', 'CompleteRegistration', {
								content_name: 'Popup',
								status: 'Beta',
						});
					}
				});

				$(".popup-form").submit();

			});
		});


		// $("#mc-embedded-subscribe-form").on("submit", function(event) {
		// 	event.preventDefault();
		//
		// 	var fname = document.getElementById('mce-FNAME').value;
		// 	var lname = document.getElementById('mce-LNAME').value;
		// 	var email = document.getElementById('mce-EMAIL').value;
		//
		// 	console.log(email);
		//
		// 	$.ajax({
		// 		type: "POST",
		// 		url: "scripts/emailInsert.php",
		// 		data: {fname: fname, lname: lname, email: email},
		// 		success: function (response) {
		// 			console.log(response);
		//
		// 			ga('send', 'event', 'Signup Form Submit', 'submit', 'Popup Subscribe');
		// 			ga('send', 'event', 'Signup Form', 'submit');
		//
		// 			fbq('track', 'CompleteRegistration', {
		// 					content_name: 'Popup',
		// 					status: 'Beta',
		// 			});
		//
		// 			$("#mc-embedded-subscribe-form").submit();
		//
		// 		}
		// 	});
		// });
		</script>

	</body>
</html>
