<?php
include("functions/db.php");

$imgUpload = uploadFile("strPhoto");

$sql = "INSERT INTO wedding_menu (
		strName, 
		strDetails,
		strPhoto
		) 

	VALUES (
		'".$_POST["strName"]."', 
		'".$_POST["strDetails"]."',
		'".$_FILES["strPhoto"]["name"]."'
		
	)";

	runInsertSQL($sql);
	header("location: menu.php");
?>
