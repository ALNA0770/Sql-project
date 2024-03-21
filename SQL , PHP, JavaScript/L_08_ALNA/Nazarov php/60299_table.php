<?php
$i=0;
while ($i < $num) {
$rs->data_seek($i);
$row = $rs->fetch_assoc();
echo "<tr>";
echo "<td>".$row["book_id"]."</td>";
echo "<td>".$row["title"]."</td>";
echo "<td>".$row["author"]."</td>";
echo "<td>".$row["price"]."</td>";
echo "<tr>";
$i++;}

?>