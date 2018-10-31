<?php
include("partials/header.php");
include("partials/nav.php");
$arrOrders = runSelectSQL("
	SELECT 
		orders.id, 
		users.strFullName,
		users.strEmailAddress,
		users.nPhone,
		users.nAltPhone,
		users.strShippingAddress,
		users.strShippingZipCode,
		users.strShippingCountry,
		users.strShippingState,
		users.strShippingCity,
		users.strBillingAddress,
		users.strBillingZipCode,
		users.strBillingCountry,
		users.strBillingState,
		users.strBillingCity,
		order_status.strName AS strOrderStatus,
		orders.nUTC,
		orders.nTax,
		orders.nInvoiceTotal
	
	FROM 
		orders 

	LEFT JOIN users ON orders.nUsersID = users.id
	LEFT JOIN order_status ON orders.nOrder_StatusID = order_status.id

	WHERE orders.id='".$_GET["id"]."'
");

$arrItems = runSelectSQL("
	SELECT
		order_items.id,
		order_items.strProductName,
		order_items.nPrice AS strSoldPrice,
		order_items.nQuantity,
		order_items.strFeatPhoto
	FROM
		order_items
	LEFT JOIN products ON order_items.nProductsID = products.id
	LEFT JOIN orders ON order_items.nOrdersID = orders.id

	WHERE nOrdersID='".$_GET["id"]."'
");

?>

	<div id="editForm">
		<h1>Order Details</h1>
		<div class="order-info">
			<p><span>Order Number:</span> <?=$arrOrders[0]['id']?></p>
			<p><span>Date Ordered:</span> <?=$arrOrders[0]['nUTC']?></p>
			<p><span>Status:</span> <?=$arrOrders[0]['strOrderStatus']?></p>
		</div><!--order-info-->

		<div class="status">
			<form method="post" enctype="multipart/form-data" action="update_order.php?id=<?=$arrOrders[0]['id']?>">
				<label>Change Status:</label>
				<select name="nOrder_StatusID">
				<?php
				$arrOrderStatus = runSelectSQL("SELECT * FROM order_status");

				foreach($arrOrderStatus as $status)
				{

				echo "<option value='".$status["id"]."'>".$status["strName"]."</option>";
				}
				?>	
				</select><br/>
				<input type="submit" value="Save">
			</form>
		</div><!--status-->

		<div class="user-info">
			<p><span>Full Name:</span> <?=$arrOrders[0]['strFullName']?></p>
			<p><span>E-mail Address:</span> <?=$arrOrders[0]['strEmailAddress']?></p>
			<p><span>Phone Number:</span> <?=$arrOrders[0]['nPhone']?></p>
			<p><span>Shipping Address:</span> <?=$arrOrders[0]['strShippingAddress']?>, <?=$arrOrders[0]['strShippingCity']?>, <?=$arrOrders[0]['strShippingState']?>, <?=$arrOrders[0]['strShippingCountry']?> <?=$arrOrders[0]['strShippingZipCode']?>
			</p>
			<p><span>Billing Address:</span> <?=$arrOrders[0]['strBillingAddress']?>, <?=$arrOrders[0]['strBillingCity']?>, <?=$arrOrders[0]['strBillingState']?>, <?=$arrOrders[0]['strBillingCountry']?> <?=$arrOrders[0]['strBillingZipCode']?>
			</p>
		</div><!--user-info-->

		<div class="order-items">
			<h2>Items Purchased:</h2>
			<?php
			$arrProducts= runSelectSQL("SELECT * FROM order_items WHERE nOrdersID = '".$_GET["id"]."'");
			foreach($arrProducts as $product) {
			?>
			
			<div class="items">
				<img src="../assets/<?=$product['strFeatPhoto']?>"/>
				<div class="item-info">
					<p><?=$product['strProductName']?></p>
					<p>Qty: <?=$product['nQuantity']?></p>
					<p>$<?=$product['nPrice']?></p>
				</div><!--item-info-->
			</div><!--items-->
			
			<?php 
			}
			?>
		</div><!--order-items-->

		<?php

		$arrSum = [];
		array_push($arrSum, $arrItems[0]['strSoldPrice']);
		$subTotal = array_sum($arrSum);

		?>

		<div class="order-invoice">
			<p class="cart-label">Subtotal</p>
			<p>$ <?=$subTotal?></p>
			<p class="cart-label">Shipping</p>
			<p>FREE</p>
			<p class="cart-label">Tax</p>
			<p>$ <?=$arrOrders[0]['nTax']?></p>
			<div class="cart-total">
				<p>Total</p>
				<p>$ <?=$arrOrders[0]['nInvoiceTotal']?></p>
			</div><!--cart-total-->
		</div>
	</div><!--editForm-->

<?php
include("partials/footer.php");
?>