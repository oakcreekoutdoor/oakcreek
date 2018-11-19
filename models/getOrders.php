<?php
    class Orders
     {
        static function getUserOrders($oID, $userID)
     	{
            $sql = "SELECT orders.*, order_status.strName AS 'status', order_status.strStatusMessage AS 'strMessage' FROM orders LEFT JOIN order_status ON orders.nOrder_StatusID = order_status.id WHERE orders.id = ".$oID." AND orders.nUsersID = ".$userID;
            $arrDetails['order'] = DBFactory::newData()->runSql("getData",$sql);
            
            $sql = "SELECT order_items.* FROM order_items WHERE order_items.nOrdersID = ".$oID;
            $arrDetails['items'] = DBFactory::newData()->runSql("getData",$sql);
            
            return $arrDetails;
        }
     }
?>