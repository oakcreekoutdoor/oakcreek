<?php
include("partials/header.php");
include("partials/nav.php");
?>
<section id="services">
	<div id="service-list">
		<h1>Existing Pages</h1>
		<a class="addBtn" href="add_page.php">Add a Page</a>
		<div id="serviceBox">

			<?php
				include_once("functions/db.php");
				include("partials/page_list.php");
			?>

		</div>
	</div>
</section>

<?php
include("partials/footer.php");
?>