<?php
include("partials/header.php");
include("partials/nav.php");
?>
<form method="post" action="save_inventory.php" enctype="multipart/form-data" onsubmit="return validateForm();" id="addForm">
	<h1>Add A Product</h1>

	<label class="requiredLabel">Product Name:</label>
	<input type="text" placeholder="Enter Product Name" name="strName" class="requiredField" value=""/>

	<label class="requiredLabel">Category:</label>
	<div class="cbOptions" >
      <?php
		$arrCategories = getRecords("SELECT * FROM categories");
			foreach($arrCategories as $category)
			{
			?>
          	  <input type="checkbox" name="category[]" value="<?=$category['id']?>"><span> <?=$category['strName']?></span><br/>
         	<?php
         	}
         	?>
        </div>

	<label class="requiredLabel">Price:</label>
	<span>$</span><input type="text" placeholder="0.00" name="nPrice" class="requiredField" value=""/>

	<div class="formQuantity">
		<label class="requiredLabel">Quantity:</label>
		<input type="number" value="" name="nQuantity"/>
	</div><!--formQuantity-->

	<label class="requiredLabel">Description:</label>
	<textarea class="requiredField" name="strDescription" id="strDescription" value=""></textarea>

	<label class="requiredLabel">Photo/s:</label>
	<input type="file" class="requiredField" name="strFeatPhoto">
	
	<input type="submit" value="Add Product">
</form>

<?php
include("partials/footer.php");
?>