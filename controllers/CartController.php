<?php
	class CartController extends MainController {
		public function cart() {
			$this->loadView("cart", "cart");
		}

		public function shipping() {
			$this->loadView("shipping", "cart");
		}

		public function billing() {
			$this->loadView("billing", "cart");
		}

		public function payment() {
			$this->loadView("payment", "cart");
		}

		public function orderplaced() {
			$this->loadView("orderplaced", "cart");
		}
	}
?>