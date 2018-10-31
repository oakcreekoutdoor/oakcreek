<?php
include_once("functions/db.php");

$sort = (isset($_GET["strSortBy"]))?" ORDER BY ".$_GET["strSortBy"] : " ORDER BY id";

if (isset($_GET["strKeyword"]))
{
	$sql = "SELECT 
		orders.id, 
		users.strFullName,
		users.strEmailAddress,
		order_status.strName AS strOrderStatus
	
	FROM 
		orders 
	LEFT JOIN users ON orders.nUsersID = users.id
	LEFT JOIN order_status ON orders.nOrder_StatusID = order_status.id
	WHERE orders.id LIKE '%".$_GET['strKeyword']."%' 
	OR users.strEmailAddress LIKE '%".$_GET['strKeyword']."%'
	OR users.strFullName LIKE '%".$_GET['strKeyword']."%' $sort

	";

} else {
	$sql = "SELECT 
		orders.id, 
		users.strFullName,
		users.strEmailAddress,
		order_status.strName AS strOrderStatus
	
	FROM 
		orders 

	LEFT JOIN users ON orders.nUsersID = users.id
	LEFT JOIN order_status ON orders.nOrder_StatusID = order_status.id $sort
	 ";
}

$arrResults = runSelectSQL($sql);

if ($arrResults){
	
	foreach($arrResults as $order)
	{
	?>
		<tr>
			<td>
				<a class="viewBtn" href="order_details.php?id=<?=$order['id']?>">View</a>
			</td>
			<td><?=$order['id']?></td>
			<td><?=$order['strOrderStatus']?></td>
			<td><?=$order['strFullName']?></td>
			<td><?=$order['strEmailAddress']?></td>
			<td><a class="deleteBtn" href="delete_order.php?id=<?=$order['id']?>"><span class="far fa-trash-alt"></span></a></td>
		</tr>
	<?php
	}
}

?>
