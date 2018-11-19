<section id="product" class="container">		
	<?php 
	//include("views/breadcrumb.php");
	?>

	<div id="prodDetails">
		<div class="imgText col-img cf">
			<img class="bigImg" src="assets/<?=$arrData['product'][0]['strFeatPhoto']?>" alt="<?=$arrData['product'][0]['strFeatPhoto']?>" />

			<div class="prod-photos">
				
					<img src="assets/m-gc-1.jpg" alt="<?=$arrData["product"][0]["strName"]?>"/>
				

				
					<img src="assets/m-gc-2.jpg" alt="<?=$arrData["product"][0]["strName"]?>"/>
				

			
					<img src="assets/m-gc-3.jpg" alt="<?=$arrData["product"][0]["strName"]?>"/>
				

			
					<img src="assets/m-gc-4.jpg" alt="<?=$arrData["product"][0]["strName"]?>"/>
			

			</div><!--//prod-photos-->
		</div>

		<div class="imgText col-text">
			<h2><?=$arrData["product"][0]["strName"]?></h2>

			<div class="ratings">
				<img class="leaf" src="images/icon_leaf"/>
				<img class="leaf" src="images/icon_leaf"/>
				<img class="leaf" src="images/icon_leaf"/>
				<img class="leaf" src="images/icon_leaf"/>
				<img class="leaf" src="images/icon_leaf_beige"/>
				<p>10 reviews</p>
			</div><!--//ratings-->

			<div class="prod-price">
				<span class="old-price">$<?=$arrData["product"][0]["nOldPrice"]?></span>
				<span class="new-price">$<?=$arrData["product"][0]["nPrice"]?></span>
			</div><!--//prodprice-->

			<h4>Description:</h4>
			<ul>
			<?php 
				echo '<li>' . str_replace(',', '</li><li>', $arrData["product"][0]["strDescription"]) . '</li>'; 
			?>
			</ul>

			<p><span class="bold">Size:</span> <?=$arrData["product"][0]["strSize"]?></p>

			<p><span class="bold">Color:</span> <?=$arrData["product"][0]["strColor"]?></p>

			<span class="bold">Qty:</span>
			<input type="number" name="quantity" value="1" min="1">

			<a href="index.php?controller=Pages&action=addItem&pID=<?=$arrData['product'][0]['id']?>" id="addCart" class="btn prime"><span class="fas fa-shopping-cart"></span> Add to Cart</a>
		</div><!-- //imgText col-text -->
	</div><!-- //prodDetails -->
</section><!-- //product container -->
<?php //include("views/modalbox_itemadded.php")?>