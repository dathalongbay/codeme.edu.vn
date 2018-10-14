<?php
$a = 5;
$b = 7;
// $a tham chiếu đến $b đó là lý do biến $a = 7
$a =& $b;
// In ra $a và $b trước khi thay đổi giá trị của 1 trong 2 biến
echo '<br>$a: ' . $a;
echo '<br>$b: ' . $b;
// Thay đổi giá trị của biến $b
$a = 1;
echo '<br>$a: ' . $a;
echo '<br>$b: ' . $b;