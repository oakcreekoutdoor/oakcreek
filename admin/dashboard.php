<?php
include("partials/header.php");
include("partials/nav.php");
$arrUsers = runSelectSQL("SELECT * FROM users");
?>
	<div id="welcome" class="text-center">
		<h1>Welcome back, <?=$arrUsers[0]["strFullName"]?>!</h1>

		<div id="manage">
			<div>
				
				<a href="users.php"><img src="img/users.png"/><br/>Users</a>
			</div>

			<div>
				<a href="gallery.php"><img src="img/gallery.png"/><br/>Products</a>
			</div>

			<div>
				<a href="menu.php"><img src="img/menu.png"/><br/>Orders</a>
			</div>

			<div>
				<a href="pages.php"><img src="img/pages.png"/><br/>Pages</a>
			</div>

		</div><!--manage-->
	</div><!--welcome-->
<?php
include("partials/footer.php");
?>