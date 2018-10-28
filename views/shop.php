<section id="shop" class="container cf">
<?php
	foreach ($arrData["cats"] as $cat) {
?>
		<div class="shopCat">
			<h2 href="#"><?=$cat["strName"]?></h2>
			<a class="btn prime" href="#">See Products</a>
		</div><!-- //shopCat -->
<?php
	}
?>
</section><!-- //shop container -->