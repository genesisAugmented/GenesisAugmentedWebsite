<?php
if(isset($_GET['id'])){
	include_once '../scripts/connect-to-mysqli.php';
	$id = mysqli_real_escape_string($mysqli, $_GET['id']);
	$sql = mysqli_query($mysqli, "SELECT * FROM creature_list WHERE id='$id' LIMIT 1") or die(mysqli_error($mysqli));
	$exists = mysqli_num_rows($sql);
	if($exists > 0){
		while($row = mysqli_fetch_array($sql)){
			$p_name = $row['primary_name'];
			$s_name = $row['secondary_name'];
			$story = $row['backstory'];
			$banner_path = $row['banner_path'];
			$attack_power = $row['attack_power'];
			$ability_power = $row['ability_power'];
			$durability = $row['durability'];
			$rarity = $row['rarity'];
			$complexity = $row['complexity'];
			$ability_icon_array = explode("|", $row['ability_icons']);
			$ability_name_array = explode("|", $row['ability_names']);
			$ability_description_array = explode("|", $row['ability_descriptions']);
			
			if($p_name == "" || $p_name == null){
				$p_name = "Coming Soon";
			}

			if($s_name == "" || $s_name == null){
				$s_name = "";
			}

			if($story == "" || $story == null){
				$story = "Coming Soon";
			}

			if($ability_icon_array[0] == null){
				$ability_icon_array = ["../../images/default.svg", "../../images/default.svg", "../../images/default.svg"];
			}
					
			if($ability_name_array[0] == null){
				$ability_name_array = ["Coming Soon", "Coming Soon", "Coming Soon"];
			}

			if($ability_description_array[0] == null){
				$ability_description_array = ["Not Yet Available", "Not Yet Available", "Not Yet Available"];
			}
			
		}
		
	} else {
		header("Location: otherdriftors.php");
		exit();		
	}
} else {
	header("Location: otherdriftors.php");
	exit();
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Genesis - Story</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		
		<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> -->
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/pie-chart.css" />
		
		<style>
		a {
			text-decoration: none;
			border: 0;
		}			
		</style>
		
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="otherdriftors.php">BACK</a></h1>
						<!--
<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="generic.html">Generic</a></li>
											<li><a href="elements.html">Elements</a></li>
											<li><a href="#">Sign Up</a></li>
											<li><a href="#">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
-->
					</header>

				<!-- Main -->
					<article id="main">
						<header style="padding-top: 15%; padding-bottom: 15%; background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('<?php echo $banner_path; ?>');">
							<h2><?php echo $p_name; ?></h2>
							<h3><?php echo $s_name; ?></h3>
							<br />
							<a href="store.php"><button>Buy Now</button></a>
						</header>
						<section class="wrapper style5" style="background-color: #f2f1f1">
							<div class="inner">
						
								<div style="display: flex; align-items: center; justify-content: center; padding-top: 40px;">
									<h2>Backstory</h2>
								</div>
								
								<div style="padding-top: 40px;">
									<?php echo $story; ?>
								</div>

								<div style="display: flex; align-items: center; justify-content: center; padding-top: 40px;">
									<h2>Basic Stats</h2>
								</div>

								<div style="display: flex; align-items: center; justify-content: center; width: 100%; height: auto; min-height: 350px; border: 1px #5E5E5E solid; background-color: #191A1A;">
									<div style="display: flex; align-items: center; justify-content: center; width: 90%; height: auto; min-height: 250px; border: 1px #F2F3F3 solid; ">
										<div style="text-align: center; display: inline-block; padding: 0 20px 0 20px">
											<div class="progress-pie-chart" data-percent="<?php echo $attack_power * 10; ?>" style="margin-top: 20px;">
											  <div class="ppc-progress">
											    <div class="ppc-progress-fill"></div>
											  </div>
											  <div class="ppc-percents">
											    <div class="pcc-percents-wrapper">
											      <span><?php echo $attack_power; ?></span>
											    </div>
											  </div>
											</div>
											
											<span class="chart-span">Attack Power</span>
											
										</div>
										
										<div style="text-align: center; display: inline-block; padding: 0 20px 0 20px">
											<div class="progress-pie-chart" data-percent="<?php echo $ability_power * 10; ?>" style="margin-top: 20px;">
											  <div class="ppc-progress">
											    <div class="ppc-progress-fill"></div>
											  </div>
											  <div class="ppc-percents">
											    <div class="pcc-percents-wrapper">
											      <span><?php echo $ability_power; ?></span>
											    </div>
											  </div>
											</div>
											
											<span class="chart-span">Ability Power</span>
											
										</div>

										<div style="text-align: center; display: inline-block; padding: 0 20px 0 20px">
											<div class="progress-pie-chart" data-percent="<?php echo $durability * 10; ?>" style="margin-top: 20px;">
											  <div class="ppc-progress">
											    <div class="ppc-progress-fill"></div>
											  </div>
											  <div class="ppc-percents">
											    <div class="pcc-percents-wrapper">
											      <span><?php echo $durability; ?></span>
											    </div>
											  </div>
											</div>
											
											<span class="chart-span">Durability</span>
											
										</div>

										<div style="text-align: center; display: inline-block; padding: 0 20px 0 20px">
											<div class="progress-pie-chart" data-percent="<?php echo $rarity * 10; ?>" style="margin-top: 20px;">
											  <div class="ppc-progress">
											    <div class="ppc-progress-fill"></div>
											  </div>
											  <div class="ppc-percents">
											    <div class="pcc-percents-wrapper">
											      <span><?php echo $rarity; ?></span>
											    </div>
											  </div>
											</div>
											
											<span class="chart-span">Rarity</span>
											
										</div>

										<div style="text-align: center; display: inline-block; padding: 0 20px 0 20px">
											<div class="progress-pie-chart" data-percent="<?php echo $complexity * 10; ?>" style="margin-top: 20px;">
											  <div class="ppc-progress">
											    <div class="ppc-progress-fill"></div>
											  </div>
											  <div class="ppc-percents">
											    <div class="pcc-percents-wrapper">
											      <span><?php echo $complexity; ?></span>
											    </div>
											  </div>
											</div>
											
											<span class="chart-span">Complexity</span>
											
										</div>

									</div>
								</div>
								
								<div style="display: flex; align-items: center; justify-content: center; padding-top: 40px;">
									<h2>Abilities</h2>
								</div>
								
								<div style="display: flex; align-items: center; justify-content: center; width: 100%; height: 350px; border: 1px #5E5E5E solid; background-color: #191A1A;">
									
									<div style="text-align: center; display: inline-block; width: 32.8%; min-height: 240px;">
										  <img style="width: 70px; height: 70px;" src="images/icons/<?php echo $ability_icon_array[0]; ?>" />
										  <strong><p style="color: #319fa7; font-size: 12px; margin-bottom: 0;">Ability</p></strong>
										  <strong><p style="color: #319fa7; padding-top: 0; margin-bottom: 0;"><?php echo strtoupper($ability_name_array[0]); ?></p></strong>
										  <p style="color: white; max-width: 300px; font-size: 14px; margin: 0 auto;"><?php echo $ability_description_array[0]; ?></p>
									</div>
									
									<div style="text-align: center; display: inline-block; width: 32.8%;min-height: 240px;">
										  <img style="width: 70px; height: 70px;" src="images/icons/<?php echo $ability_icon_array[1]; ?>" />
										  <strong><p style="color: #319fa7; font-size: 12px; margin-bottom: 0;">Ability</p></strong>
										  <strong><p style="color: #319fa7; padding-top: 0; margin-bottom: 0;"><?php echo strtoupper($ability_name_array[1]); ?></p></strong>
										  <p style="color: white; max-width: 300px; font-size: 14px; margin: 0 auto;"><?php echo $ability_description_array[1]; ?></p>
									</div>
									
									<div style="text-align: center; display: inline-block; width: 32.8%;min-height: 240px;">
										  <img style="width: 70px; height: 70px;" src="images/icons/<?php echo $ability_icon_array[2]; ?>" />
										  <strong><p style="color: #319fa7; font-size: 12px; margin-bottom: 0;">Ultimate</p></strong>
										  <strong><p style="color: #319fa7; padding-top: 0; margin-bottom: 0;"><?php echo strtoupper($ability_name_array[2]); ?></p></strong>
										  <p style="color: white; max-width: 300px; font-size: 14px; margin: 0 auto;"><?php echo $ability_description_array[2]; ?></p>
									</div>
									
								</div>								
								
							</div>
						</section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Genesis AR pty ltd</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrollex.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="js/main.js"></script>
			
			<script>
			$(function(){
			  var $ppc = $('.progress-pie-chart'),
			    percent = parseInt($ppc.data('percent')),
			    deg = 360*percent/100;
			  if (percent > 50) {
			    $ppc.addClass('gt-50');
			  }
			  $('.ppc-progress-fill').css('transform','rotate('+ deg +'deg)');
			});
			</script>

	</body>
</html>