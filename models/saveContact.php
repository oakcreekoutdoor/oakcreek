<?php 
include ("../libs/connect.php"); 
include ("../libs/DBFactory.php"); 

$error = ($_POST["strFullName"] && $_POST["strEmailAddress"] && $_POST["strComment"])?false:true;

$sql = "INSERT INTO contacts (
		strFullName, 
		strEmailAddress,
		strComment
		) 

	VALUES (
		'".$_POST["strFullName"]."', 
		'".$_POST["strEmailAddress"]."',
		'".$_POST["strComment"]."'
		
	)";


DBFactory::newData()->runSql("saveData", $sql);
header("location: ../index.php?controller=Pages&action=submitthanks");?>