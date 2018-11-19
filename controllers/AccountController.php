<?php
	class AccountController extends MainController {
		public function login() {
			$this->loadView("login", "account");
		}

		public function profile() {
			$arrData["mainNav"] = MainNav::makeMainNav();
            $profileInfo = Login::getorders($_GET['userID']);
			$arrData["user"] = $profileInfo['user'][0];
            $arrData["orders"] = $profileInfo['orders'];
			
			$content = $this->showView("profile", $arrData);
			include("templates/account.php");
		}

		public function orderHistory() {
			$arrData["mainNav"] = MainNav::makeMainNav();
			$arrDetails = Orders::getUserOrders($_GET['orderID'], $_GET['userID']);
            
            $arrData["order"] = $arrDetails["order"][0];
            $arrData["items"] = $arrDetails["items"];
            
			$content = $this->showView("orderHistory", $arrData);
			include("templates/account.php");
		}
	}
?>