<?php 
session_start();

if (!isset($_SESSION["userID"])) 
{
	header("location: index.php?error=true");
	die;
}

?>