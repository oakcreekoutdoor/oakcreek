<div id="shipping" class="container">
	<div id="shippingForm">
		<h2>Shipping Information</h2>
		<p>Step 1/3</p>
		<form id="shipForm" method="post" action="models/saveOrderShip.php">
			<label>E-mail Address<span class="req">*</span></label>
			<input type="email" name="strEmailAddress" id="email" class="requiredField" />
			<label>Full Name<span class="req">*</span></label>
			<input type="text" name="strFullName" id="fullName" class="requiredField" />
			<div id="formPhone">
				<label>Phone<span class="req">*</span></label>
				<input type="text" name="nPhone" id="phone" class="requiredField" />
			</div>
			<div id="formAltPhone">
				<label>Alternative Phone</label>
				<input type="text" name="nAltPhone" id="altphone" />
			</div><!--formAltPhone-->
			
				<label>Address<span class="req">*</span></label>
				<input type="text" name="strAddress" id="address" class="requiredField" />
			
			<div id="formPostal">
				<label>Postal/Zip Code<span class="req">*</span></label>
				<input type="text" name="strZipCode" id="zipcode" class="requiredField" />
			</div>
			<div id="formCountry">
				<label class="country">Country<span class="req">*</span></label>
				<input type="text" name="strCountry" id="country" class="requiredField" />
			</div><!--formCountry-->
			<div id="formProvince">
				<label>State/Province<span class="req">*</span></label>
				<input type="text" name="strState" id="state" class="requiredField" />
			</div><!--formProvince-->
			<div id="formCity">
				<label>City<span class="req">*</span></label>
				<input type="text" name="strCity" id="city" class="requiredField" />
			</div><!--formCity-->

			<div class="form-checkbox">
				<input type="checkbox" name="sameAddress" id="sameAddress" /> Use same address for Billing
			</div><!--form-checkbox-->

			<input id="shipSubmit" type="submit" class="btn prime" value="Continue to Billing" />
		</form>
	</div><!--shippingForm-->
	<?php
	include("views/sideOrderReview.php");
    
    print_r($_SESSION);
	?>	
</div><!--shipping-->