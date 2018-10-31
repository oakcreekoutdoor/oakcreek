<section id="thankyou" class="container cf">
	<img src="assets/thankyouimage.jpg" alt="Picture of Grand Canyon">
	<h1>Thank You</h1>
	<p>Your order number is: <span>#<?=$_SESSION["orderID"]?></span></p>
	<p>We sent a copy to your e-mail: <span><?=$arrData["oUserID"][0]["strEmailAddress"]?></span></p>
</section><!-- //Thank You container -->