<?php
include("../libs/connect.php");
session_start();

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
			strShippingCity) 
		VALUES (			
			'".$_POST['strFullName']."',
			'".$_POST['strEmailAddress']."',
			'".$_POST['nPhone']."',
			'".$_POST['nAltPhone']."',
			'".$_POST['strAddress']."',
			'".$_POST['strZipCode']."',
			'".$_POST['strCountry']."',
			'".$_POST['strState']."',
			'".$_POST['strCity']."')
		;";

$lastID = Connect::runSql("saveData", $sql);
$_SESSION['lastID'] = $lastID;

header("location: ../index.php?controller=Cart&action=billing");
?>