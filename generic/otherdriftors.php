<?php 
include_once '../scripts/connect-to-mysqli.php';

$coming_soon_html = "";

$sql = mysqli_query($mysqli, "SELECT * FROM creature_list WHERE active='1' ORDER BY id ASC") or die("Could Not Interface With Characters");
$character_list_html = "";
$exists = mysqli_num_rows($sql);
if($exists > 0){
	while($row = mysqli_fetch_array($sql)){
		$id = $row['id'];
		$img_path = "../img/cards/" . $row['path'];
		$p_name = $row['primary_name'];
		$s_name = $row['secondary_name'];
		$character_list_html .=  "<a href=\"driftor.php?id=$id\">
							<div class=\"card\" style=\"margin-top: 10px; width: 32.8%; display: inline-block; padding: 0; background-color: #222222; text-align: left; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;\">
							<img src=\"$img_path\" style=\"width: 100%; height: auto;\" alt=\"$p_name\" />
							<div style=\"padding: 10px 0 15px 15px;\">
							<span style=\"display: block; font-size: 26px; color: #319fa7;\">$p_name</span> 
							<span style=\"display: block; color: white;\">$s_name</span>
							</div></div></a>";
	}
}

$sql = mysqli_query($mysqli, "SELECT * FROM creature_list WHERE active='2' LIMIT 1");
$exists = mysqli_num_rows($sql);
if($exists > 0){
	while($row = mysqli_fetch_array($sql)){
		$icon_path = "../img/coming_soon_icons/" . $row['icon_path'];
		if($icon_path == ""){
			$icon_path = "../img/coming_soon_icons/brex.png";
		}
		$p_name = $row['primary_name'];
		$s_name = $row['secondary_name'];
		$coming_soon_html .= "<a href=\"#\">
						<div class=\"card\" style=\"margin-top: 10px; width: 32.8%; display: inline-block; padding: 0; background-color: #222222; text-align: left; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;\">
						<img src=\"$icon_path\" style=\"width: 100%; height: auto;\" alt=\"$p_name\" />
						<div style=\"padding: 10px 0 15px 15px;\">
						<span style=\"display: block; font-size: 26px; color: #319fa7;\">$p_name</span> 
						<span style=\"display: block; color: white;\">$s_name</span>
						</div></div></a>";
	}
}

?>

<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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
		
		<style>
			.card:hover {
				
			}
			
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
						<h1><a href="../index.php">Genesis</a></h1>
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
					<article id="main" style="background-image: url('../img/story-bg-new.jpg');">
						<header>
							<h2>Driftors</h2>
						</header>
						<section class="wrapper style5" style="background-color: #f2f1f1">
							<div class="inner">

								<?php echo $character_list_html; ?>	
								<?php echo $coming_soon_html; ?>						
								
<!--
								<a href="driftor.php?id=3">
									<div class="card" style="margin-top: 10px; width: 32.8%; display: inline-block; padding: 0; background-color: #242424; text-align: left; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
										<img src="../img/cards/atlas-sentry.jpg" style="width: 100%; height: auto;" alt="Osirus" />
										<div style="padding: 10px 0 15px 15px;">
											<span style="display: block; font-size: 26px; color: #BAA159;">Alatus</span> 
											<span style="display: block; color: white;">Atlas Sentry</span>
										</div>
									</div>
								</a>

								<a href="driftor.php?id=4">
									<div class="card" style="margin-top: 10px; width: 32.8%; display: inline-block; padding: 0; background-color: #242424; text-align: left; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
										<img src="../img/cards/b-rex.jpg" style="width: 100%; height: auto;" alt="Osirus" />
										<div style="padding: 10px 0 15px 15px;">
											<span style="display: block; font-size: 26px; color: #BAA159;">Brex</span> 
											<span style="display: block; color: white;">Bastiosaurus Rex</span>
										</div>
									</div>
								</a>

								<a href="driftor.php?id=5">
									<div class="card" style="margin-top: 10px; width: 32.8%; display: inline-block; padding: 0; background-color: #242424; text-align: left; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
										<img src="../img/cards/aurora.jpg" style="width: 100%; height: auto;" alt="Osirus" />
										<div style="padding: 10px 0 15px 15px;">
											<span style="display: block; font-size: 26px; color: #BAA159;">Aurora</span> 
											<span style="display: block; color: white;">Elemental Assassin</span>
										</div>
									</div>
								</a>
-->

<!--
								<a href="#">
									<div class="card" style="margin-top: 10px; width: 32.8%; display: inline-block; padding: 0; background-color: #242424; text-align: left; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
										<img src="images/coming_soon.png" style="width: 100%; height: auto;" alt="Osirus" />
										<div style="padding: 10px 0 15px 15px;">
											<span style="display: block; font-size: 26px; color: #BAA159;">Coming Soon</span> 
											<span style="display: block; color: white;">New Character</span>
										</div>
									</div>
								</a>
-->
								
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

	</body>
</html>