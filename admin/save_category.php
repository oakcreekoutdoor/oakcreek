<?php
include("check_user.php");
include("functions/db.php");

$imgUpload = uploadFile("strHeroImage");

$sql = "INSERT INTO categories (
		strName, 
		strDesc,
		strHeroImage
		) 

	VALUES (
		'".$_POST["strName"]."', 
		'".$_POST["strDesc"]."',
		'".$_FILES["strHeroImage"]["name"]."'
	)";

	runInsertSQL($sql);
	header("location: categories.php");
?>