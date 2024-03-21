<?php
$i=0;
while ($i< $num) {
$rs->data_seek($i);
$row = $rs->fetch_assoc();
echo "<option value=".$row["product_name"].">".$row["product_name"]." ".$row["spec"]."</option>";
$i++;
}
?>