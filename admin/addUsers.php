<?php
include("check_user.php");
include("functions/db.php");

$error = ($_POST["strFullName"] && $_POST["strUserName"] && $_POST["strPassword"] && $_POST["strEmailAddress"] && $_POST["nPhone"])?false:true;


$sql = "INSERT INTO users (
		strFullName, 
		strUserName,
		strPassword,
		strEmailAddress,
		nPhone,
		bAdmin
		) 

	VALUES (
		'".$_POST["strFullName"]."', 
		'".$_POST["strUserName"]."',
		'".$_POST["strPassword"]."', 
		'".$_POST["strEmailAddress"]."',
		'".$_POST["nPhone"]."',
		1
	)";

	runInsertSQL($sql);
	
include("partials/user_list.php");
?>