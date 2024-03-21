<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'headPartHtml.php'; ?>
<?php include 'phpnaz/database.php'; ?>
<?php include 'phpnaz/isNewOrder.php'; ?>
<?php include 'phpnaz/doNewOrder.php'; ?>
<?php include 'phpnaz/resultOrderSet.php'; ?>
</head>
<body>
<?php include 'phpnaz/headernaz.php'; ?>
<?php include 'phpnaz/articlenaz.php'; ?>
<h2>These are the orders</h2>
<h3>There are so many orders: <?php echo $num?></h3>
<table>
<tr><th>id</th><th>client</th><th>adress</th><th>product</th><th>quantity</th></tr>
<?php include 'phpnaz/tableOrders.php'; ?>
</table>
<br>
<?php include "phpnaz/nav.php"; ?>
<?php include "phpnaz/footer.php"; ?>
</body>
</html>