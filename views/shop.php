<section id="shop" class="container cf">
<?php
	foreach ($arrData["cats"] as $cat) {
?>
		<div class="shopCat">
			<h2><?=$cat["strName"]?></h2>
			<a class="btn prime" href="index.php?controller=Pages&action=category&cID=<?=$cat["id"]?>">See Products</a>
		</div><!-- //shopCat -->
<?php
	}
?>
</section><!-- //shop container -->