<?php
include 'scripts/connect-to-mysqli.php';

$character_html = "";
$sql = mysqli_query($mysqli, "SELECT * FROM creature_list ORDER BY id DESC LIMIT 5") or die(mysqli_error($mysqli));
$exists = mysqli_num_rows($sql);
if($exists > 0){
	
	while($row = mysqli_fetch_array($sql)){
		$id = $row['id'];
		$character_name_primary = $row['primary_name'];
		$character_name_secondary = $row['secondary_name'];
		$image_path = "img/cards/".$row['path'];
		$backstory = $row['backstory'];
		$character_html .= '<li data-index="rs-'.$id.'" data-transition="fade" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="500"  data-rotate="0"  data-saveperformance="off"  data-title="Workspace" data-description="">

					<!-- LAYER NR. 1 -->
					<div class="tp-caption   tp-resizeme rs-parallaxlevel-2" 
						 id="slide-'.$id.'-layer-1" 
						 data-x="[\'center\',\'center\',\'center\',\'center\']" data-hoffset="[\'0\',\'0\',\'0\',\'0\']" 
						 data-y="[\'middle\',\'middle\',\'middle\',\'middle\']" data-voffset="[\'0\',\'-60\',\'-100\',\'-50\']" 
						 data-width="none"
						 data-height="none"
						 data-whitespace="nowrap"
						 data-transform_idle="o:1;"
			 
						 data-transform_in="x:right(R);s:800;e:Power4.easeOut;" 
						 data-transform_out="x:left(R);s:800;e:Power4.easeIn;s:800;e:Power4.easeIn;" 
						 data-start="750" 
						 data-responsive_offset="on" 

						
						style="z-index: 5;">
						<img src="' . $image_path . '" alt="" width="1000" height="600" data-ww="[\'500px\',\'500px\',\'500px\',\'400px\']" data-hh="[\'700px\',\'700px\',\'700px\',\'700px\']" data-no-retina> 
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption   tp-resizeme rs-parallaxlevel-2" 
						 id="slide-'.$id.'-layer-11" 
						 data-x="[\'left\',\'center\',\'center\',\'center\']" data-hoffset="[\'535\',\'-1\',\'-1\',\'0\']" 
						 data-y="[\'top\',\'middle\',\'middle\',\'middle\']" data-voffset="[\'215\',\'-67\',\'-107\',\'-56\']" 
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
						data-transform_idle="o:1;"
			 
						 data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power3.easeInOut;" 
						 data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:500;e:Power2.easeInOut;s:500;e:Power2.easeInOut;" 
						 data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
						data-start="1200" 
						data-responsive_offset="on" 

						
						style="z-index: 6;">
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption ContentZoom-SmallTitle   tp-resizeme rs-parallaxlevel-0" 
						 id="slide-'.$id.'-layer-7" 
						 data-x="[\'center\',\'center\',\'center\',\'center\']" data-hoffset="[\'0\',\'0\',\'0\',\'0\']" 
						 data-y="[\'middle\',\'middle\',\'middle\',\'middle\']" data-voffset="[\'124\',\'124\',\'85\',\'105\']" 
									data-width="none"
						data-height="none"
						data-whitespace="nowrap"
						data-transform_idle="o:1;"
			 
						 data-transform_in="y:50px;opacity:0;s:1000;e:Power3.easeInOut;" 
						 data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						 data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
						data-start="1100" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 

						
						style="z-index: 7; white-space: nowrap; color: white;">'.$character_name_primary.'
					</div>

					<!-- LAYER NR. 4 -->
					<div class="tp-caption ContentZoom-SmallSubtitle   tp-resizeme rs-parallaxlevel-0" 
						 id="slide-'.$id.'-layer-9" 
						 data-x="[\'center\',\'center\',\'center\',\'center\']" data-hoffset="[\'0\',\'0\',\'1\',\'0\']" 
						 data-y="[\'middle\',\'middle\',\'middle\',\'middle\']" data-voffset="[\'160\',\'160\',\'121\',\'141\']" 
									data-width="none"
						data-height="none"
						data-whitespace="nowrap"
						data-transform_idle="o:1;"
			 
						 data-transform_in="y:50px;opacity:0;s:1000;e:Power3.easeInOut;" 
						 data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						 data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
						data-start="1150" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 

						
						style="z-index: 8; white-space: nowrap; color: white">'.$character_name_secondary.'
					</div>

					<!-- LAYER NR. 5 -->
					<div class="tp-caption ContentZoom-SmallIcon   tp-resizeme rs-parallaxlevel-0" 
						 id="slide-'.$id.'-layer-13" 
						 data-x="[\'center\',\'center\',\'center\',\'center\']" data-hoffset="[\'-60\',\'-60\',\'-60\',\'-60\']" 
						 data-y="[\'middle\',\'middle\',\'middle\',\'middle\']" data-voffset="[\'224\',\'224\',\'184\',\'205\']" 
									data-width="none"
						data-height="none"
						data-whitespace="nowrap"
						data-transform_idle="o:1;"
							data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
							data-style_hover="c:rgba(111, 124, 130, 1.00);cursor:pointer;"
			 
						 data-transform_in="opacity:0;s:500;e:Power1.easeInOut;" 
						 data-transform_out="opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" 
						data-start="0" 
						data-splitin="none" 
						data-splitout="none" 
						data-actions=\'[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]\'
						data-responsive_offset="on" 

						
						style="z-index: 9; white-space: nowrap; font-size: 30px; line-height: 30px;letter-spacing:2px;font-weight:500; color: white;"><i class="fa-icon-angle-left"></i> 
					</div>

					<!-- LAYER NR. 6 -->
					<div class="tp-caption ContentZoom-SmallIcon   tp-resizeme rs-parallaxlevel-0" 
						 id="slide-'.$id.'-layer-10" 
						 data-x="[\'center\',\'center\',\'center\',\'center\']" data-hoffset="[\'0\',\'0\',\'0\',\'0\']" 
						 data-y="[\'middle\',\'middle\',\'middle\',\'middle\']" data-voffset="[\'224\',\'224\',\'185\',\'205\']" 
									data-width="none"
						data-height="none"
						data-whitespace="nowrap"
						data-transform_idle="o:1;"
							data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
							data-style_hover="c:rgba(111, 124, 130, 1.00);cursor:pointer;"
			 
						 data-transform_in="opacity:0;s:500;e:Power1.easeInOut;" 
						 data-transform_out="opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" 
						data-start="0" 
						data-splitin="none" 
						data-splitout="none" 
						data-actions=\'[{"event":"click","action":"startlayer","layer":"slide-'.$id.'-layer-14","delay":""},{"event":"click","action":"startlayer","layer":"slide-'.$id.'-layer-15","delay":""},{"event":"click","action":"startlayer","layer":"slide-'.$id.'-layer-16","delay":"100"},{"event":"click","action":"startlayer","layer":"slide-'.$id.'-layer-17","delay":"200"},{"event":"click","action":"startlayer","layer":"slide-'.$id.'-layer-19","delay":"300"},{"event":"click","action":"startlayer","layer":"slide-'.$id.'-layer-26","delay":"400"},{"event":"click","action":"startlayer","layer":"slide-'.$id.'-layer-27","delay":"500"}]\'
						data-responsive_offset="on" 

						
						style="z-index: 10; white-space: nowrap;letter-spacing:2px;font-weight:500; color: white;"><i class="fa-icon-info-circle"></i> 
					</div>

					<!-- LAYER NR. 7 -->
					<div class="tp-caption ContentZoom-SmallIcon   tp-resizeme rs-parallaxlevel-0" 
						 id="slide-'.$id.'-layer-12" 
						 data-x="[\'center\',\'center\',\'center\',\'center\']" data-hoffset="[\'60\',\'60\',\'60\',\'60\']" 
						 data-y="[\'middle\',\'middle\',\'middle\',\'middle\']" data-voffset="[\'224\',\'224\',\'184\',\'205\']" 
									data-width="none"
						data-height="none"
						data-whitespace="nowrap"
						data-transform_idle="o:1;"
							data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
							data-style_hover="c:rgba(111, 124, 130, 1.00);cursor:pointer;"
			 
						 data-transform_in="opacity:0;s:500;e:Power1.easeInOut;" 
						 data-transform_out="opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" 
						data-start="0" 
						data-splitin="none" 
						data-splitout="none" 
						data-actions=\'[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]\'
						data-responsive_offset="on" 

						
						style="z-index: 11; white-space: nowrap; font-size: 30px; line-height: 30px;letter-spacing:2px;font-weight:500; color: white;"><i class="fa-icon-angle-right"></i> 
					</div>

					<!-- LAYER NR. 8 -->
					<div class="tp-caption tp-shape tp-shapewrapper tp-shape tp-shapewrapper  rs-parallaxlevel-0" 
						 id="slide-'.$id.'-layer-14" 
						 data-x="[\'center\',\'center\',\'center\',\'center\']" data-hoffset="[\'0\',\'0\',\'0\',\'0\']" 
						 data-y="[\'middle\',\'middle\',\'middle\',\'middle\']" data-voffset="[\'0\',\'0\',\'0\',\'0\']" 
									data-width="full"
						data-height="full"
						data-whitespace="nowrap"
						data-transform_idle="o:1;"
			 
						 data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:700;e:Power3.easeInOut;" 
						 data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
						 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
						data-start="bytrigger" 
						data-basealign="slide" 
						data-responsive_offset="off" 
						data-responsive="off"
						 data-end="bytrigger"
						data-lasttriggerstate="reset"
						style="z-index: 12; background-color:rgba(245, 247, 249, 1.00);border-color:rgba(0, 0, 0, 0);"> 
					</div>

					<!-- LAYER NR. 9 -->
					<div class="tp-caption   tp-resizeme rs-parallaxlevel-0" 
						 id="slide-'.$id.'-layer-15" 
						 data-x="[\'left\',\'left\',\'center\',\'center\']" data-hoffset="[\'60\',\'-50\',\'0\',\'0\']" 
						 data-y="[\'middle\',\'middle\',\'middle\',\'middle\']" data-voffset="[\'-20\',\'0\',\'263\',\'216\']" 
									data-width="none"
						data-height="none"
						data-whitespace="nowrap"
						data-transform_idle="o:1;"
			 
						 data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;" 
						 data-transform_out="x:left;s:700;e:Power3.easeInOut;s:700;e:Power3.easeInOut;" 
						data-start="bytrigger" 
						data-responsive_offset="on" 

						 data-end="bytrigger"
						data-lasttriggerstate="reset"
						style="z-index: 13;"><img src="'.$image_path.'" alt="" width="500" height="700" data-ww="[\'550px\',\'600px\',\'800px\',\'480px\']" data-hh="[\'700px\',\'400px\',\'533px\',\'320px\']" data-no-retina> 
					</div>

					<!-- LAYER NR. 10 -->
					<div class="tp-caption ContentZoom-DetailTitle   tp-resizeme rs-parallaxlevel-0" 
						 id="slide-'.$id.'-layer-16" 
 						 data-x="[\'left\',\'left\',\'center\',\'center\']" data-hoffset="[\'699\',\'598\',\'0\',\'0\']" 
						 data-y="[\'top\',\'top\',\'top\',\'top\']" data-voffset="[\'189\',\'225\',\'125\',\'105\']" 
									data-fontsize="[\'70\',\'50\',\'50\',\'30\']"
						data-lineheight="[\'70\',\'50\',\'50\',\'30\']"
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
						data-transform_idle="o:1;"
			 
						 data-transform_in="y:50px;opacity:0;s:1500;e:Power2.easeInOut;" 
						 data-transform_out="y:50px;opacity:0;s:500;e:Power2.easeIn;s:500;e:Power2.easeIn;" 
						data-start="bytrigger" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 

						 data-end="bytrigger"
						data-lasttriggerstate="reset"
						style="z-index: 14; white-space: nowrap;">'.$character_name_primary.'
					</div>

					<!-- LAYER NR. 11 -->
					<div class="tp-caption ContentZoom-DetailSubTitle   tp-resizeme rs-parallaxlevel-0" 
						 id="slide-'.$id.'-layer-17" 
						 data-x="[\'left\',\'left\',\'center\',\'center\']" data-hoffset="[\'702\',\'600\',\'0\',\'0\']" 
						 data-y="[\'top\',\'top\',\'top\',\'top\']" data-voffset="[\'271\',\'281\',\'181\',\'142\']" 
									data-fontsize="[\'25\',\'20\',\'20\',\'15\']"
						data-lineheight="[\'25\',\'20\',\'20\',\'15\']"
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
						data-transform_idle="o:1;"
			 
						 data-transform_in="y:50px;opacity:0;s:1500;e:Power2.easeInOut;" 
						 data-transform_out="y:50px;opacity:0;s:500;e:Power2.easeIn;s:500;e:Power2.easeIn;" 
						data-start="bytrigger" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 

						 data-end="bytrigger"
						data-lasttriggerstate="reset"
						style="z-index: 15; white-space: nowrap;">'.$character_name_secondary.'
					</div>

					<!-- LAYER NR. 12 -->
					<div class="tp-caption ContentZoom-DetailContent   tp-resizeme rs-parallaxlevel-0" 
						 id="slide-'.$id.'-layer-19" 
						 data-x="[\'left\',\'left\',\'center\',\'center\']" data-hoffset="[\'702\',\'600\',\'0\',\'0\']" 
						 data-y="[\'top\',\'top\',\'top\',\'top\']" data-voffset="[\'341\',\'339\',\'229\',\'186\']" 
									data-fontsize="[\'17\',\'15\',\'15\',\'13\']"
						data-lineheight="[\'28\',\'24\',\'24\',\'22\']"
						data-width="[\'585\',\'472\',\'480\',\'360\']"
						data-height="[\'none\',\'129\',\'129\',\'129\']"
						data-whitespace="normal"
						data-transform_idle="o:1;"
			 
						 data-transform_in="y:50px;opacity:0;s:1500;e:Power2.easeInOut;" 
						 data-transform_out="y:50px;opacity:0;s:500;e:Power2.easeIn;s:500;e:Power2.easeIn;" 
						data-start="bytrigger" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 

						 data-end="bytrigger"
						data-lasttriggerstate="reset"
						style="z-index: 16; min-width: 585px; max-width: 585px; white-space: normal;">'.$backstory.'
					</div>

					<!-- LAYER NR. 13 -->
<!--
					<div class="tp-caption ContentZoom-Button rev-btn  rs-parallaxlevel-0" 
						 id="slide-'.$id.'-layer-26" 
						 data-x="[\'left\',\'left\',\'center\',\'center\']" data-hoffset="[\'703\',\'602\',\'0\',\'0\']" 
						 data-y="[\'top\',\'top\',\'top\',\'top\']" data-voffset="[\'513\',\'492\',\'382\',\'341\']" 
									data-width="none"
						data-height="none"
						data-whitespace="nowrap"
						data-transform_idle="o:1;"
							data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
							data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);bc:rgba(41, 46, 49, 1.00);cursor:pointer;"
			 
						 data-transform_in="y:50px;opacity:0;s:1500;e:Power2.easeInOut;" 
						 data-transform_out="y:50px;opacity:0;s:500;e:Power2.easeIn;s:500;e:Power2.easeIn;" 
						data-start="bytrigger" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						data-responsive="off"
						 data-end="bytrigger"
						data-lasttriggerstate="reset"
						style="z-index: 17; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">VISIT PROJECT 
					</div>
-->

					<!-- LAYER NR. 14 -->
					<div class="tp-caption ContentZoom-ButtonClose rev-btn  rs-parallaxlevel-0" 
						 id="slide-'.$id.'-layer-27" 
						 data-x="[\'right\',\'right\',\'right\',\'right\']" data-hoffset="[\'40\',\'40\',\'40\',\'40\']" 
						 data-y="[\'top\',\'top\',\'top\',\'top\']" data-voffset="[\'40\',\'40\',\'40\',\'40\']" 
									data-width="none"
						data-height="none"
						data-whitespace="nowrap"
						data-transform_idle="o:1;"
							data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
							data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);bc:rgba(41, 46, 49, 1.00);cursor:pointer;"
			 
						 data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
						 data-transform_out="opacity:0;s:700;s:700;" 
						data-start="bytrigger" 
						data-splitin="none" 
						data-splitout="none" 
						data-actions=\'[{"event":"click","action":"stoplayer","layer":"slide-'.$id.'-layer-26","delay":""},{"event":"click","action":"stoplayer","layer":"slide-'.$id.'-layer-19","delay":"50"},{"event":"click","action":"stoplayer","layer":"slide-'.$id.'-layer-17","delay":"100"},{"event":"click","action":"stoplayer","layer":"slide-'.$id.'-layer-16","delay":"150"},{"event":"click","action":"stoplayer","layer":"slide-'.$id.'-layer-15","delay":"200"},{"event":"click","action":"stoplayer","layer":"slide-'.$id.'-layer-27","delay":"250"},{"event":"click","action":"stoplayer","layer":"slide-'.$id.'-layer-14","delay":"300"}]\'
						data-basealign="slide" 
						data-responsive_offset="off" 
						data-responsive="off"
						 data-end="bytrigger"
						data-lasttriggerstate="reset"
						style="z-index: 18; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="fa-icon-remove"></i> 
					</div>
				</li>';
		
	}	
}

