<!DOCTYPE html>
<html>
<head>
	<title>Oak Creek Outdoor Supply</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">

	<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:400,600|Muli:400,600,700,700i,800i|Zilla+Slab:700" rel="stylesheet">

	<link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
	<link rel="manifest" href="images/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>

	<header>
		<div class="container">
			<div class="logo">
				<h1>Oak Creek Outdoor Supply</h1>
				<a href="index.php"><img src="images/logo_black.png" alt="Logo" /></a>
			</div><!-- //logo -->

			<div class="socialMedia">
				<a href="#"><span class="fab fa-facebook-square"></span></a>
				<a href="#"><span class="fab fa-instagram"></span></a>
				<a href="#"><span class="fab fa-youtube-square"></span></a>
			</div><!--//socialMedia-->
            
            <div class="cart-user">
            <?php
            if(!isset($_SESSION["userID"])){
            ?>
				<a class="user" href="index.php?controller=Account&action=login"><span class="fas fa-user-circle"></span>Login / Sign Up</a>
            <?php
            } else {
            ?>
                <a class="user" href="index.php?controller=Account&action=profile&userID=<?=$_SESSION['userID']['id']?>"><span class="fas fa-user-circle"></span>My Account</a>
            <?php
            }
            ?>
				<a href="index.php?controller=Cart&action=cart"><span class="fas fa-shopping-cart"></span>Cart (
				<?php
					if(isset($_SESSION["arrCart"])) {
						echo (count($_SESSION["arrCart"]));
					} else {
						echo "0";
					}
				?> items )</a>
			</div><!-- //cart-user -->

			<?php 
				include("views/nav.php");
			?>
		</div><!-- //container -->
	</header><!-- //header -->