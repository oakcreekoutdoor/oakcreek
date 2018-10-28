<?php
	class Login
	{
		static function getLogin()
        {
        	$sql = "SELECT * FROM `users_addresses`LEFT JOIN users ON users_addresses.nUsersID = users.id";
        	return DBFactory::newData()->runSql("getData", $sql);
        }
	}
?>