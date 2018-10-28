<?php
include("partials/header.php");
include("partials/nav.php");
$arrPhotos = runSelectSQL("SELECT * FROM gallery WHERE id='".$_GET["id"]."'");
?>

	<div id="editService">
		<h1>Change Photo</h1>
		<form method="post" enctype="multipart/form-data" action="update_gallery.php?id=<?=$arrPhotos[0]['id']?>" onsubmit="return validateForm();">

			<?php
				if ($arrPhotos[0]['strPhoto'])
				{?>
					<div id="oldImageSystem">
						<img src="../assets/<?=$arrPhotos[0]['strPhoto']?>" name="oldImagePrev" width=200 />
						<a href="#" class="removeBtn" onClick="return removeImage();">Remove</a>
					</div>
				<?php 
				}?>

			<label class="requiredLabel">Photo:</label>
			<input type="file" name="strPhoto">

			<input type="submit" value="Save Changes">
			<a href="gallery.php">Cancel</a>

		</form>
	</div><!--editUser-->

<?php
include("partials/footer.php");
?>