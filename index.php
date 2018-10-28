<?php
include("libs/connect.php");
include("libs/DBFactory.php");
include("models/getMainNav.php");
include("controllers/MainController.php");
include("controllers/PagesController.php");
include("controllers/AccountController.php");

session_start();

$controller = (isset($_GET["controller"]))?$_GET["controller"]:"pages";
$action = (isset($_GET["action"]))	?$_GET["action"]:"home";

$cName = ucfirst($controller)."Controller";
$oController = new $cName();
$oController->$action();
?>