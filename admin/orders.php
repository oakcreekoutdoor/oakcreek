<?php
include("partials/header.php");
include("partials/nav.php");
?>
<section id="content">
	<div id="content-list">
		<h1>Manage Orders</h1>
		
		<div class="contentBox">

			<?php
				include_once("functions/db.php");
				include("partials/order_list.php");
			?>

		</div>
	</div>
</section>

<?php
include("partials/footer.php");
?>