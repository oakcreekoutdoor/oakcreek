<?php
	class MainController {
		public function showView($view)
		{
			ob_start();
			include_once('views/'.$view);
			$tempHTML = ob_get_contents();
			ob_clean();

			return $tempHTML;
		}
	}
?>