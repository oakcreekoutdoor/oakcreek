<div class="modalBox">
	<div class="modalCont">
		<h1>Item Added!</h1>
		<div class="modalProd">
			<div class="modalImg">
				<img src="assets/<?=$arrPhoto[0]?>" alt="<?=$arrPhoto[0]?>" />
			</div><!-- //modalImg -->
			<div class="modalInfo">
				<h2><?=$arrData["product"][0]["strName"]?></h2>
				<p><span class="modalLabel">Price:</span> $<?=$arrData["product"][0]["nPrice"]?></p>
				<p><span class="modalLabel">Quantity:</span> 1</p>
			</div><!-- //modalInfo -->
		</div><!-- //modalProd -->
		
		<div class="modalAdd">
			<h3>Do you want to add more items?</h3>
			<a href="#" id="goBack" class="btn sec">Continue Shopping</a>
			<a href="index.php?controller=Cart&action=cart" class="btn prime">Go to Checkout</a>
		</div><!-- //modalAdd -->
	</div><!-- //modalCont -->
</div><!-- //modalBox -->