<div id="payment" class="container">
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
		<a href="index.php?controller=Cart&action=billing">Edit</a>
		<div>
			<p>Full Name</p>
			<p>Address - City</p>
			<p>Province/Country/Postal Code</p>
		</div>
	</div><!--billing-info-->

	<div id="paymentInfo">
		<h2>Payment Information</h2>
		<p>Step 3/3</p>
		<form method="post" action="models/saveOrder.php">
			<input type="radio"> Card Number
			<input type="radio"> Paypal
			<label>Name on Card</label>
			<input type="text">
			<label>Card Number</label>
			<input type="text">
			<div class="expiration">
				<label>Expiration Date</label>
				<select>
					<option>01</option>
					<option>02</option>
					<option>03</option>
					<option>04</option>
					<option>05</option>
					<option>06</option>
					<option>07</option>
					<option>08</option>
					<option>09</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
				</select>
				<select>
					<option>2018</option>
					<option>2019</option>
					<option>2020</option>
					<option>2021</option>
					<option>2022</option>
					<option>2023</option>
					<option>2024</option>
					<option>2025</option>
					<option>2026</option>
					<option>2027</option>
					<option>2028</option>
					<option>2029</option>
				</select>
			</div><!--expiration-->
			<div class="cvv">
				<label>CVV Number</label>
				<input type="text">
			</div><!--cvv-->
			<input type="submit" class="btn prime" value="Place Order" />
		</form>
	</div><!--paymentInfo-->

	<?php
	include("views/sideOrderReview.php");
	?>	
</div><!--shipping-->