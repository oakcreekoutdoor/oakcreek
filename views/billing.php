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
		<form id="billForm" method="post" action="index.php?controller=Cart&action=payment">
			<label>Address</label>
			<input type="text" name="address" id="addressShip" class="requiredField" />
			<div>
				<label>Postal/Zip Code</label>
				<input type="text" name="zipcode" id="zipcodeShip" class="requiredField" />
			</div>
			<div id="formCountry">
				<label>Country</label>
				<input type="text" name="country" id="countryShip" class="requiredField" />
			</div><!--formCountry-->
			<div id="formProvince">
				<label>State/Province</label>
				<input type="text" name="state" id="stateShip" class="requiredField" />
			</div><!--formProvince-->
			<div id="formCity">
				<label>City</label>
				<input type="text" name="city" id="cityShip" class="requiredField" />
			</div><!--formCity-->
			<input id="billSubmit" type="submit" class="btn prime" value="Continue to Payment" />
		</form>
	</div><!--billing-info-->

	<?php
	include("views/sideOrderReview.php");
	?>	
</div><!--shipping-->