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
				$sql = "SELECT * FROM product_photos 
				LEFT JOIN products ON product_photos.nProductsID = products.id";
				return DBFactory::newData()->runSql("getData", $sql)
		     }
	 }
?>