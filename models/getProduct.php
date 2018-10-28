<?php
	class Product
	{
	    static function getCats()
	    {
	        $sql = "SELECT *
	        		FROM categories";
			       return DBFactory::newData()->runSql("getData", $sql);
		 }

	    static function getProductCats()
	    {
	        $sql = "SELECT
					    product_cats.*,
					    products.strName AS strProdName,
					    products.nPrice,
					    products.strFeatPhoto,
					    categories.strName AS strCatName,
					    categories.strHeroImage AS strHeroImg,
					    categories.strDesc
					FROM
					    product_cats
					LEFT JOIN products ON products.id = product_cats.nProductsID
					LEFT JOIN categories ON categories.id = product_cats.nCategoriesID
					LEFT JOIN product_photos ON product_photos.strPhoto = product_cats.nProductsID
					WHERE
					    product_cats.nCategoriesID =".$_GET["cID"];
			       return DBFactory::newData()->runSql("getData", $sql);
		 }

		static function getProduct()
	    {
			$sql = "SELECT
					    products.*,
					    (SELECT GROUP_CONCAT(' ', product_photos.strPhoto) FROM product_photos INNER JOIN products ON products.id = product_photos.nProductsID WHERE products.id =".$_GET["pID"].") AS strPhotos
					FROM
					    products
					WHERE
					    products.id =".$_GET["pID"];
			return DBFactory::newData()->runSql("getData", $sql);
	    }

	    static function featureProducts()
	    {
	        $sql = "SELECT *
					FROM
					    products
					LEFT JOIN product_photos ON product_photos.nProductsID = products.id
					ORDER BY products.id DESC
					LIMIT 3";
			return DBFactory::newData()->runSql("getData", $sql);
		 }
	 }
?>