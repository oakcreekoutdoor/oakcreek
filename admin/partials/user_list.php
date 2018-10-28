<?php
include_once("functions/db.php");

$arrMyContacts = runSelectSQL("SELECT * FROM admin");

?>

<div class="contactList">
	<div class="fullName">
		<h3>Full Name</h3>

		<?php
		foreach($arrMyContacts as $contact)
		{
		?>
		<div><a class="editBtn" href="edit_user.php?id=<?=$contact['id']?>">Edit</a><a class="deleteBtn" href="delete_user.php?id=<?=$contact['id']?>">Delete</a><?=$contact['strFullName']?>

	</div>

<?php

}

?></div>

	<div class="userName">
		<h3>Username</h3>

		<?php
		foreach($arrMyContacts as $contact)
		{
		?>
		<div><?=$contact['strUsername']?>

	</div>

<?php

}

?></div>

	<div class="password">
		<h3>Password</h3>

		<?php
		foreach($arrMyContacts as $contact)
		{
		?>
		<div><?=$contact['strPassword']?>

	</div>


<?php

}

?></div>

</div>	