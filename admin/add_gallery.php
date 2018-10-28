<?php
include("partials/header.php");
include("partials/nav.php");
?>
<form method="post" action="save_gallery.php" enctype="multipart/form-data" onsubmit="return validateForm();" id="serviceForm">
	<h1>Add A Photo</h1>

	<label class="requiredLabel">Cover Photo:</label>
	<input type="file" class="requiredField" id="strPhoto" name="strPhoto">
	
	<input type="submit" value="Add Photo">
</form>

<?php
include("partials/footer.php");
?>