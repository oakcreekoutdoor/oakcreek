<?php
include("check_user.php");
include("functions/db.php");

$imgUpload = uploadFile("strFeatPhoto");

$sql = "INSERT INTO products (
		strName, 
		nPrice,
		strDescription,
		nQuantity,
		strFeatPhoto
		) 

	VALUES (
		'".$_POST["strName"]."', 
		'".$_POST["nPrice"]."', 
		'".$_POST["strDescription"]."',
		'".$_POST["nQuantity"]."',
		'".$_FILES["strFeatPhoto"]["name"]."'
	)";

	runInsertSQL($sql);

	foreach($_POST["category"] as $category){
		$sql = "INSERT INTO product_cats (
			nProductsID, 
			nCategoriesID
		) 

		VALUES (
			(
				SELECT 
					id
				FROM 
					products
				WHERE
					strName='".$_POST["strName"]."'
			),
			'".$category."'
		)";
		runInsertSQL($sql);
	}

	header("location: inventory.php");
?>