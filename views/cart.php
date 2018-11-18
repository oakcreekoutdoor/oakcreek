<div id="cartSummary" class="container">
	<div>
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
					<div class="product-Name">
						<p class="cart-label"><?=$prod['strName']?></p>
					</div>

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
						<p>$ <?=$prod['nPrice']?></p>
					</div>

				</div><!--cart-item-->
				<?php
				$arrNb += $a;
				}
			?>
		</div><!--cartItems-->

		<div id="cartCheckout" class="container">
		<?php
		$arrSum = [];
		foreach ($_SESSION['arrCart'] as $carts) 
		{
			array_push($arrSum, $carts['nPrice']);
		}
			$subTotal = number_format((float)(array_sum($arrSum)), 2, '.', '');
			$tax = number_format((float)(round(($subTotal*0.05), 2)), 2, '.', '');
			$sumTotal = $subTotal+$tax;
			$total = number_format((float)(round($sumTotal, 2)), 2, '.', '');

			$_SESSION['nTax'] = $tax;
			$_SESSION['subTotal'] = $subTotal;
			$_SESSION['nInvoice'] = $total;
		?>
			<div id="cart-checkout-price">
                <div class="cart-price">
				    <p>Subtotal</p>
				    <p>$ <?=$subTotal?></p>
                </div>
                <div class="cart-price">
				    <p>Shipping</p>
				    <p>FREE</p>
                </div>
                <div class="cart-price">
				    <p>Tax</p>
				    <p>$ <?=$tax?></p>
                </div>
				<div class="cart-price cart-total">
					<p>Total</p>
					<p>$ <?=$total?></p>
				</div><!--cart-total-->
				<a href="index.php?controller=Cart&action=shipping" class="btn prime">Checkout</a>
			</div>
		</div><!--cartCheckout-->
	<?php
		}
	?>
	</div>
</div><!--cartSummary-->

