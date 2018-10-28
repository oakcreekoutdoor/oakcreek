<div class="product col-3">
	<?php
	    foreach($arrProductGrid as $product)
	  {
	?>
	<img src="assets/<?=$product["strPhoto"]?>" alt="product" />
	<p><?=$product["nPrice"]?></p>
	<a class="btn sec" href="#">View Details</a>
	<?php
     }
    ?>

</div><!-- //product col-3 -->
