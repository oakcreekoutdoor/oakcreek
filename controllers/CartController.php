<?php
	class CartController extends MainController {
		public function cart() {
			$this->loadView("cart", "cart");
		}

		public function shipping() {
			$this->loadView("shipping", "cart");
		}

		public function billing() {
			$arrData["mainNav"] = MainNav::makeMainNav();
			$arrData["arrOrder"] = Orders::getAddress();
			
			$content = $this->showView("billing", $arrData);
			include("templates/cart.php");
		}

		public function payment() {
			$arrData["mainNav"] = MainNav::makeMainNav();
			$arrData["arrOrder"] = Orders::getAddress();
			
			$content = $this->showView("payment", $arrData);
			include("templates/cart.php");
		}

		public function orderplaced() {
			$arrData["mainNav"] = MainNav::makeMainNav();
			$arrData["oUserID"] = Orders::getUserOrders();
			
			$content = $this->showView("orderplaced", $arrData);
			include("templates/cart.php");
		}

		public function delItem() {
			$arrCart = $_SESSION["arrCart"];
			array_splice($_SESSION["arrCart"], $_GET["nItem"], 1);

			header("location: index.php?controller=Cart&action=cart");
		}
	}
?>