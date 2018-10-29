<?php

include("functions/db.php");

$sql = "DELETE FROM categories WHERE id='".$_GET["id"]."'";
runDeleteSQL($sql);

header("location: categories.php");

?>