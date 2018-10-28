<?php
include_once("functions/db.php");
runSQL("
	UPDATE
		pages
	SET
		nTemplatesID = '".$_POST["nTemplatesID"]."',
		strName = '".$_POST["strName"]."',
		strHeading = '".$_POST["strHeading"]."',
		strSubheading = '".$_POST["strSubheading"]."',
		strBodyText = '".$_POST["strBodyText"]."'
			WHERE id=".$_GET["id"]."");

header("location: pages.php");
?>