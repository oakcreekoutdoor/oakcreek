<div class="cart-review">
	<h2>Cart Review</h2>
	<div class="cart-review-summary">
	<?php
	if(!empty($_SESSION["arrCart"]))
	{
		$arrProds = $_SESSION["arrCart"];
		foreach ($arrProds as $prod) {
		?>
			<div class="cart-review-item">
				<img src="assets/<?=$prod['strImage']?>">
				<div>
					<p class="cart-label"><?=$prod['strName']?></p>
					<p class="cart-label">Qty: <span>1</span></p>
					<p class="cart-label">Price: <span><?=$prod['nPrice']?></span></p>
				</div>
			</div><!--cart-item-review-->
	<?php
		}
	}
	?>
	</div><!--cart-review--summary-->
	<div class="cart-side-total">
		<p class="cart-label">Subtotal</p>
    <?php
    if(!empty($_SESSION["subTotal"])) {    
    ?>
		<p>$ <?=$_SESSION['subTotal']?></p>
    <?php
    }
    ?>
		<p class="cart-label">Shipping</p>
		<p>FREE</p>
		<p class="cart-label">Tax</p>
    <?php
    if(!empty($_SESSION["nTax"])) {    
    ?>
		<p>$ <?=$_SESSION['nTax']?></p>
    <?php
    }
    ?>
		<div class="cart-total">
			<p>Total</p>
        <?php
        if(!empty($_SESSION["nInvoice"])) {    
        ?>
            <p>$ <?=$_SESSION['nInvoice']?></p>
        <?php
        }
        ?>
		</div><!--cart-total-->
	</div>
</div><!--cart-review-->

<div class="policies">
	<p class="policies-title">Shipping & Delivery</p>
	<p>We deliver to 17 countries with some restrictions. Terms & Conditions apply.</p>
	<p class="policies-title">Free Returns</p>
	<p>Free returns on items purchased within the last 60 days.
	<p class="policies-title">Guarantee</p>
	<p>We stand behind everything we sell. If you’re not satisfied with your purchase, you can return it for a replacement or refund within one year of purchase. </p>
</div><!--policies-->