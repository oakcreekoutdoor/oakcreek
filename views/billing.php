<?php
if(isset($_SESSION["userID"])) {
    $address = $_SESSION["userID"]['billAddress'];
    $zipcode = $_SESSION["userID"]['billZip'];
    $country = $_SESSION["userID"]['billCountry'];
    $state = $_SESSION["userID"]['billState'];
    $city = $_SESSION["userID"]['billCity'];
} else {
    $address = "";
    $zipcode = "";
    $country = "";
    $state = "";
    $city = "";
}
?>
<div id="billing" class="container">
	<div class="shipping-info">
		<h2>Shipping Information</h2>
<!--		 <a href="">Edit</a> -->
		<div>
			<p><?=$_SESSION["userID"]['fullName']?></p>
			<p><?=$_SESSION["userID"]['shipAddress']?>, <?=$_SESSION["userID"]['shipCity']?></p>
			<p><?=$_SESSION["userID"]['shipState']?> - <?=$_SESSION["userID"]['shipCountry']?> - <?=$_SESSION["userID"]['shipZip']?></p>
		</div>
	</div><!--shipping-info-->

	<div class="billing-info">
		<h2>Billing Information</h2>
		<p>Step 2/3</p>
		<form id="billForm" method="post" action="index.php?controller=Cart&action=payment">
			<label>Address<span class="req">*</span></label>
			<input type="text" name="strAddress" id="address" class="requiredField" value="<?=$address?>" />
			<div id="formPostal">
				<label>Postal/Zip Code<span class="req">*</span></label>
				<input type="text" name="strZipCode" id="zipcode" class="requiredField" value="<?=$zipcode?>" />
			</div>
			<div id="formCountry">
				<label>Country<span class="req">*</span></label>
				<input type="text" name="strCountry" id="country" class="requiredField" value="<?=$country?>" />
			</div><!--formCountry-->
			<div id="formProvince">
				<label>State/Province<span class="req">*</span></label>
				<input type="text" name="strState" id="state" class="requiredField" value="<?=$state?>" />
			</div><!--formProvince-->
			<div id="formCity">
				<label>City<span class="req">*</span></label>
				<input type="text" name="strCity" id="city" class="requiredField" value="<?=$city?>" />
			</div><!--formCity-->
			<input id="billSubmit" type="submit" class="btn prime" value="Continue to Payment" />
		</form>
	</div><!--billing-info-->

	<?php
	include("views/sideOrderReview.php");
	?>	
</div><!--shipping-->