<?php
include("check_user.php");
include("partials/header.php");
include("partials/nav.php");
?>
<section id="content">
	<div id="content-list">
		<h1>Manage Inventory</h1>
		<a class="addBtn fas fa-plus" href="add_inventory.php"> <p> Add Product</p></a>
		<div class="contentBox">

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