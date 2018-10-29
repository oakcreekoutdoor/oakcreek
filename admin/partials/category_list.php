<?php
include_once("functions/db.php");

$arrCategories = runSelectSQL("SELECT * FROM categories");

?>
	<div class="contentList">
		<div>
			<h3>Name</h3>

			<?php
			foreach($arrCategories as $category)
			{
			?>
			<div>
				<p><?=$category['strName']?></p>
				<a class="editBtn" href="edit_category.php?id=<?=$category['id']?>"><span class="far fa-edit"></span></a>
				<a class="deleteBtn" href="delete_category.php?id=<?=$category['id']?>"><span class="far fa-trash-alt"></span></a>
			</div>
		<?php
		}
		?></div>

		<div>
			<h3>Description</h3>

			<?php
			foreach($arrCategories as $category)
			{
			?>
			<div><?=$category['strDesc']?></div>

		<?php
		}
		?></div>

		<div>
			<h3>Photo</h3>

			<?php
			foreach($arrCategories as $category)
			{
			?>
			<div><img class="photo" src="../assets/<?=$category['strHeroImage']?>"/></div>
		<?php
		}
		?></div>
	</div><!--serviceList-->