<?php 
include ("../libs/connect.php"); 

$sql = "SELECT id FROM users WHERE strEmailAddress='".$_POST["email"]."' AND strPassword ='".$_POST["password"]."'";
$idUser = Connect::runSql("singleData", $sql);

if($idUser)
{
	session_start();
	$_SESSION["userID"] = $idUser['id'];
    echo ($idUser['id']);
} else {
    return false;
}

?>