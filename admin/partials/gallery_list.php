<?php
include_once("functions/db.php");

$arrPhotos = runSelectSQL("SELECT * FROM gallery");

?>
	<div class="galleryList">
		<div>
		<h3>Photos</h3>
		<div class="galleryPhoto">
			<?php
			foreach($arrPhotos as $photo)
			{
			?>
			<div>
				<img class="photo" src="../assets/<?=$photo['strPhoto']?>"/>

				<a class="editBtn" href="edit_gallery.php?id=<?=$photo['id']?>">Edit</a>

				<a class="deleteBtn" href="delete_gallery.php?id=<?=$photo['id']?>">Delete</a>

			<?php

			}

			?></div>
		</div><!--galleryPhoto-->

	</div>	
