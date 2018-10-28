<?php
include_once("functions/db.php");
runSQL("
	UPDATE
		admin
	SET
		strFullName = '".$_POST["strFullName"]."',
		strUsername = '".$_POST["strUsername"]."',
		strPassword = '".$_POST["strPassword"]."'
			WHERE id=".$_GET["id"]."");

header("location: users.php");
?>