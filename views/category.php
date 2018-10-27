<section id="product" class="container">
	<div id="heroDiv">
		<div class="heroText">
			<h2>Category Name</h2>
			<p>Some description here</p>
		</div><!-- //heroText-->
		<img src="assets/hero.jpeg" alt="hero" />
	</div><!-- //heroDiv-->
	
	<div id="breadCrumb">
		<a href="#">Home > Shop > Category Name</a>
	</div><!-- //breadCrumb -->

	<div id="productGrid">
		<?php
			include("views/product_grid.php");
		?>
	</div><!-- //productGrid -->
</section><!-- //product container -->