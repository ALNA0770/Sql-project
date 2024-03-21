<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'phpnaz/headnaz.php'; ?>
<?php include 'databasenaz.php'; ?>
<?php include 'phpnaz/resultProductsSet.php'; ?>
</head>
<body>
<?php include 'phpnaz/headernaz.php'; ?>
<?php include 'phpnaz/articlenaz.php'; ?>
<h2>These are the products</h2>
<h3>There are so many products: <?php echo $num?></h3>
<table>
<tr><th>id</th><th>product</th><th>specification</th><th>image</th><th>price</th><th>cost</th>
</tr>
<?php include 'phpnaz/tableProducts.php'; ?>
</table>
<br>
<?php include "phpnaz/navnaz.php"; ?>
<?php include "phpnaz/footnaz.php"; ?>
</body>
</html>