<?php 
include ("../libs/connect.php"); 

$sql = "SELECT * FROM users WHERE strEmailAddress='".$_POST["email"]."' AND strPassword ='".$_POST["password"]."'";
$idUser = Connect::runSql("singleData", $sql);

if($idUser)
{
	session_start();
	$_SESSION["userID"] = array(
        'id' => $idUser['id'],
        'email' => $idUser['strEmailAddress'],
        'fullName' => $idUser['strFullName'],
        'phone' => $idUser['nPhone'],
        'altPhone' => $idUser['nAltPhone'],
        'shipAddress' => $idUser['strShippingAddress'],
        'shipZip' => $idUser['strShippingZipCode'],
        'shipCountry' => $idUser['strShippingCountry'],
        'shipState' => $idUser['strShippingState'],
        'shipCity' => $idUser['strShippingCity'],
        'billAddress' => $idUser['strBillingAddress'],
        'billZip' => $idUser['strBillingZipCode'],
        'billCountry' => $idUser['strBillingCountry'],
        'billState' => $idUser['strBillingState'],
        'billCity' => $idUser['strBillingCity']
    );
    echo ($idUser['id']);
} else {
    return false;
}

?>