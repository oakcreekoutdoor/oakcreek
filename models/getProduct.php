<?php
	class Product
	{
	    static function getProductCats()
	    {
	        $sql = "SELECT products.*, product_cats.*, categories.* FROM products
			       LEFT JOIN product_cats ON products.id = product_cats.nProductsID 
			       LEFT JOIN categories ON products.nCategoriesID = categories.id";
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