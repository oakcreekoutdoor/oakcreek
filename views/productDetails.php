<section id="product" class="container">		
	<?php 
	//include("views/breadcrumb.php");
	$arrPhoto = array_map("trim", explode(", ",$arrData["product"][0]["strPhotos"]));
	?>

	<div id="prodDetails">
		<div class="imgText col-img cf">
			<img class="bigImg" src="assets/<?=$arrPhoto[0]?>" alt="<?=$arrPhoto[0]?>" />
		<?php
		foreach($arrPhoto as $photo)
		{
		?>
			<img class="smallImg" src="assets/<?=$photo?>" alt="<?=$photo?>" />
		<?php
		}
		?>
		</div><!-- //imgText col-img -->

		<div class="imgText col-text">
			<h2><?=$arrData["product"][0]["strName"]?></h2>
			<h3>Price: $<?=$arrData["product"][0]["nPrice"]?></h3>
			<span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span>
			<h4>Description</h4>
			<p><?=$arrData["product"][0]["strDescription"]?></p>
			<a href="index.php?controller=Pages&action=addItem&pID=<?=$arrData['product'][0]['id']?>" id="addCart" class="btn prime">Add to Cart</a>
		</div><!-- //imgText col-text -->
	</div><!-- //prodDetails -->
</section><!-- //product container -->
<?php //include("views/modalbox_itemadded.php")?>