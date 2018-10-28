<?php
include("partials/header.php");
include("partials/nav.php");
?>
<form method="post" action="save_page.php" enctype="multipart/form-data" onsubmit="return validateForm();" id="serviceForm">
	<h1>Add A Page</h1>
	<label class="requiredLabel">Page Title:</label>
	<input type="text" placeholder="Enter Page Name" name="strName" class="requiredField" value=""/>

	<label class="requiredLabel">Main Page</label>
	<input type="text" placeholder="Enter Main Page" name="bMainPage" class="requiredField" value=""/>

	<label>Heading1:</label>
	<input type="text" placeholder="Enter Heading1" name="strHeading1" value=""/>

	<label>Heading2:</label>
	<input type="text" placeholder="Enter Heading2" name="strHeading2" value=""/>

	<label>Subheading1:</label>
	<input type="text" placeholder="Enter Subheading1" name="strSubheading1" value=""/>

	<label>Subheading2:</label>
	<input type="text" placeholder="Enter Subheading2" name="strSubheading2" value=""/>

	<label>Body Text:</label>
	<textarea name="strBodyText" value=""></textarea>
	
	<input type="submit" value="Add Page">
</form>

<?php
include("partials/footer.php");
?>