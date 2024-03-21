<?php
include 'phpnaz/databasenaz.php';
$conn = new mysqli($serwer, $username, $password, $database);
$query = "select * from orders";
$rs = $conn->query($query);
$conn->close();
$num = $rs->num_rows;
?>