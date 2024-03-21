<?php
 $a = rand(0,10);
 $b = rand(0,10);
 $c = rand(0,10);
 if ($a>$b) {
    echo "a=$a is greater then b=$b <br>" ;
 }
    if ($b>$c) {
    echo "moreover b=$b is greater then c=$c <br> ";
}
elseif ($b>$c) {
    echo "b=$b is greater then c=$c  or a=$a is greater then c=$c";
}
else {
    echo " c=$c is greater then a=$a";
}
    ?>