<?php
	class MainController {

		public function showView($view, $arrData)
		{
			ob_start();
			include_once('views/'.$view.".php");
			$content = ob_get_contents();
			ob_clean();

			return $content;
		}

		public function showNav() {
			$arrMainNav = MainNav::makeMainNav();
			$content = $this->loadView($file, $template, $arrMainNav);
		}

		public function loadView($file, $template, $data="") {
			$content = $this->showView($file, $data);
			include("templates/".$template.".php");
		}
	}
?>