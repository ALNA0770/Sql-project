<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'phpnaz/headnaz.php'; ?>
<?php include 'phpnaz/databasenaz.php'; ?>
<?php include 'phpnaz/resultProductsSet.php'; ?>
</head>
<body>
<?php include 'phpnaz/headernaz.php'; ?>
<?php include 'phpnaz/article.php'; ?>
<form action="see_orders.php" method="POST">
<table>
<tr>
<th>Client Name</th>
<th>Client adress</th>
<th>Article</th>
<th>quantity</th>
</tr>
<tr>
<td><input type="text" name="client_name"></td>
<td><input type="text" name="client_adress"></td>
<td><select name="product_name"><?php include 'phpnaz/selectProducts.php';?></select></td>
<td><input type="number" name="quantity"></td>
</tr>
<tr><td></td><td></td><td><input type="submit" value="Make order"></td><td></td></tr>
</table>
</form>
<br>
<?php include "phpnaz/nav.php"; ?>
<?php include "phpnaz/footer.php"; ?>
</body>
</html>