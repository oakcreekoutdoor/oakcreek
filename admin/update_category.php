<?php
include("check_user.php");
include_once("functions/db.php");

if(!$_FILES["strHeroImage"]["name"] && $_POST["oldImage"])
{
	$myFileUploadName = $_POST["oldImage"];

} else if (!$_FILES["strHeroImage"]["name"] && !$_POST["oldImage"])
{ 
	$myFileUploadName = "";
} else { 
	$myFileUploadName = uploadFile("strHeroImage");
}

if ($_GET["id"])
{
	
	runSQL("

		UPDATE 
			categories 
		SET 
			strName='".$_POST['strName']."',
			strDesc='".$_POST['strDesc']."',
			strHeroImage='".$myFileUploadName."' 
				WHERE id='".$_GET["id"]."'");
} else {

	runInsertSQL("

		INSERT INTO 
		categories (
			strName, 
			strDesc,
			strHeroImage) 

		VALUES (
		'".$_POST['strName']."',
		'".$_POST['strDesc']."',
		'".$myFileUploadName."'
		
		)"
	);
}

header("location: categories.php");
?>