<?php
	class AccountController extends MainController {
		public function login() {
			$arrData["mainNav"] = MainNav::makeMainNav();
            
			$content = $this->showView("login", $arrData);
			include("templates/account.php");
		}

		public function profile() {
            include("libs/checkUser.php");
            
			$arrData["mainNav"] = MainNav::makeMainNav();
            $profileInfo = Login::getorders($_GET['userID']);
			$arrData["user"] = $profileInfo['user'][0];
            $arrData["orders"] = $profileInfo['orders'];
			
			$content = $this->showView("profile", $arrData);
			include("templates/account.php");
		}

		public function orderHistory() {
            include("libs/checkUser.php");
            
			$arrData["mainNav"] = MainNav::makeMainNav();
			$arrDetails = Orders::getUserOrders($_GET['orderID'], $_GET['userID']);
            
            $arrData["order"] = $arrDetails["order"][0];
            $arrData["items"] = $arrDetails["items"];
            
			$content = $this->showView("orderHistory", $arrData);
			include("templates/account.php");
		}
	}
?>