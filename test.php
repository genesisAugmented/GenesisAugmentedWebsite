<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Stripe Sample Form</title>
        
        <script src="//code.jquery.com/jquery-2.0.2.min.js"></script>
		<script src="//js.stripe.com/v2/"></script>        
        <script>
		    (function() {
		        Stripe.setPublishableKey('pk_test_bvV4nSkjFm0fMM95uAH7Sv2p');
		    })();
		</script>
        
    </head>
    <body>
	    
		<form action="testprocess.php" method="POST">
		  <script
		    src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
		    data-key="pk_test_bvV4nSkjFm0fMM95uAH7Sv2p"
		    data-amount="350"
		    data-name="Genesis Promo Cards"
		    data-description="2x Trading Cards"
		    data-currency="aud"
		    data-locale="auto">    
		  </script>
		</form>

<!--
<form action="test.php" method="POST" id="payment-form">
  <span class="payment-errors"></span>
 
  <div class="row">
    <label>
      <span>Card Number</span>
      <input type="text" data-stripe="number">
    </label>
  </div>
 
  <div class="row">
    <label>
      <span>CVC</span>
      <input type="text" data-stripe="cvc">
    </label>
  </div>
 
  <div class="row">
    <label>
      <span>Expiration (MM/YYYY)</span>
      <input type="text" data-stripe="exp-month">
    </label>
    <input type="text" data-stripe="exp-year">
  </div>
 
  <button type="submit">Buy Now</button>
</form>
-->


<!--
	<script>
		// Event Listeners
		$('#payment-form').on('submit', generateToken);
		 
		var generateToken = function(e) {
		    var form = $(this);
		 
		    // No pressing the buy now button more than once
		    form.find('button').prop('disabled', true);
		 
		    // Create the token, based on the form object
		    Stripe.create(form, stripeResponseHandler);
		 
		    // Prevent the form from submitting
		    e.preventDefault();
		};
		 
		var stripeResponseHandler = function(status, response) {
		    var form = $('#payment-form');
		 
		    // Any validation errors?
		    if (response.error) {
		        // Show the user what they did wrong
		        form.find('.payment-errors').text(response.error.message);
		 
		        // Make the submit clickable again
		        form.find('button').prop('disabled', false);
		    } else {
		        // Otherwise, we're good to go! Submit the form.
		 
		        // Insert the unique token into the form
		        $('<input>', {
		            'type': 'hidden',
		            'name': 'stripeToken',
		            'value': response.id
		        }).appendTo(form);
		        
		        console.log(response.id);
		 
		        // Call the native submit method on the form
		        // to keep the submission from being canceled
		        form.get(0).submit();
		    }
		};
	</script>
-->

    </body>
</html>