<?php

include("functions/db.php");

$sql = "DELETE FROM gallery WHERE id='".$_GET["id"]."'";
runDeleteSQL($sql);

header("location: gallery.php");

?>