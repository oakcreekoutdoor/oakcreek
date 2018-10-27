<?php
	class MainController {
		public function showView($view, $arrData="")
		{
			ob_start();
			include_once('views/'.$view.".php");
			$content = ob_get_contents();
			ob_clean();

			return $content;
		}

		public function loadView($file, $template) {
			$content = $this->showView($file);
			include("templates/".$template.".php");
		}
	}
?>