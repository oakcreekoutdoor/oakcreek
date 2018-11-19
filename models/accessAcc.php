<?php
	class Login
	{
		static function getLogin()
        {
        	$sql = "SELECT * FROM `users_addresses`LEFT JOIN users ON users_addresses.nUsersID = users.id";
        	return DBFactory::newData()->runSql("getData", $sql);
        }
        
        static function getorders($id)
        {
            $sql = "SELECT users.* FROM users WHERE users.id =".$id;
            $arrProfile['user'] = DBFactory::newData()->runSql("getData", $sql);
            
            $sql = "SELECT orders.*, order_status.strName as 'status' FROM orders LEFT JOIN order_status ON orders.nOrder_StatusID = order_status.id WHERE orders.nUsersID =".$id;
            $arrProfile['orders'] = DBFactory::newData()->runSql("getData", $sql);
            
            return $arrProfile;
        }
	}
?>