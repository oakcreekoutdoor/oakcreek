<?php 
if (!isset($_SESSION["userID"])) 
{
	header("location: index.php?controller=Account&action=login");
	die;
} 
?>