<?php
include("functions/db.php");

$sql = "INSERT INTO pages (
		nTemplatesID,
		strName, 
		strHeading,
		strSubheading,
		strBodyText
		) 

	VALUES (
		'".$_POST["nTemplatesID"]."',
		'".$_POST["strName"]."', 
		'".$_POST["strHeading"]."',
		'".$_POST["strSubheading"]."',
		'".$_POST["strBodyText"]."'
		
	)";

	runInsertSQL($sql);
	header("location: pages.php");
?>
