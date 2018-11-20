<?php
session_start();

$_SESSION["userID"] = array(
    'billAddress' => $_POST['strAddress'];
    'billZip' => $_POST['strZipCode'];
    'billCountry' => $_POST['strCountry'];
    'billState' => $_POST['strState'];
    'billCity' => $_POST['strCity'];
);

return true;
?>