<?php
session_start();

$qtd = $_POST['quantity'];

$_SESSION['qtd'] = $qtd;

return $qtd;
?>