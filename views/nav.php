<div class="nav">
	<label for="toggle">&#9776;</label>
	<input type="checkbox" id="toggle"/>
	<nav class="cf" id="hams">
		<ul>
		<?php
			foreach ($arrData["mainNav"] as $nav) {
		?>
			<li><a href="index.php?controller=Pages&action=<?=$nav["strName"]?>"><?=$nav["strName"]?></a></li>
		<?php
			}
		?>
		</ul>
	</nav>
</div><!-- //nav -->

<div class="promo">
	<p>Free Shipping on All Orders (No Minimum)!</p>
</div><!--//promo-->