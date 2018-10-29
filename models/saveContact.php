<?php
include("../libs/connect.php");

$sql = "INSERT INTO 
		users(
			strFullName,
			strEmailAddress,
			nPhone,
			nAltPhone, 
			strShippingAddress,
			strShippingZipCode,
			strShippingCountry,
			strShippingState,
			strShippingCity,
			strBillingAddress,
			strBillingZipCode,
			strBillingCountry,
			strBillingState,
			strBillingCity) 
		VALUES (			
			'".$_POST['strFullName']."',
			'".$_POST['strEmailAddress']."',
			'".$_POST['nPhone']."',
			'".$_POST['nAltPhone']."',
			'".$_POST['strShippingAddress']."',
			'".$_POST['strShippingZipCode']."',
			'".$_POST['strShippingCountry']."',
			'".$_POST['strShippingState']."',
			'".$_POST['strShippingCity']."',
			'".$_POST['strBillingAddress']."',
			'".$_POST['strBillingZipCode']."',
			'".$_POST['strBillingCountry']."',
			'".$_POST['strBillingState']."',
			'".$_POST['strBillingCity']."')
		;";

Connect::runSql("saveData", $sql);
?>