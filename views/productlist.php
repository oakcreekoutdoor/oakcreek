<?php
foreach($arrData["prods"] as $product)
{
?>
	<div class="product col-3">
		<a class="prodImg" href="index.php?controller=Pages&action=product&pID=<?=$product['nProductsID']?>"><img src="assets/<?=$product['strFeatPhoto']?>" alt="<?=$product['strFeatPhoto']?>" /></a>
		<p class="prod-name"><?=$product["strName"]?></p>
		<span class="old-price">$<?=$product["nOldPrice"]?></span>
		<span class="new-price">$<?=$product["nPrice"]?></span>
		<a class="btn sec" href="index.php?controller=Pages&action=product&pID=<?=$product['nProductsID']?>">View Details</a>
	</div><!-- //product col-3 -->
<?php
}
?>