<?php

class Cart {
	function addToCart($id) {
		$arrProd = Product::getProdAdd($id);
		$arrCart = (is_array($_SESSION["arrCart"]))?$_SESSION["arrCart"]:array();

		array_push($arrCart, array("strName"=>$arrProd["strName"], "nPrice"=>$arrProd["nPrice"], "strImage"=>$arrProd["strFeatPhoto"]));

		$_SESSION["arrCart"] = $arrCart;
	}

	function getCartItems()
	{
		return $_SESSION["arrCart"];
	}
}
?>