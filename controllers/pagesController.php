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
			$arrData["mainNav"] = MainNav::makeMainNav();
			$arrData["cats"] = Product::getCats();
			
			$content = $this->showView("shop", $arrData);
			include("templates/pages.php");
		}

		public function category() {
			$this->loadView("category", "pages");
		}

		public function product() {
			$arrData["mainNav"] = MainNav::makeMainNav();
			$arrData["product"] = Product::getProduct();
			
			$content = $this->showView("productDetails", $arrData);
			include("templates/pages.php");
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