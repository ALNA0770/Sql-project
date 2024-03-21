<?php
include 'Nazarov PHP/60299_database.php';
$conn = new mysqli( $server, $username, $password, $database);
$query = "Select * From books";
$rs = $conn -> query($query);
$conn-> close();
$num = $rs -> num_rows;
?>