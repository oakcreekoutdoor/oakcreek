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
</nav><!-- //nav -->

<section class="container" id="ham">
        <label class="hamburger" for="toggle">&#9776;</label>
		<input type="checkbox" id="toggle"/>
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
</section>