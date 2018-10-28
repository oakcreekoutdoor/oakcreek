<?php
include_once("functions/db.php");

$arrProducts = runSelectSQL("
	SELECT 
			products.*, 
			categories.strName AS strCategoryName 
	FROM 
			product_cats
	LEFT JOIN products ON product_cats.nProductsID = products.id 
	LEFT JOIN categories ON product_cats.nCategoriesID = categories.id
");

$arrPhotos = runSelectSQL("
	SELECT 
		* 
	FROM 
		product_photos 
	LEFT JOIN products ON product_photos.nProductsID = products.id
");

?>
	<div class="serviceList">
		<div>
			<h3>Listings</h3>

			<?php
			foreach($arrProducts as $product)
			{
			?>
			<div><p><?=$product['strName']?></p><a class="editBtn" href="edit_inventory.php?id=<?=$product['id']?>">Edit</a><a class="deleteBtn" href="delete_inventory.php?id=<?=$product['id']?>">Delete</a>

		</div>
	<?php

	}

	?></div>

	<div>
		<h3>Price</h3>

		<?php
		foreach($arrProducts as $product)
		{
		?>
		<div><?=$product['nPrice']?>

	</div>

<?php

}

?></div>

	<div>
		<h3>Cover Photo</h3>

		<?php
		foreach($arrPhotos as $photo)
		{
		?>
		<div><img class="photo" src="../assets/<?=$photo['strPhoto']?>"/>

	</div>


	<?php

	}

	?></div>

	</div>	
