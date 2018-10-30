<?php
include("functions/dbqueries.php");

$arrResults = runSelectSQL("SELECT * FROM orders WHERE id LIKE '%".$_POST['strKeyword']."%' ");

if ($arrResults){
	echo "<ul>";
	foreach($arrResults as $order)
	{
		echo "<li>".$order['id']."</li>";
	}
	echo "</ul>";
}
?>