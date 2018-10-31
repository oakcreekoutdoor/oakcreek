<?php
	class Page
	{
	    static function getPages($pageID)
	    {
	        $sql = "SELECT * FROM pages WHERE id=".$pageID;
			return DBFactory::newData()->runSql("getData", $sql);
		 }
	 }
?>