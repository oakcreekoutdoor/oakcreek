<?php
include("partials/header.php");
include("partials/nav.php");
?>
<section id="services">
	<div id="service-list">
		<h1>Manage Menu</h1>
		<a class="addBtn" href="add_menu.php">Add a Course</a>
		<div id="serviceBox">

			<?php
				include_once("functions/db.php");
				include("partials/menu_list.php");
			?>

		</div>
	</div>
</section>

<?php
include("partials/footer.php");
?>