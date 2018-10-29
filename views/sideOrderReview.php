<div class="cart-review">
	<h2>Cart Review</h2>
	<div class="cart-review-summary">
	<?php
	$arrProds = $_SESSION["arrCart"];
	foreach ($arrProds as $prod) {
	?>
		<div class="cart-review-item">
			<img src="assets/<?=$prod['strImage']?>">
			<div>
				<p class="cart-label"><?=$prod['strName']?></p>
				<p class="cart-label">Qty: 1</p>
				<p class="cart-label">Price</p>
				<p><?=$prod['nPrice']?></p>
			</div>
		</div><!--cart-item-review-->
	<?php
	}
	?>
	</div><!--cart-review--summary-->
	<div>
		<p class="cart-label">Subtotal</p>
		<p>$280.00</p>
		<p class="cart-label">Shipping</p>
		<p>FREE</p>
		<p class="cart-label">Coupon</p>
		<p>$0.00</p>
		<p class="cart-label">Tax</p>
		<p>$7.26</p>
		<div class="cart-total">
			<p>Total</p>
			<p>$287.26</p>
		</div><!--cart-total-->
	</div>
</div><!--cart-review-->

<div class="policies">
	<p class="policies-title">Shipping & Delivery</p>
	<p>We deliver to 17 countries with some restrictions. Terms & Conditions apply.</p>
	<p class="policies-title">Free Returns</p>
	<p>Free returns on items purchased within the last 60 days.
	<p class="policies-title">Guarantee</p>
	<p>Free returns on items purchased within the last 60 days.</p>
</div><!--policies-->