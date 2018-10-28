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
			gallery 
		SET 
			strPhoto='".$myFileUploadName."' 
				WHERE id='".$_GET["id"]."'");
} else {

	runInsertSQL("

		INSERT INTO 
		gallery ( 
			strPhoto) 

		VALUES (
		'".$myFileUploadName."'
		
		)"
	);
}

header("location: gallery.php");
?>