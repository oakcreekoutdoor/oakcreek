<?php
include("libs/connect.php");
include("libs/DBFactory.php");
include("libs/Cart.php");
include("models/getMainNav.php");
include("models/getProduct.php");
include("models/getOrders.php");
include("models/accessAcc.php");
include("models/getPages.php");
include("controllers/MainController.php");
include("controllers/PagesController.php");
include("controllers/AccountController.php");
include("controllers/CartController.php");

session_start();

$controller = (isset($_GET["controller"]))?$_GET["controller"]:"pages";
$action = (isset($_GET["action"]))	?$_GET["action"]:"home";

$cName = ucfirst($controller)."Controller";
$oController = new $cName();
$oController->$action();
?>