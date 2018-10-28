<?php

include("functions/db.php");

$sql = "DELETE FROM wedding_menu WHERE id='".$_GET["id"]."'";
runDeleteSQL($sql);

header("location: menu.php");

?>