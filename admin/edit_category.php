<?php
include("check_user.php");
include("partials/header.php");
include("partials/nav.php");
$arrCategories = runSelectSQL("SELECT * FROM categories WHERE id='".$_GET["id"]."'
");
?>

	<div id="editForm">
		<h1>Edit Category</h1>
		<form method="post" enctype="multipart/form-data" action="update_category.php?id=<?=$arrCategories[0]['id']?>" onsubmit="return validateForm();">

			<label class="requiredLabel">Category Name:</label>
			<input type="text" class="requiredField" name="strName" value="<?=$arrCategories[0]['strName']?>">

			<label class="requiredLabel">Description:</label>
			<textarea class="requiredField" name="strDesc"><?=$arrCategories[0]['strDesc']?></textarea>

				<?php
				if ($arrCategories[0]['strHeroImage'])
				{?>
					<div id="oldImageSystem">
						<img src="../assets/<?=$arrCategories[0]['strHeroImage']?>" name="oldImagePrev" width=200 />
						<a href="#" class="deleteBtn" onClick="return removeImage();"><span class="far fa-trash-alt"></span></a>
					</div>
				<?php 
				}?>

			<label class="requiredLabel">Photo:</label>
			<input type="file" name="strHeroImage">

			<input type="submit" value="Save Changes">
			<a class="cancelBtn" href="categories.php">Cancel</a>

		</form>
	</div><!--editUser-->

<?php
include("partials/footer.php");
?>