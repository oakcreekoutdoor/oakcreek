<?php
include("check_user.php");
include("functions/db.php");

$sql = "DELETE FROM users WHERE id='".$_GET["id"]."'";
runDeleteSQL($sql);

header("location: users.php");

?>