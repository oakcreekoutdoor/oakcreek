<?php 
if (!isset($_SESSION["userID"]) || ($_SESSION["userID"] != $_GET['userID'])) 
{
	header("location: index.php?controller=Account&action=login");
	die;
} 
?>