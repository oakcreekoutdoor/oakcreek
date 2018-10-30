<div id="cartSummary" class="container">
	<h2>Cart Summary</h2>
	<div id="cartItems">
		<?php
		if(!isset($_SESSION["arrCart"])){
			echo "No items added.";
		} else { 
			$arrProds = $_SESSION["arrCart"];
			$arrNb = 0;
			$a = 1;

			foreach($arrProds as $prod){		
			?>
			<div class="cart-item">
				<img src="assets/<?=$prod['strImage']?>">
				<p class="cart-label"><?=$prod['strName']?></p>
				<div>
					<p class="cart-label">Qty</p>
					<input type="number" name="quantity" value="1" min="1">
				</div>
				<div>
					<p class="cart-label">Remove</p>
					<a href="index.php?controller=Cart&action=delItem&nItem=<?=$arrNb?>"><span class="far fa-trash-alt"></span></a>
				</div>
				<div>
					<p class="cart-label">Price</p>
					<p><?=$prod['nPrice']?></p>
				</div>
			</div><!--cart-item-->
			<?php
			$arrNb += $a;
			}
		}
		?>
	</div><!--cartItems-->
</div><!--cartSummary-->

<div id="cartCheckout" class="container">
	<!-- <div>
		<div class="cart-code">
			<p class="cart-label">Postal Code</p>
			<input type="text"/>
			<a href="#" class="btn sec">Enter</a>
		</div>
		<div class="cart-code">
			<p class="cart-label">Coupon</p>
			<input type="text"/>
			<a href="#" class="btn sec">Enter</a>
		</div>
	</div> cart code and shipping calc-->

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
		<a href="index.php?controller=Cart&action=shipping" class="btn prime">Checkout</a>
	</div>


</div><!--cartCheckout-->

