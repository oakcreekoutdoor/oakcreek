<?php
include_once("functions/db.php");

$arrOrders = runSelectSQL("
	SELECT 
		orders.id, 
		orders.nOrderNumber,
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
		orders.nInvoiceTotal
	
	FROM 
		orders 

	LEFT JOIN users ON orders.nUsersID = users.id
	LEFT JOIN order_status ON orders.nOrder_StatusID = order_status.id
");

?>
	<div class="contentList orderList">
		<div>
			<h3>Order No.</h3>

			<?php
			foreach($arrOrders as $order)
			{
			?>
			<div>
				<p><?=$order['nOrderNumber']?></p>
				<a class="editBtn" href="edit_inventory.php?id=<?=$order['id']?>"><span class="far fa-edit"></span> Change Status</a>
				<a class="deleteBtn" href="delete_inventory.php?id=<?=$order['id']?>"><span class="far fa-trash-alt"></span> Delete Order</a>
			</div>
		<?php
		}
		?></div>

		<div>
			<h3>Customer</h3>

			<?php
			foreach($arrOrders as $order)
			{
			?>
			<div><?=$order['strFullName']?></div>

		<?php
		}
		?></div>

		<div>
			<h3>Date</h3>

			<?php
			foreach($arrOrders as $order)
			{
			?>
			<div><?=$order['nUTC']?></div>

		<?php
		}
		?></div>

		<div>
			<h3>Email Address</h3>

			<?php
			foreach($arrOrders as $order)
			{
			?>
			<div class="order-email">
				<?=$order['strEmailAddress']?>
				<a class="viewBtn" href="order_items.php?id=<?=$order['id']?>">View Order</a>
			</div>

		<?php
		}
		?></div>

	</div><!--contentList-->