<?php
	class PagesController extends MainController {
		public function home() {
			$arrData["mainNav"] = MainNav::makeMainNav();
			$arrData["prods"] = Product::featureProducts();
			
			$content = $this->showView("heroImg");
			$content .= $this->showView("product_section", $arrData);
			include("templates/pages.php");
		}

		public function shop() {
			$arrData["mainNav"] = MainNav::makeMainNav();
			$arrData["cats"] = Product::getCats();
			
			$content = $this->showView("shop", $arrData);
			include("templates/pages.php");
		}

		public function category() {
			$arrData["mainNav"] = MainNav::makeMainNav();
			$arrData["prods"] = Product::getProductCats();
			
			$content = $this->showView("category", $arrData);
			include("templates/pages.php");
		}

		public function product() {
			$arrData["mainNav"] = MainNav::makeMainNav();
			$arrData["product"] = Product::getProduct();
			
			$content = $this->showView("productDetails", $arrData);
			include("templates/pages.php");
		}

		public function about() {
			$this->loadView("about", "pages");
		}

		public function testimonials() {
			$this->loadView("testimonial", "pages");
		}

		public function contact() {
			$this->loadView("contact", "pages");
		}
         
        public function submitthanks(){
        	$this->loadView("submitthanks, pages");

        }
    
		public function addItem() {
			$oCart = new Cart();
			$oCart->addToCart($_GET['pID']);

			header("location: index.php?controller=Cart&action=cart");
		}
	}
?>