<?php
include("../libs/connect.php");
session_start();

$sql = "INSERT INTO 
		orders(
			nUsersID,
			nUTC,
			nInvoiceTotal,
			nTax,
			nDiscount,
			nOrder_StatusID) 
		VALUES (			
			'".$_SESSION['lastID']."',
			'".date('Y-m-d H:i:s')."',
			'".$_SESSION['nInvoice']."',
			'".$_SESSION['nTax']."',
			'0',
			'1')
		;";
$lastOID = Connect::runSql("saveData", $sql);
$_SESSION["orderID"] = $lastOID;

$arrProds = $_SESSION["arrCart"];

foreach ($arrProds as $prod) {
	$sql = "INSERT INTO 
	order_items(
		nProductsID,
		nPrice,
		nQuantity,
		strProductName,
		strFeatPhoto,
		nOrdersID) 
	VALUES (			
		'".$prod['pID']."',
		'".$prod['nPrice']."',
		'1',
		'".$prod['strName']."',
		'".$prod['strImage']."',
		'".$lastOID."')
	;";

	Connect::runSql("saveData", $sql);
}

header("location: ../index.php?controller=Cart&action=orderplaced");
?>


