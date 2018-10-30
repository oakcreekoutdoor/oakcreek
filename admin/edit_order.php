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
		orders.nInvoiceTotal
	
	FROM 
		orders 

	LEFT JOIN users ON orders.nUsersID = users.id
	LEFT JOIN order_status ON orders.nOrder_StatusID = order_status.id

	WHERE orders.id='".$_GET["id"]."'
");
?>

	<div id="editForm">
		<h1>Edit Order Status</h1>
		<form method="post" enctype="multipart/form-data" action="update_order.php?id=<?=$arrOrders[0]['id']?>">

			<label>Change Status:</label>
			<select name="nOrder_StatusID">
			<?php
			$arrOrderStatus = runSelectSQL("SELECT * FROM order_status");

			foreach($arrOrderStatus as $order)
			{

				echo "<option value='".$order["id"]."'>".$order["strName"]."</option>";
			}
			?>
				
			</select><br/>

		<p>Order Number: <?=$arrOrders[0]['id']?></p>


		<input type="submit" value="Save Changes">
			<a class="cancelBtn" href="inventory.php">Cancel</a>
		</form>
	</div><!--editUser-->

<?php
include("partials/footer.php");
?>