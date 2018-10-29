<div id="billing" class="container">
	<div class="shipping-info">
		<h2>Shipping Information</h2>
		<a href="index.php?controller=Cart&action=shipping">Edit</a>
		<div>
			<p>Full Name</p>
			<p>Address - City</p>
			<p>Province/Country/Postal Code</p>
		</div>
	</div><!--shipping-info-->

	<div class="billing-info">
		<h2>Billing Information</h2>
		<p>Step 2/3</p>
		<form method="post" action="index.php?controller=Cart&action=payment">
			<input type="checkbox"> Use my shipping address as my billing address.<br>
			<div>
				<p>Full Name</p>
				<p>Address - City</p>
				<p>Province/Country/Postal Code</p>
			</div>
			<input type="submit" class="btn prime" value="Continue to Payment" />
		</form>
	</div><!--billing-info-->

	<?php
	include("views/sideOrderReview.php");
	?>	
</div><!--shipping-->