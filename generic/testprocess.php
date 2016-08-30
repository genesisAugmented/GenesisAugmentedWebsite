<?php
if(isset($_POST['stripeToken']) && isset($_POST['stripeEmail'])){
	require '../vendor/autoload.php';
	require '../scripts/connect-to-mysqli.php';
	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey("sk_test_cQPHS556XFQPjqn0jbLw2Axn");
	
	// Get the credit card details submitted by the form
	$amount = 350;
	$token = $_POST['stripeToken'];
	$email = $_POST['stripeEmail'];
	
	
	// Create a Customer
	$customer = \Stripe\Customer::create(array(
	  "source" => $token,
	  "description" => $email)
	);
	
	// Charge the Customer instead of the card
	\Stripe\Charge::create(array(
	  "amount" => $amount, // amount in cents, again
	  "currency" => "aud",
	  "customer" => $customer->id)
	);

// YOUR CODE: Save the customer ID and other info in a database for later!
	$sql = mysqli_query($mysqli, "INSERT INTO customer_payments(customer_email, payment_amount, shipped, date_payed)
			VALUES('$email','$amount','0', now())");

// YOUR CODE: When it's time to charge the customer again, retrieve the customer ID!

/*
\Stripe\Charge::create(array(
  "amount"   => 1500, // $15.00 this time
  "currency" => "aud",
  "customer" => $customerId // Previously stored, then retrieved
  ));
*/
}
?>



