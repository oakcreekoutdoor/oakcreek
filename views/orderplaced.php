<section id="thankyou" class="container cf">
    <div class="heroThankYou">
        <img src="assets/packages.jpg" alt="Picture" />
	     <h1>Thank You!</h1>
    </div>
<?php
    if(isset($_SESSION["orderID"]) && isset($_SESSION['userID']['email'])) {    
?>
	<p>Your order number is: <span>#<?=$_SESSION["orderID"]?></span></p>
	<p>We sent a copy to your e-mail: <span><?=$_SESSION['userID']['email']?></span></p>
<?php
     } else {
        echo "<p>Sorry! We can't find your order. Please contact us!</p>";
    }
?>
</section><!-- //Thank You container -->