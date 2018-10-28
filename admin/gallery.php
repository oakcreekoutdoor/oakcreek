<?php
include("partials/header.php");
include("partials/nav.php");
?>
<section id="services">
	<div id="service-list">
		<h1>Manage Gallery</h1>
		<a class="addBtn" href="add_gallery.php">Add a Photo</a>
		<div id="serviceBox">

			<?php
				include_once("functions/db.php");
				include("partials/gallery_list.php");
			?>

		</div>
	</div>
</section>

<?php
include("partials/footer.php");
?>