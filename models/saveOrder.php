<?php
include("../libs/connect.php");
session_start();

$sql = "INSERT INTO orders (
            nUsersID,
            dateOrder,
            nInvoiceTotal,
            nTax,
            nOrder_StatusID,
            strEmailAddress,
            nPhone,
            strShippingAddress,
            strShippingZipCode,
            strShippingCountry,
            strShippingState,
            strShippingCity,
            strBillingAddress,
            strBillingZipCode,
            strBillingCountry,
            strBillingState,
            strBillingCity
        )
        VALUES (
            '".$_SESSION['userID']['id']."',
            '".date("Y-m-d")."',
            '".$_SESSION['nInvoice']."',
            '".$_SESSION['nTax']."',
            '1',
            '".$_SESSION['userID']['email']."',
            '".$_SESSION['userID']['phone']."',
            '".$_SESSION['userID']['shipAddress']."',
            '".$_SESSION['userID']['shipZip']."',
            '".$_SESSION['userID']['shipCountry']."',
            '".$_SESSION['userID']['shipState']."',
            '".$_SESSION['userID']['shipCity']."',
            '".$_SESSION['userID']['billAddress']."',
            '".$_SESSION['userID']['billZip']."',
            '".$_SESSION['userID']['billCountry']."',
            '".$_SESSION['userID']['billState']."',
            '".$_SESSION['userID']['billCity']."'
        )";
$orderID = Connect::runSql("saveData", $sql);

foreach($_SESSION['arrCart'] as $item) {
    $sql = "INSERT INTO order_items (
            nProductsID,
            nPrice,
            nQuantity,
            strProductName,
            nOrdersID,
            strFeatPhoto
        )
        VALUES (
            '".$item['pID']."',
            '".$item['nPrice']."',
            '1',
            '".$item['strName']."',
            '".$orderID."',
            '".$item['strImage']."'
        )";
    Connect::runSql("saveData", $sql);
}

$_SESSION['orderID'] = $orderID;

header("location: ../index.php?controller=Cart&action=orderplaced");
?>