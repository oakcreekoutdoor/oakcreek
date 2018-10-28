<nav class="cf">
	<ul>
	<?php
		
		foreach ($data as $nav) {
	?>
		<li><a href="index.php?controller=Pages&action=home"><?=$nav["strName"]?></a></li>
	<?php
		}
	?>
	</ul>
</nav><!-- //nav -->