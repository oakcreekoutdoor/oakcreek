<section id="thankyou" class="container cf">
    <div class="heroThankYou">
        <img src="assets/packages.jpg" alt="Picture" />
	     <h1>Thank You!</h1>
    </div>
	<p>Your order number is: <span>#<?=$_SESSION["orderID"]?></span></p>
	<p>We sent a copy to your e-mail: <span><?=$_SESSION['userID']['email']?></span></p>
</section><!-- //Thank You container -->