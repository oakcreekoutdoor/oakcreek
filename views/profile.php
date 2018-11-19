<section id="profile" class="container cf">
	<div id="heroProfile">
		<img src="assets/hero.jpeg" alt="hero" />
	</div><!-- //heroProfile -->
	
	<div id="userName">
		<h2>Hello, <?=$arrData["user"]['strFullName']?></h2>
		<a href="#">Logout</a>
	</div><!-- //userName -->

	<div id="accNav">
		<a id="accProfileNav" class="actAccNav" href="#">Account</a>
		<a id="accOrderNav" href="#">Order History</a>
	</div><!-- //accNav -->

	<div id="account">
		<div class="userInfo">
			<div class="labelEdit cf">
				<h3>Personal Details</h3>
				<a class="btn sec" href="#">Edit</a>
			</div><!-- //labelEdit -->
			<div class="contEdit">
				<p><?=$arrData["user"]['strFullName']?></p>
				<p><?=$arrData["user"]['strEmailAddress']?></p>
				<p><?=$arrData["user"]['nPhone']?></p>
                <p><?=$arrData["user"]['nAltPhone']?></p>
			</div><!-- //contEdit -->
		</div><!-- //userInfo -->

		<div class="shipInfo">
			<div class="labelEdit cf">
				<h3>Addresses</h3>
				<a class="btn sec" href="#">Edit</a>
			</div><!-- //labelEdit -->
			<div class="contEdit">
				<h4>Shipping</h4>
				<p><?=$arrData["user"]['strShippingAddress']?></p>
				<p><?=$arrData["user"]['strShippingCity']?></p>
                <p><?=$arrData["user"]['strShippingState']?>, <?=$arrData["user"]['strShippingCountry']?></p>
				<p><?=$arrData["user"]['strShippingZipCode']?></p>
			</div><!-- //contEdit -->
			<div class="contEdit">
				<h4>Billing</h4>
				<p><?=$arrData["user"]['strBillingAddress']?></p>
				<p><?=$arrData["user"]['strBillingCity']?></p>
                <p><?=$arrData["user"]['strBillingState']?>, <?=$arrData["user"]['strBillingCountry']?></p>
				<p><?=$arrData["user"]['strBillingZipCode']?></p>
			</div><!-- //contEdit -->
		</div><!-- //shipInfo -->
	</div><!-- //account -->

	<div id="orderHistory">
		<div class="labelList cf">
			<div class="listCol"><h4>Order</h4></div>
			<div class="listCol"><h4>Date</h4></div>
			<div class="listCol"><h4>Status</h4></div>
			<div class="listCol"><h4>Total</h4></div>
		</div><!-- //labelList -->
        
        <?php
        foreach($arrData["orders"] as $order) {
        ?>
		<div class="orderList cf">
			<div class="listCol"><p>#<?=$order['id']?></p></div>
			<div class="listCol"><p><?=$order['dateOrder']?></p></div>
			<div class="listCol"><p><?=$order['status']?></p></div>
			<div class="listCol"><p>$ <?=$order['nInvoiceTotal']?></p></div>
			<div class="listCol vOrder"><a class="btn sec" href="index.php?controller=Account&action=orderHistory&userID=<?=$arrData["user"]['id']?>&orderID=<?=$order['id']?>">Details</a></div>
		</div><!-- //orderList -->
        <?php
        }
        ?>
	</div><!-- //orderHistory -->
</section><!-- //profile container -->