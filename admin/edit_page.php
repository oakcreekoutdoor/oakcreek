<?php
include("partials/header.php");
include("partials/nav.php");
$arrPages = runSelectSQL("SELECT * FROM pages WHERE id='".$_GET["id"]."'");
?>

	<div id="editService">
		<h1>Edit Page</h1>
		<form method="post" enctype="multipart/form-data" action="update_page.php?id=<?=$arrPages[0]['id']?>" onsubmit="return validateForm();">

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
			<input type="text" class="requiredField" name="strName" value="<?=$arrPages[0]['strName']?>">

			<label>Heading:</label>
			<input type="text" name="strHeading" value="<?=$arrPages[0]['strHeading']?>"/>

			<label>Subheading:</label>
			<input type="text" placeholder="Enter Subheading" name="strSubheading" value="<?=$arrPages[0]['strSubheading']?>"/>

			<label>Body Text:</label>
			<textarea name="strBodyText"><?=$arrPages[0]['strBodyText']?></textarea>

			<input type="submit" value="Save Changes">
			<a href="pages.php">Cancel</a>

		</form>
	</div><!--editUser-->

<?php
include("partials/footer.php");
?>