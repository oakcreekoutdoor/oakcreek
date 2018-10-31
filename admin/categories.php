<?php
include("check_user.php");
include("partials/header.php");
include("partials/nav.php");
?>
<section id="content">
	<div id="content-list">
		<h1>Manage Categories</h1>
		<a class="addBtn fas fa-plus" href="add_category.php"> <p> Add Category</p></a>
		<div class="contentBox">

			<?php
				include_once("functions/db.php");
				include("partials/category_list.php");
			?>

		</div>
	</div>
</section>

<?php
include("partials/footer.php");
?>