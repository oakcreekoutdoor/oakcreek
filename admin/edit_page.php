<?php
include("partials/header.php");
include("partials/nav.php");
$arrPages = runSelectSQL("SELECT * FROM pages WHERE id='".$_GET["id"]."'");
?>

	<div id="editService">
		<h1>Edit Page</h1>
		<form method="post" enctype="multipart/form-data" action="update_page.php?id=<?=$arrPages[0]['id']?>" onsubmit="return validateForm();">

			<label class="requiredLabel">Page Title:</label>
			<input type="text" class="requiredField" name="strName" value="<?=$arrPages[0]['strName']?>">
             
            <label class="requiredLabel">Main Page:</label>

			<input type="radio" class="requiredField" name="bMainPage"  value="1">Yes
			
			<input type="radio" class="requiredField" name="bMainPage"  value="0">No

			<label>Heading1:</label>
			<input type="text" placeholder="Enter Heading1" name="strHeading1" value="<?=$arrPages[0]['strHeading1']?>"/>

			<label class="requiredLabel">Heading2:</label>
			<input type="text" class="requiredField" name="strHeading2" value="<?=$arrPages[0]['strHeading1']?>">

			<label>Subheading1:</label>
			<input type="text" name="strSubheading1" value="<?=$arrPages[0]['strSubheading1']?>"/>

			<label>Subheading2:</label>
			<input type="text" placeholder="Enter Subheading2" name="strSubheading2" value="<?=$arrPages[0]['strSubheading2']?>"/>

			<label>Body Text:</label>
			<textarea name="strBodyText"><?=$arrPages[0]['strBodyText']?></textarea>

			<input type="submit" value="Save Changes">
			<a href="pages.php">Cancel</a>

		</form>
	</div><!--editPage-->

<?php
include("partials/footer.php");
?>