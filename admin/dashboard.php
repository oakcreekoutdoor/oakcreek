<?php
include("check_user.php");
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
				<a href="orders.php"><img src="img/orders.png"/><br/>Orders</a>
			</div>

			<div>
				<a href="inventory.php"><img src="img/inventory.png"/><br/>Inventory</a>
			</div>

			<div>
				<a href="categories.php"><img src="img/pages.png"/><br/>Categories</a>
			</div>

		</div><!--manage-->
	</div><!--welcome-->
<?php
include("partials/footer.php");
?>