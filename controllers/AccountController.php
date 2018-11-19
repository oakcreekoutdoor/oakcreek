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
			$arrData["order"] = Login::getorders($_GET['userID']);
			
			$content = $this->showView("orderHistory", $arrData);
			include("templates/account.php");
		}
	}
?>