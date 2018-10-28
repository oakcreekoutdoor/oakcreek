<?php
include_once("functions/db.php");
runSQL("
	UPDATE
		users
	SET
		strFullName = '".$_POST["strFullName"]."',
		strUserName = '".$_POST["strUserName"]."',
		strPassword = '".$_POST["strPassword"]."',
		strEmailAddress = '".$_POST["strEmailAddress"]."',
		nPhone = '".$_POST["nPhone"]."'

			WHERE id=".$_GET["id"]."");

header("location: users.php");
?>