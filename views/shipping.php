<div id="shipping" class="container">
	<div id="shippingForm">
		<h2>Shipping Information</h2>
		<p>Step 1/3</p>
		<form method="post" action="index.php?controller=Cart&action=billing" onsubmit="validateForm();">
			<label>E-mail</label>
			<input type="email" name="email" class="requiredField" />
			<label>Full Name</label>
			<input type="text" name="fullName" class="requiredField" />
			<div>
				<label>Phone</label>
				<input type="text" name="phone" class="requiredField" />
			</div>
			<div>
				<label>Alternative Phone</label>
				<input type="text" name="altphone"/>
			</div><!--formAltPhone-->
			
				<label>Address</label>
				<input type="text" name="address" class="requiredField" />
			
			<div>
				<label>Postal/Zip Code</label>
				<input type="text" name="zipcode" class="requiredField" />
			</div>
			<div id="formCountry">
				<label>Country</label>
				<input type="text" name="country" class="requiredField" />
			</div><!--formCountry-->
			<div id="formProvince">
				<label>State/Province</label>
				<input type="text" name="state" class="requiredField" />
			</div><!--formProvince-->
			<div id="formCity">
				<label>City</label>
				<input type="text" name="city" class="requiredField" />
			</div><!--formCity-->
			<input type="submit" class="btn prime" value="Continue to Billing" />
		</form>
	</div><!--shippingForm-->
	<?php
	include("views/sideOrderReview.php");
	?>	
</div><!--shipping-->