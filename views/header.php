<!DOCTYPE html>
<html>
<head>
	<title>Oak Creek Outdoor Supply</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>

	<header>
		<div class="container">
			<div class="logo">
				<h1>Oak Creek Outdoor Supply</h1>
				<a href="index.php?controller=Pages&action=home"><img src="images/logo_black.png" alt="Logo" /></a>
			</div><!-- //logo -->
			<div class="cart-user">
				<a class="user" href="index.php?controller=Account&action=login"><span class="fas fa-user-circle"></span>Login / Sign Up</a>
				<a href="index.php?controller=Cart&action=cart"><span class="fas fa-shopping-cart"></span>Cart (0)</a>
			</div><!-- //cart-user -->
			<?php 
				if(($_GET["controller"]=="Pages") || ($_GET["controller"]=="Account") || ($_GET["action"]=="cart"))
				{
					include("views/nav.php");
				}
			?>
		</div><!-- //container -->
	</header><!-- //header -->