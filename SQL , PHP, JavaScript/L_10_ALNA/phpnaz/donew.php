<?php
if ($enter) {
$conn = new mysqli($serwer, $username, $password, $database);
$query = "INSERT INTO orders(client_name,client_adress,product_name,quantity)";
$query .=
"VALUES('".$client_name."','".$client_adress."','".$product_name."','".$quantity."')";
$conn->query($query);
$conn->close();
}
?>