<div id="shipping" class="container">
	<div id="shippingForm">
		<h2>Shipping Information</h2>
		<p>Step 1/3</p>
		<form id="shipForm" method="post" action="models/saveOrderShip.php">
			<label>E-mail</label>
			<input type="email" name="strEmailAddress" id="email" class="requiredField" />
			<label>Full Name</label>
			<input type="text" name="strFullName" id="name" class="requiredField" />
			<div>
				<label>Phone</label>
				<input type="text" name="nPhone" id="phone" class="requiredField" />
			</div>
			<div>
				<label>Alternative Phone</label>
				<input type="text" name="nAltPhone" id="altphone" />
			</div><!--formAltPhone-->
			
				<label>Address</label>
				<input type="text" name="strAddress" id="address" class="requiredField" />
			
			<div>
				<label>Postal/Zip Code</label>
				<input type="text" name="strZipCode" id="zipcode" class="requiredField" />
			</div>
			<div id="formCountry">
				<label>Country</label>
				<input type="text" name="strCountry" id="country" class="requiredField" />
			</div><!--formCountry-->
			<div id="formProvince">
				<label>State/Province</label>
				<input type="text" name="strState" id="state" class="requiredField" />
			</div><!--formProvince-->
			<div id="formCity">
				<label>City</label>
				<input type="text" name="strCity" id="city" class="requiredField" />
			</div><!--formCity-->
			<input type="checkbox" name="sameAddress" id="sameAddress" /> Use same address for Billing
			<input id="shipSubmit" type="submit" class="btn prime" value="Continue to Billing" />
		</form>
	</div><!--shippingForm-->
	<?php
	include("views/sideOrderReview.php");
	?>	
</div><!--shipping-->