<?php

$discount = true;
$price = "";

if($discount){
	$price = "<s style=\"color:white;\">$7.00</s> $3.50";
} else {
	$price = "$7.00";
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
		<link rel="stylesheet" href="css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->

        <script src="//code.jquery.com/jquery-2.0.2.min.js"></script>
		<script src="//js.stripe.com/v2/"></script>
        <script>
		    (function() {
		        Stripe.setPublishableKey('pk_test_bvV4nSkjFm0fMM95uAH7Sv2p');
		    })();
		</script>

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
					<article id="main">
						<header>
							<h2>Genesis Store</h2>
						</header>
						<section class="wrapper style5">
							<div class="inner">

									<strong><span style="width: 100%; text-align: center; display: block; font-size: 26px; color: #BAA159;">Early Access Package</span></strong>

									<div class="card" style="margin-top: 10px; margin: 0 auto; width: 40%; min-width: 300px; padding: 0; text-align: center; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">


										<div style="background-color: #242424; margin-top: 30px; padding-top: 30px; height: auto; ">
											<img style="width: 90%; height: auto;" src="images/store_img.png" />
										</div>

										<div style="padding: 10px 0 15px 0; background-color: #242424; ">
											<strong><span style="margin-top: 30px; display: block; font-size: 32px; color: #BAA159;"><?php echo $price; ?></span> </strong>
											<span style="margin-top: 30px; display: block; color: white;">2x Premium Genesis Promo Cards</span>

											<script src="https://checkout.stripe.com/checkout.js"></script>
											<button id="customButton" style="margin-top: 40px; margin-bottom: 30px;"><strong><span style="color: white;">BUY NOW</span></strong></button>

											<script>
											  var handler = StripeCheckout.configure({
											    key: 'pk_test_bvV4nSkjFm0fMM95uAH7Sv2p',
// 											    image: '/img/documentation/checkout/marketplace.png',
											    locale: 'auto',
											    token: function(token) {
											      // You can access the token ID with `token.id`.
											      // Get the token ID to your server-side code for use.
													$.ajax({
														type: "POST",
														url: "testprocess.php",
														data: {stripeToken: token.id, stripeEmail: token.email},
														success: function (response) {
															console.log("Stripe Success");
														}
													});
											    }
											  });

											  $('#customButton').on('click', function(e) {
											    // Open Checkout with further options:
											    handler.open({
											      name: 'Genesis AR',
											      description: '2x Premium Promo Cards',
// 											      zipCode: true,
											      currency: "aud",
											      amount: 350
											    });
											    e.preventDefault();
											  });

											  // Close Checkout on page navigation:
											  $(window).on('popstate', function() {
											    handler.close();
											  });
											</script>

										</div>
									</div>
								</a>

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
