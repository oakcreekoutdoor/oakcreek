<?php 
if (!isset($_SESSION["userID"]) || ($_SESSION["userID"]['id'] != $_GET['userID'])) 
{
	header("location: index.php?controller=Account&action=login");
	die;
} 
?>