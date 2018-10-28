<?php

include("functions/db.php");

$sql = "DELETE FROM admin WHERE id='".$_GET["id"]."'";
runDeleteSQL($sql);

header("location: users.php");

?>