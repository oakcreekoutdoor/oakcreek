<?php
foreach($arrData["prods"] as $product)
{
?>
	<div class="product col-3">
		<a class="prodImg" href="index.php?controller=Pages&action=product&pID=<?=$product['id']?>"><img src="assets/" alt="" /></a>
		<p>Price: $<?=$product["nPrice"]?></p>
		<a class="btn sec" href="index.php?controller=Pages&action=product&pID=<?=$product['id']?>">View Details</a>
	</div><!-- //product col-3 -->
<?php
}
?>