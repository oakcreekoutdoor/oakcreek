<?php
	class PagesController extends MainController {
		public function home() {
			$arrData["mainNav"] = MainNav::makeMainNav();
			$arrData["prods"] = Product::featureProducts();
			
			$content = $this->showView("heroImg");

			$content .= $this->showView("teaser");

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
			$arrData["mainNav"] = MainNav::makeMainNav();
			$arrData["content"] = Page::getPages(4);
			
			$content = $this->showView("about", $arrData);
			include("templates/pages.php");
		}

		public function testimonials() {
			$arrData["mainNav"] = MainNav::makeMainNav();
			$arrData["content"] = Page::getPages(3);
			
			$content = $this->showView("testimonial", $arrData);
			include("templates/pages.php");
		}

		public function contact() {
			$arrData["mainNav"] = MainNav::makeMainNav();
			$arrData["content"] = Page::getPages(5);
			
			$content = $this->showView("contact", $arrData);
			include("templates/pages.php");
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