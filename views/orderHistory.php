<section id="orderDetails" class="container cf">
	<div id="userName">
		<h2>Order Details</h2>
		<p href="#"><?=$arrData["order"]['strMessage']?></p>
	</div><!-- //userName -->

	<div id="orderStatus">
		<h3>Your order was sent</h3>
		<div class="stOrderLabel cf">
			<div class="oCol"><h4>Order Number</h4></div>
			<div class="oCol"><h4>Order Date</h4></div>
			<div class="oCol"><h4>Shipped Date</h4></div>
		</div><!-- //labelList -->

		<div class="stOrderList cf">
			<div class="oCol"><p>#<?=$arrData["order"]['id']?></p></div>
			<div class="oCol"><p><?=$arrData["order"]['dateOrder']?></p></div>
        <?php
        if($arrData["order"]['dateShip'] != '0000-00-00') {   
        ?>
			<div class="oCol"><p><?=$arrData["order"]['dateShip']?></p></div>
        <?php
        }
        ?>
		</div><!-- //orderList -->
	</div><!-- //orderStatus -->

	<div id="orderTrack">
		<div class="stOrderLabel cf">
        <?php
        if($arrData["order"]['strTrackingNb']) {   
        ?>
            <div class="oCol"><h4>Tracking</h4></div>
        <?php
        }
        ?>
			<div class="oText oCol"><h4>Comment</h4></div>
		</div><!-- //labelList -->

		<div class="stOrderList cf">
        <?php
        if($arrData["order"]['strTrackingNb']) {   
        ?>
            <div class="oCol"><p><?=$arrData["order"]['strTrackingNb']?></p></div>
        <?php
        }
        ?>
			<div class="oText oCol"><p><?=$arrData["order"]['strComment']?></p></div>
		</div><!-- //orderList -->
	</div><!-- //orderTrack -->

	<div id="orderItems">
		<h3>Order items</h3>
		<div class="itemLabel cf">
			<div class="listCol itemMd"><h4>Product</h4></div>
			<div class="listCol itemBg"><h4>Product Name</h4></div>
			<div class="listCol itemSm"><h4>Qtd</h4></div>
			<div class="listCol itemSm"><h4>Price</h4></div>
		</div><!-- //itemLabel -->
<?php
if($arrData["items"]) {
    foreach($arrData["items"] as $item) {    
    ?>

		<div class="itemList cf">
			<div class="listCol itemMd"><img src="assets/<?=$item['strFeatPhoto']?>" alt="Product"></div>
			<div class="listCol itemBg"><p><?=$item['strProductName']?></p></div>
			<div class="listCol itemSm"><p><?=$item['nQuantity']?></p></div>
			<div class="listCol itemSm"><p>$ <?=$item['nPrice']?></p></div>
		</div><!-- //itemList -->
    <?php
    }
} else {
    echo "Sorry, we couldn't find any item. Please, contact our support.";
}
?>
	</div><!-- //orderItems -->
</section><!-- //profile container -->