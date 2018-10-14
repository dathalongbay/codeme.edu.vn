<?php
$a = 5;
$b = 7;
$a =& $b;
echo '<br> Trước khi thay đổi';
echo '<br> $a :' . $a;
echo '<br> $b :' . $b;
$a = 1;
echo '<br> Sau khi thay đổi';
echo '<br> $a :' . $a;
echo '<br> $b :' . $b;
$b = 9;
echo '<br> Sau khi thay đổi lần 2';
echo '<br> $a :' . $a;
echo '<br> $b :' . $b;
