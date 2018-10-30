<?php
include("functions/dbqueries.php");

$arrResults = runSelectSQL("SELECT 
		orders.id, 
		users.strFullName,
		users.strEmailAddress,
		order_status.strName AS strOrderStatus
	
	FROM 
		orders 

	LEFT JOIN users ON orders.nUsersID = users.id
	LEFT JOIN order_status ON orders.nOrder_StatusID = order_status.id
	WHERE id OR users.strEmailAddress LIKE '%".$_POST['strKeyword']."%' ");
print_r($arrResults);
?>