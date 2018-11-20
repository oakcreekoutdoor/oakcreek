<section id="shop" class="container cf">
<?php
	foreach ($arrData["cats"] as $cat) {
?>
	<div class="shopCat">
		<div class="shopCat-text">
			<img src="images/<?=$cat["strIcon"]?>"/>
			<h2><?=$cat["strName"]?></h2>
			<a class="btn sec" href="index.php?controller=Pages&action=category&cID=<?=$cat["id"]?>">See Products</a>
		</div><!--shopCat-text-->
		<img src="assets/<?=$cat["strCoverPhoto"]?>" alt="<?=$cat["strName"]?>"/>
	</div><!-- //shopCat -->
<?php
	}
?>
</section><!-- //shop container -->