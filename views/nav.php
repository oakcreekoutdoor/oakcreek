
<nav class="cf">
	<ul>
	<?php
		foreach ($arrData["mainNav"] as $nav) {
	?>
		<li><a href="index.php?controller=Pages&action=<?=$nav["strName"]?>"><?=$nav["strName"]?></a></li>
	<?php
		}
	?>
	</ul>
</nav><!-- //nav -->