<?php
include("functions/db.php");

$imgUpload = uploadFile("strPhoto");

$sql = "INSERT INTO gallery (
		strPhoto
		) 

	VALUES (
		'".$_FILES["strPhoto"]["name"]."'
		
	)";

	runInsertSQL($sql);
	header("location: gallery.php");
?>
