<?php
	class PagesController extends MainController {
		public function home() {
			$content = $this->showView("heroImg");
			$content .= $this->showView("product_section");
			include("templates/pages.php");
		}

		public function shop() {
			$this->loadView("shop", "pages");
		}

		public function category() {
			$this->loadView("category", "pages");
		}

		public function product() {
			$this->loadView("product", "pages");
		}

		public function about() {
			$this->loadView("about", "pages");
		}

		public function testimonial() {
			$this->loadView("testimonial", "pages");
		}

		public function contact() {
			$this->loadView("contact", "pages");
		}
	}
?>