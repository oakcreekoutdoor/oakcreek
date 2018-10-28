<?php
include_once("functions/db.php");
runSQL("
	UPDATE
		pages
	SET
		strName = '".$_POST["strName"]."',
		bMainPage = '".$_POST["bMainPage"]."',
		strHeading1 = '".$_POST["strHeading1"]."',
		strHeading2 = '".$_POST["strHeading2"]."',
		strSubheading1 = '".$_POST["strSubheading1"]."',
		strSubheading2 = '".$_POST["strSubheading2"]."',
		strBodyText = '".$_POST["strBodyText"]."'
			WHERE id=".$_GET["id"]."");
header("location: pages.php");
?>