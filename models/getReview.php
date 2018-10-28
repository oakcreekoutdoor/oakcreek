<?php
	class Review
	{
		static function getReview()
        {
        	$sql = "SELECT * FROM reviews";
        	return DBFactory::newData()->runSql("getData", $sql);
        }
	}
?>