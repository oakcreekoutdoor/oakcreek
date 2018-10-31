<?php
include("check_user.php");
include("functions/db.php");

$sql = "DELETE FROM orders WHERE id='".$_GET["id"]."'";
runDeleteSQL($sql);

header("location: orders.php");

?>