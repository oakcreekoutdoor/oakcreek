<?php
include("check_user.php");
include_once("functions/db.php");

if(!$_FILES["strFeatPhoto"]["name"] && $_POST["oldImage"])
{
	$myFileUploadName = $_POST["oldImage"];

} else if (!$_FILES["strFeatPhoto"]["name"] && !$_POST["oldImage"])
{ 
	$myFileUploadName = "";
} else { 
	$myFileUploadName = uploadFile("strFeatPhoto");
}

if ($_GET["id"])
{
	
	runSQL("

		UPDATE 
			products 
		SET 
			strName='".$_POST['strName']."',
			nPrice='".$_POST['nPrice']."',
			strDescription='".$_POST['strDescription']."',
			nQuantity='".$_POST['nQuantity']."',
			strFeatPhoto='".$myFileUploadName."' 
				WHERE id='".$_GET["id"]."'");
} else {

	runInsertSQL("

		INSERT INTO 
		products (
			strName, 
			nPrice,
			strDescription, 
			nQuantity,
			strFeatPhoto) 

		VALUES (
		'".$_POST['strName']."',
		'".$_POST['nPrice']."',
		'".$_POST['strDescription']."',
		'".$_POST['nQuantity']."',
		'".$myFileUploadName."'
		
		)"
	);
}

header("location: inventory.php");
?>