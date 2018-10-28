<?php
include("partials/header.php");
include("partials/nav.php");
?>
<form method="post" action="save_menu.php" enctype="multipart/form-data" onsubmit="return validateForm();" id="serviceForm">
	<h1>Add A Course</h1>
	<label class="requiredLabel">Course Name:</label>
	<input type="text" placeholder="Enter Course Name" name="strName" id="strName" class="requiredField" value=""/>
	<label class="requiredLabel">Details:</label>
	<textarea class="requiredField" name="strDetails" id="strDetails" value=""></textarea>
	<label class="requiredLabel">Cover Photo:</label>
	<input type="file" class="requiredField" id="strPhoto" name="strPhoto">
	
	<input type="submit" value="Add Course">
</form>

<?php
include("partials/footer.php");
?>