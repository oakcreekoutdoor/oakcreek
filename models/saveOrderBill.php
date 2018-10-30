<?php
include("../libs/connect.php");
session_start();

$sql = "UPDATE 
		users
		SET
			strBillingAddress = '".$_POST['strAddress']."',
			strBillingZipCode = '".$_POST['strZipCode']."',
			strBillingCountry = '".$_POST['strCountry']."',
			strBillingState = '".$_POST['strState']."',
			strBillingCity = '".$_POST['strCity']."'
		WHERE users.id =".$_SESSION['lastID']."
		;";
	
Connect::runSql("saveData", $sql);

header("location: ../index.php?controller=Cart&action=payment");
?>