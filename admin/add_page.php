<?php
include("partials/header.php");
include("partials/nav.php");
?>
<form method="post" action="save_page.php" enctype="multipart/form-data" onsubmit="return validateForm();" id="serviceForm">
	<h1>Add A Page</h1>
	<label>Template:</label>
		<select name="nTemplatesID">
			<?php
			$arrAllTemplates = runSelectSQL("SELECT * FROM templates");

			foreach($arrAllTemplates as $template)
			{
				echo "<option value='".$template["id"]."'>".$template["strName"]."</option>";
			}
			?>
			
		</select><br/>

	<label class="requiredLabel">Page Title:</label>
	<input type="text" placeholder="Enter Page Name" name="strName" class="requiredField" value=""/>

	<label>Heading:</label>
	<input type="text" placeholder="Enter Heading" name="strHeading" value=""/>

	<label>Subheading:</label>
	<input type="text" placeholder="Enter Subheading" name="strSubheading" value=""/>

	<label>Body Text:</label>
	<textarea name="strBodyText" value=""></textarea>
	
	<input type="submit" value="Add Page">
</form>

<?php
include("partials/footer.php");
?>