<?php
	class AccountController extends MainController {
		public function login() {
			$this->loadView("login", "account");
		}

		public function profile() {
			$this->loadView("profile", "account");
		}

		public function orderHistory() {
			$this->loadView("orderHistory", "account");
		}
	}
?>