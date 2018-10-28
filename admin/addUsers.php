<?php
include("functions/db.php");

$error = ($_POST["strFullName"] && $_POST["strUsername"] && $_POST["strPassword"])?false:true;


$sql = "INSERT INTO admin (
		strFullName, 
		strUsername,
		strPassword
		) 

	VALUES (
		'".$_POST["strFullName"]."', 
		'".$_POST["strUsername"]."',
		'".$_POST["strPassword"]."'
		
	)";

	runInsertSQL($sql);
	
include("partials/user_list.php");
?>