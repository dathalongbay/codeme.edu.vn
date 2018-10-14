<?php

$a = 2;
function thamtri($param) {
    $param = $param * 5;
    echo '<br>biến cục bộ trong hàm $param :' . $param;
}

thamtri($a);
echo '<br> In biến $a ngoài hàm : ' . $a;