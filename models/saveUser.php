<?php 
include ("../libs/connect.php"); 
include ("../libs/DBFactory.php"); 

$test = false;

if(!empty($_POST["newname"]) && !empty($_POST["newpassword"]) && !empty($_POST["newemail"])) {
    $sql = "INSERT INTO users (
            strFullName, 
            strPassword,
            strEmailAddress
            ) 

        VALUES (
            '".$_POST["newname"]."', 
            '".$_POST["newpassword"]."',
            '".$_POST["newemail"]."'

        )";

    $saveUser = DBFactory::newData()->runSql("saveData", $sql);
    $test = true;
}

echo $test;
?>