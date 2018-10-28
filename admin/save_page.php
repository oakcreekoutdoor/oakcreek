<?php
include("functions/db.php");

$sql = "INSERT INTO pages (
		strName, 
		bMainPage,
		strHeading1,
		strHeading2, 
		strSubheading1,
		strSubheading2,
		strBodyText
		) 

	VALUES (
		'".$_POST["strName"]."', 
		'".$_POST["bMainPage"]."',
		'".$_POST["strHeading1"]."',
		'".$_POST["strHeading2"]."', 
		'".$_POST["strSubheading1"]."',
		'".$_POST["strSubheading2"]."',
		'".$_POST["strBodyText"]."'
		
	)";

	runInsertSQL($sql);
	header("location: pages.php");
?>
