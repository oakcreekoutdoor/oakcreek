<div id="billing" class="container">
	<div class="shipping-info">
		<h2>Shipping Information</h2>
		<!-- <a href="index.php?controller=Cart&action=shipping">Edit</a> -->
		<div>
			<p><?=$arrData["arrOrder"][0]["strFullName"]?></p>
			<p><?=$arrData["arrOrder"][0]["strShippingAddress"]?>, <?=$arrData["arrOrder"][0]["strShippingCity"]?></p>
			<p><?=$arrData["arrOrder"][0]["strShippingState"]?> - <?=$arrData["arrOrder"][0]["strShippingCountry"]?> - <?=$arrData["arrOrder"][0]["strShippingZipCode"]?></p>
		</div>
	</div><!--shipping-info-->

	<div class="billing-info">
		<h2>Billing Information</h2>
		<p>Step 2/3</p>
		<form id="billForm" method="post" action="models/saveOrderBill.php">
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
			<input id="billSubmit" type="submit" class="btn prime" value="Continue to Payment" />
		</form>
	</div><!--billing-info-->

	<?php
	include("views/sideOrderReview.php");
	?>	
</div><!--shipping-->