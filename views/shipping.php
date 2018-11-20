<?php
if(isset($_SESSION["userID"])) {
    $id = $_SESSION["userID"]['id'];
    $email = $_SESSION["userID"]['email'];
    $name = $_SESSION["userID"]['fullName'];
    $phone = $_SESSION["userID"]['phone'];
    $altPhone = $_SESSION["userID"]['altPhone'];
    $address = $_SESSION["userID"]['shipAddress'];
    $zipcode = $_SESSION["userID"]['shipZip'];
    $country = $_SESSION["userID"]['shipCountry'];
    $state = $_SESSION["userID"]['shipState'];
    $city = $_SESSION["userID"]['shipCity'];
    $checked = "checked";
} else {
    $id = "";
    $email = "";
    $name = "";
    $phone = "";
    $altPhone = "";
    $address = "";
    $zipcode = "";
    $country = "";
    $state = "";
    $city = "";
    $checked = "";
}
?>
<div id="shipping" class="container">
	<div id="shippingForm">
		<h2>Shipping Information</h2>
		<p>Step 1/3</p>
		<form id="shipForm" method="post" action="index.php?controller=Cart&action=billing">
            <div id="checkOpt">
                <label>Checkout Options<span class="req">*</span></label>
                <input type="radio" value="guest" name="checkopt" checked />Guest
                <input type="radio" value="user" name="checkopt" <?=$checked?> />Log In
            </div>
            
            <input id="uID" type="hidden" name="userID" value="<?=$id?>" />

			<label>E-mail Address<span class="req">*</span></label>
			<input type="email" name="strEmailAddress" id="email" class="requiredField" value="<?=$email?>" />
            
			<label>Full Name<span class="req">*</span></label>
			<input type="text" name="strFullName" id="fullName" class="requiredField" value="<?=$name?>" />
            
			<div id="formPhone">
				<label>Phone<span class="req">*</span></label>
				<input type="text" name="nPhone" id="phone" class="requiredField" value="<?=$phone?>" />
			</div>
            
			<div id="formAltPhone">
				<label>Alternative Phone</label>
				<input type="text" name="nAltPhone" id="altphone" value="<?=$altPhone?>" />
			</div><!--formAltPhone-->
			
				<label>Address<span class="req">*</span></label>
				<input type="text" name="strAddress" id="address" class="requiredField" value="<?=$address?>" />
			
			<div id="formPostal">
				<label>Postal/Zip Code<span class="req">*</span></label>
				<input type="text" name="strZipCode" id="zipcode" class="requiredField" value="<?=$zipcode?>" />
			</div>
            
			<div id="formCountry">
				<label class="country">Country<span class="req">*</span></label>
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

<div id="modalLogin">
    <form id="login" method="post" action="">
        <h2>Log in to continue</h2>
        <div class="logform">
          <label>
                <span>E-mail Address:</span><span class="req">*</span>
                <input id="emailUser" name="emailUser" type="email" />
          </label>
            
          <label>
                <span>Password:</span><span class="req">*</span>
                <input id="passwordUser" name="passwordUser" type="password" />
          </label>
            
            <input type="submit" id="logInCheckout" class="btn prime" value="LOG IN" />
            <a id="cancelBtn" href="#" class="btn sec">Cancel</a>
            
           <div class="fakeImg">
                <img src="assets/login.jpeg" alt="login images">
           </div>    
        </div>
    </form>
</div>

<?php print_r($_SESSION);?>