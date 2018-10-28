<?php
include("partials/header.php");
include("partials/nav.php");
?>
<section id="content">
	<div id="content-list">
		<h1>Manage Inventory</h1>
		<a class="addBtn fas fa-plus" href="add_inventory.php"> Add Product</a>
		<div id="serviceBox">

			<?php
				include_once("functions/db.php");
				include("partials/inventory_list.php");
			?>

		</div>
	</div>
</section>

<?php
include("partials/footer.php");
?>