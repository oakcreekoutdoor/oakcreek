<?php
include("partials/header.php");
include("partials/nav.php");
$arrUsers = runSelectSQL("SELECT * FROM admin WHERE id='".$_GET["id"]."'");
?>

	<div id="editUser">
		<h1>Edit User</h1>
		<form method="post" action="update_user.php?id=<?=$arrUsers[0]['id']?>" onsubmit="return validateForm();">

			<label class="requiredLabel">Full Name:</label>
			<input type="text" class="requiredField" name="strFullName" value="<?=$arrUsers[0]['strFullName']?>">

			<label class="requiredLabel">Username:</label>
			<input type="text" class="requiredField" name="strUsername" value="<?=$arrUsers[0]['strUsername']?>">

			<label class="requiredLabel">Password:</label>
			<input type="password" class="requiredField" name="strPassword" placeholder="Enter new password">

			<input type="submit" value="Save Changes">
			<a href="users.php">Cancel</a>

		</form>
	</div><!--editUser-->

<?php
include("partials/footer.php");
?>