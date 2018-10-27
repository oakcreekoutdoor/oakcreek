<?php
	class AccountController extends MainController {
		public function login() {
			$content = $this->showView("heroImg");
			$content .= $this->showView("product_section");
			include("templates/pages.php");
		}
	}
?>