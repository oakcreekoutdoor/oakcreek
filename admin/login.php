<?php
include("functions/db.php");

$arrUsers = runSelectSQL("SELECT * FROM users WHERE strUserName='".$_POST["strUserName"]."' AND strPassword='".$_POST["strPassword"]."'")[0];

if ($arrUsers)
{
	session_start();
	$_SESSION["loggedUserId"]=$arrUsers["id"];
	
	header("location: dashboard.php");
} else {
	header("location: index.php?error=true");
}
?>