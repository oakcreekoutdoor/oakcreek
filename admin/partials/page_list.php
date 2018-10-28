<?php
include_once("functions/db.php");

$arrPages = runSelectSQL("SELECT * FROM pages");

?>
	<div class="pageList">
		<div>
			<h3>Page Name</h3>

			<?php
			foreach($arrPages as $page)
			{
			?>
			<div><a class="editBtn" href="edit_page.php?id=<?=$page['id']?>">Edit</a><a class="deleteBtn" href="delete_page.php?id=<?=$page['id']?>">Delete</a><?=$page['strName']?>

		</div>
	<?php

	}

	?></div>

	
