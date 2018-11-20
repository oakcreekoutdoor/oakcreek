<?php
session_start();

$_SESSION["userID"] = array(
    'email' => $_POST['strEmailAddress'];
    'fullName' => $_POST['strFullName'];
    'phone' => $_POST['nPhone'];
    'altPhone' => $_POST['nAltPhone'];
    'shipAddress' => $_POST['strAddress'];
    'shipZip' => $_POST['strZipCode'];
    'shipCountry' => $_POST['strCountry'];
    'shipState' => $_POST['strState'];
    'shipCity' => $_POST['strCity'];
);

return true;
?>