<?php
class MainNav {
	static function makeMainNav()
	{
		$sql = "SELECT * from pages WHERE bMainPage=1";
		return DBFactory::newData()->runSql("getData", $sql);
	}
}
?>