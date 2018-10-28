<?php
include_once("functions/db.php");

$arrMenu = runSelectSQL("SELECT * FROM wedding_menu");

?>
	<div class="serviceList">
		<div>
			<h3>Service</h3>

			<?php
			foreach($arrMenu as $menu)
			{
			?>
			<div><p><?=$menu['strName']?></p><a class="editBtn" href="edit_menu.php?id=<?=$menu['id']?>">Edit</a><a class="deleteBtn" href="delete_menu.php?id=<?=$menu['id']?>">Delete</a>

		</div>
	<?php

	}

	?></div>

	<div>
		<h3>Description</h3>

		<?php
		foreach($arrMenu as $menu)
		{
		?>
		<div><?=$menu['strDetails']?>

	</div>

<?php

}

?></div>

	<div>
		<h3>Cover Photo</h3>

		<?php
		foreach($arrMenu as $menu)
		{
		?>
		<div><img class="photo" src="../assets/<?=$menu['strPhoto']?>"/>

	</div>


	<?php

	}

	?></div>

	</div>	
