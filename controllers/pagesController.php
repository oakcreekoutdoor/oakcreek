<?php
	class PagesController extends MainController {
		public function Home() {
			$arrData["mainNav"] = MainNav::makeMainNav();
			$content = $this->showView("heroImg");

			$arrProd = Product::featureProducts();
			$content .= $this->showView("product_section", $arrProd);
			include("templates/pages.php");
		}

		public function Shop() {
			$this->loadView("shop", "pages");
		}

		public function category() {
			$this->loadView("category", "pages");
		}

		public function product() {
			$this->loadView("productDetails", "pages");
		}

		public function About() {
			$this->loadView("about", "pages");
		}

		public function Testimonials() {
			$this->loadView("testimonial", "pages");
		}

		public function Contact() {
			$this->loadView("contact", "pages");
		}
	}
?>