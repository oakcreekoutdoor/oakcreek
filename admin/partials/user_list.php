<?php
include_once("functions/db.php");

$arrMyUsers = runSelectSQL("SELECT * FROM users WHERE bAdmin = 1");

?>

<div class="contactList">
	<div class="fullName">
		<h3>Full Name</h3>

		<?php
		foreach($arrMyUsers as $user)
		{
		?>
		<div>
			<a class="editBtn" href="edit_user.php?id=<?=$user['id']?>"><span class="far fa-edit"></span></a>
			<a class="deleteBtn" href="delete_user.php?id=<?=$user['id']?>"><span class="far fa-trash-alt"></span></a> 
			<?=$user['strFullName']?>
		</div>
		<?php
		}
		?>
		</div>

	<div class="userName">
		<h3>Username</h3>

		<?php
		foreach($arrMyUsers as $user)
		{
		?>
		<div><?=$user['strUserName']?></div>

		<?php
		}
		?>
	</div>

	<div class="password">
		<h3>Password</h3>

		<?php
		foreach($arrMyUsers as $user)
		{
		?>
		<div><?=$user['strPassword']?></div>
		
		<?php
		}
		?>
	</div>

    <div class="email">
		<h3>Email Address</h3>

		<?php
		foreach($arrMyUsers as $user)
		{
		?>
		<div><?=$user['strEmailAddress']?></div>

		<?php
		}
		?>
	</div>

    <div class="Phone">
		<h3>Phone Number</h3>

		<?php
		foreach($arrMyUsers as $user)
		{
		?>
		<div><?=$user['nPhone']?></div>

		<?php
		}
		?>
	</div>
</div><!--contactList-->