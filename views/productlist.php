<?php
foreach($arrData as $product)
{
?>
	<div class="product col-3">
		<img src="assets/<?=$product["strName"]?>" alt="<?=$product["strName"]?>" />
		<p>Price: $<?=$product["nPrice"]?></p>
		<a class="btn sec" href="#">View Details</a>
	</div><!-- //product col-3 -->
<?php
}
?>