?>


<!-- SLIDER EXAMPLE -->
<section class="example">
<article class="content">


	<div id="rev_slider_106_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="content-zoom78" style="background: url('img/banner.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; margin:0px auto;background-color:#eef0f1;margin-top:0px;margin-bottom:0px;">
		<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->

		
		<div id="rev_slider_106_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
			
<!--
		<div class="header-bar">
			<span>CREATURE OF THE VOID</span>
		</div>	
-->
								
			<ul class="slider-id">	<!-- SLIDE  -->
				<?php echo $character_html; ?>	
			</ul>
			
			
			<div class="tp-static-layers">

				<!-- LAYER NR. 1 -->
				<div class="tp-caption -   rs-parallaxlevel-0 tp-static-layer" 
					 id="slide-61-layer-1" 
					 data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']" 
					 data-y="['top','top','top','top']" data-voffset="['30','30','30','30']" 
								data-width="none"
					data-height="none"
					data-whitespace="nowrap"
					data-transform_idle="o:1;"
		 
					 data-transform_in="opacity:0;s:1000;e:Power3.easeInOut;" 
					 data-transform_out="auto:auto;s:1000;" 
					data-start="500" 
					data-splitin="none" 
					data-splitout="none" 
					data-actions='[{"event":"click","action":"toggleclass","layer":"slide-61-layer-1","delay":"0","classname":"open"},{"event":"click","action":"togglelayer","layerstatus":"hidden","layer":"slide-61-layer-3","delay":"0"},{"event":"click","action":"togglelayer","layerstatus":"hidden","layer":"slide-61-layer-4","delay":"0"},{"event":"click","action":"togglelayer","layerstatus":"hidden","layer":"slide-61-layer-5","delay":"0"},{"event":"click","action":"togglelayer","layerstatus":"hidden","layer":"slide-61-layer-6","delay":"0"}]'
					data-basealign="slide" 
					data-responsive_offset="off" 
					data-responsive="off"
					data-startslide="0" 
					data-endslide="2" 
					
					style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
					<div id="rev-burger">
					  <span></span>
					  <span></span>
					  <span></span>
					</div> 
				</div>
			</div>
			<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
		</div>
	</div><!-- END REVOLUTION SLIDER -->
<!-- 				<script type="text/javascript" src="js/jquery.firefly-0.5-min.js"></script> -->
	<script type="text/javascript">
		var tpj=jQuery;							
		var revapi106;
		tpj(document).ready(function() {
			
// 						$.firefly(); 
			
			if(tpj("#rev_slider_106_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_106_1");
			}else{
				revapi106 = tpj("#rev_slider_106_1").show().revolution({
					sliderType:"standard",
					jsFileLocation:"js/",
					sliderLayout:"fullwidth",
					dottedOverlay:"none",
					delay:9000,
					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "vertical",
						mouseScrollNavigation:"off",
						onHoverStop:"off",
						touch:{
							touchenabled:"on",
							swipe_threshold: 75,
							swipe_min_touches: 50,
							swipe_direction: "vertical",
							drag_block_vertical: false
						}
					},
					responsiveLevels:[1240,1024,778,480],
					gridwidth:[1400,1240,778,480],
					gridheight:[1024,768,960,720],
					lazyType:"none",
					parallax: {
						type:"mouse+scroll",
						origo:"slidercenter",
						speed:2000,
						levels:[1,2,3,20,25,30,35,40,45,50],
						disable_onmobile:"on"
					},
					shadow:0,
					spinner:"off",
					stopLoop:"on",
					stopAfterLoops:0,
					stopAtSlide:1,
					shuffle:"off",
					autoHeight:"off",
					disableProgressBar:"on",
					hideThumbsOnMobile:"off",
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
</article>
</section>