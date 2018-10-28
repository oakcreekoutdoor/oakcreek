<?php
foreach($arrData as $product)
{
?>
	<div class="product col-3">
		<a href="index.php?controller=Pages&action=product&pID=<?=$product["id"]?>"><img src="assets/<?=$product["strPhoto"]?>" alt="<?=$product["strPhoto"]?>" /></a>
		<p>Price: $<?=$product["nPrice"]?></p>
		<a class="btn sec" href="index.php?controller=Pages&action=product&pID=<?=$product["id"]?>">View Details</a>
	</div><!-- //product col-3 -->
<?php
}
?>