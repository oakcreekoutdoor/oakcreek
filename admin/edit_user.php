<?php
include("check_user.php");
include("partials/header.php");
include("partials/nav.php");
$arrUsers = runSelectSQL("SELECT * FROM users WHERE id='".$_GET["id"]."'");
?>

	<div id="editUser">
		<h1>Edit Details</h1>
		<form method="post" action="update_user.php?id=<?=$arrUsers[0]['id']?>" onsubmit="return validateForm();">

			<label class="requiredLabel">Full Name:</label>
			<input type="text" class="requiredField" name="strFullName" value="<?=$arrUsers[0]['strFullName']?>">

			<label class="requiredLabel">Username:</label>
			<input type="text" class="requiredField" name="strUserName" value="<?=$arrUsers[0]['strUserName']?>">

			<label class="requiredLabel">Password:</label>
			<input type="password" class="requiredField" name="strPassword" placeholder="Enter new password">

			<label class="requiredLabel">Email Address:</label>
			<input type="text" class="requiredField" name="strEmailAddress" value="<?=$arrUsers[0]['strEmailAddress']?>">

			<label class="requiredLabel">Phone Number:</label>
			<input type="text" class="requiredField" name="nPhone" value="<?=$arrUsers[0]['nPhone']?>">

			<input type="submit" value="Save Changes">
			<a href="users.php">Cancel</a>

		</form>
	</div><!--editUser-->

<?php
include("partials/footer.php");
?>