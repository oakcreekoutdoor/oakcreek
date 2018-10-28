<?php
include("partials/header.php");
include("partials/nav.php");
$arrMenu = runSelectSQL("SELECT * FROM wedding_menu WHERE id='".$_GET["id"]."'");
?>

	<div id="editService">
		<h1>Edit Course</h1>
		<form method="post" enctype="multipart/form-data" action="update_menu.php?id=<?=$arrMenu[0]['id']?>" onsubmit="return validateForm();">

			<label class="requiredLabel">Course Name:</label>
			<input type="text" class="requiredField" name="strName" value="<?=$arrMenu[0]['strName']?>">

			<label class="requiredLabel">Description:</label>
			<textarea class="requiredField" name="strDetails"><?=$arrMenu[0]['strDetails']?></textarea>

			<?php
				if ($arrMenu[0]['strPhoto'])
				{?>
					<div id="oldImageSystem">
						<img src="../assets/<?=$arrMenu[0]['strPhoto']?>" name="oldImagePrev" width=200 />
						<a href="#" class="removeBtn" onClick="return removeImage();">Remove</a>
					</div>
				<?php 
				}?>

			<label class="requiredLabel">Cover Photo:</label>
			<input type="file" name="strPhoto">

			<input type="submit" value="Save Changes">
			<a href="menu.php">Cancel</a>

		</form>
	</div><!--editUser-->

<?php
include("partials/footer.php");
?>