<?php
include_once("functions/db.php");

runSQL("
	UPDATE 
		orders 
	SET 
		nOrder_StatusID='".$_POST['nOrder_StatusID']."'
			WHERE id='".$_GET["id"]."'");

header("location: orders.php");
?>