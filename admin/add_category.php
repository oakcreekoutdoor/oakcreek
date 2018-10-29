<?php
include("partials/header.php");
include("partials/nav.php");
?>
<form method="post" action="save_category.php" enctype="multipart/form-data" onsubmit="return validateForm();" id="addForm">
	<h1>Add A Category</h1>

	<label class="requiredLabel">Category Name:</label>
	<input type="text" placeholder="Enter Category Name" name="strName" class="requiredField" value=""/>

	<label class="requiredLabel">Description:</label>
	<textarea class="requiredField" name="strDesc" id="strDesc" value=""></textarea>

	<label class="requiredLabel">Cover Photo:</label>
	<input type="file" class="requiredField" name="strHeroImage">
	
	<input type="submit" value="Add Category">
</form>

<?php
include("partials/footer.php");
?>