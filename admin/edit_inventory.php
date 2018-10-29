<?php
include("partials/header.php");
include("partials/nav.php");
$arrProducts = runSelectSQL("
	SELECT 
			products.*, 
			categories.strName AS strCategoryName 
	FROM 
			product_cats

	LEFT JOIN products ON product_cats.nProductsID = products.id 
	LEFT JOIN categories ON product_cats.nCategoriesID = categories.id

	WHERE products.id='".$_GET["id"]."'
");
?>

	<div id="editForm">
		<h1>Edit Product Details</h1>
		<form method="post" enctype="multipart/form-data" action="update_inventory.php?id=<?=$arrProducts[0]['id']?>" onsubmit="return validateForm();">

			<label class="requiredLabel">Product Name:</label>
			<input type="text" class="requiredField" name="strName" value="<?=$arrProducts[0]['strName']?>">

			<label class="requiredLabel">Select Category:</label>
			<div class="cbOptions" >
		      <?php
				$arrCategories = getRecords("SELECT * FROM categories");
					foreach($arrCategories as $category)
					{
					?>
					<div>
		          	  <span> <?=$category['strName']?></span><input type="checkbox" name="category[]" value="<?=$category['id']?>"><br/>
		          	</div>
		         	<?php
		         	}
		         	?>
		        </div>

		    <label class="requiredLabel">Price:</label>
			<span>$</span><input type="text" placeholder="0.00" name="nPrice" class="requiredField" value="<?=$arrProducts[0]['nPrice']?>"/>

			<div class="formQuantity">
				<label class="requiredLabel">Quantity:</label>
				<input type="number" value="<?=$arrProducts[0]['nQuantity']?>" name="nQuantity"/>
			</div><!--formQuantity-->

			<label class="requiredLabel">Description:</label>
			<textarea class="requiredField" name="strDescription"><?=$arrProducts[0]['strDescription']?></textarea>

				<?php
				if ($arrProducts[0]['strFeatPhoto'])
				{?>
					<div id="oldImageSystem">
						<img src="../assets/<?=$arrProducts[0]['strFeatPhoto']?>" name="oldImagePrev" width=200 />
						<a href="#" class="deleteBtn" onClick="return removeImage();"><span class="far fa-trash-alt"></span></a>
					</div>
				<?php 
				}?>

			<label class="requiredLabel">Photo:</label>
			<input type="file" name="strFeatPhoto">

			<input type="submit" value="Save Changes">
			<a class="cancelBtn" href="inventory.php">Cancel</a>

		</form>
	</div><!--editUser-->

<?php
include("partials/footer.php");
?>