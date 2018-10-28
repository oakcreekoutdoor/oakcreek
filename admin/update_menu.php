<?php
include_once("functions/db.php");

if(!$_FILES["strPhoto"]["name"] && $_POST["oldImage"])
{
	$myFileUploadName = $_POST["oldImage"];

} else if (!$_FILES["strPhoto"]["name"] && !$_POST["oldImage"])
{ 
	$myFileUploadName = "";
} else { 
	$myFileUploadName = uploadFile("strPhoto");
}

if ($_GET["id"])
{
	
	runSQL("

		UPDATE 
			wedding_menu 
		SET 
			strName='".$_POST['strName']."',
			strDetails='".$_POST['strDetails']."',
			strPhoto='".$myFileUploadName."' 
				WHERE id='".$_GET["id"]."'");
} else {

	runInsertSQL("

		INSERT INTO 
		wedding_menu (
			strName, 
			strDescription, 
			strPhoto) 

		VALUES (
		'".$_POST['strName']."',
		'".$_POST['strDetails']."',
		'".$myFileUploadName."'
		
		)"
	);
}

header("location: menu.php");
?>