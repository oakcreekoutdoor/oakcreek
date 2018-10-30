<?php
    class Orders
     {
        static function getOrderItemStatus()
        {
    		$sql = "SELECT orders.*, order_items.*, order_status.* FROM orders 
				  LEFT JOIN order_items ON orders.id = order_items.nOrdersID 
				  LEFT JOIN order_status ON orders.nOrder_StatusID = order_status.id";
				  return DBFactory::newData()->runSql("getData",
				  	$sql);
        }

        static function getUserOrders()
     	{
	       $sql = "SELECT orders.nUsersID,
                        orders.id,
                        users.strEmailAddress
                     FROM orders
	    		     LEFT JOIN users ON orders.nUsersID = users.id
                     WHERE orders.id =".$_SESSION["orderID"];
	    	return DBFactory::newData()->runSql("getData",$sql);
        }

        static function getOrderStatus()
        {
        	 $sql = "SELECT * FROM orders 
        	         LEFT JOIN order_status ON orders.nOrder_StatusID = order_status.id";
        	         return DBFactory::newData()->runSql("getData",$sql);
        }
     }
?>