<div id="shipping" class="container">
	<div id="shippingForm">
		<h2>Shipping Information</h2>
		<p>Step 1/3</p>
		<form id="shipForm" method="post" action="index.php?controller=Cart&action=billing">
			<label>E-mail</label>
			<input type="email" name="email" id="email" class="requiredField" />
			<label>Full Name</label>
			<input type="text" name="fullName" id="fullName" class="requiredField" />
			<div>
				<label>Phone</label>
				<input type="text" name="phone" id="phone" class="requiredField" />
			</div>
			<div>
				<label>Alternative Phone</label>
				<input type="text" name="altphone" id="altphone" />
			</div><!--formAltPhone-->
			
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

			<div class="form-checkbox">
				<input type="checkbox" name="sameAddress" id="sameAddress" /> Use same address for Billing
			</div><!--form-checkbox-->

			<input id="shipSubmit" type="submit" class="btn prime" value="Continue to Billing" />
		</form>
	</div><!--shippingForm-->
	<?php
	include("views/sideOrderReview.php");
	?>	
</div><!--shipping-->