<?php
session_start();

if (!isset($_SESSION["loggedUserId"])) 
{
	header("location: index.php?error=true");
	die;
}