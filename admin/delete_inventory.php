<?php
include("check_user.php");
include("functions/db.php");

$sql = "DELETE FROM products WHERE id='".$_GET["id"]."'";
runDeleteSQL($sql);

header("location: inventory.php");

?>