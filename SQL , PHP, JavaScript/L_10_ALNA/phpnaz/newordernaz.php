<?php
$enter = TRUE;
if (isset($_POST['client_name'])) {$client_name = $_POST['client_name'];} else {$enter = FALSE;}
if (isset($_POST['client_adress'])) {$client_adress = $_POST['client_adress'];} else {$enter = FALSE;}
if (isset($_POST['quantity'])) {$quantity = $_POST['quantity'];} else {$enter = FALSE;}
if (isset($_POST['product_name'])) {$product_name = $_POST['product_name'];} else {$enter =
FALSE;}
?>