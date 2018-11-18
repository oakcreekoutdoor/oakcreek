<?php
	class Product
	{
	    static function getCats()
	    {
	        $sql = "SELECT * FROM categories";
			return DBFactory::newData()->runSql("getData", $sql);
		 }

		 static function getProdAdd($id)
	    {
	        $sql = "SELECT * FROM products WHERE id=".$id;
			return DBFactory::newData()->runSql("getData", $sql)[0];
		 }


	    static function getProductCats()
	    {
	        $sql = "SELECT
					    product_cats.*,
					    products.strName,
					    products.nPrice,
					    products.nOldPrice,
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
					    *
					FROM
					    products
					WHERE
					    products.id =".$_GET["pID"];
			return DBFactory::newData()->runSql("getData", $sql);
	    }

	    static function featureProducts()
	    {
	        $sql = "SELECT 
	        			products.id as nProductsID,
	        			products.strName,
	        			products.nOldPrice,
	        			products.nPrice,
	        			products.strFeatPhoto
					FROM
					    products
					ORDER BY products.id DESC
					LIMIT 3";
			return DBFactory::newData()->runSql("getData", $sql);
		 }
	 }
?>