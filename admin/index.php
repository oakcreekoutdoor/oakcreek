<?php
include("partials/header.php");
?>
	<div id="container" class="text-center">
		<?php
			if ($_GET["error"])
			{
				echo "<div class='loginError'>You have entered an invalid username or password.</div>";
			}
		?>
		<div id="loginForm">
			<img src="img/symbol.png"/>
			<h1>Log In</h1>
			<form method="post" action="login.php" onsubmit="return validateForm();">
				<input type="text" name="strUserName" placeholder="Enter username"><br/>

				<input type="password" name="strPassword" placeholder="Enter password"><br/>

				<input type="submit" value="Log In">
			</form>
		</div>
	</div><!--container-->

<?php
include("partials/footer.php");
?>