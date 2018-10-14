<?php

$a = 2;
function thamchieu(&$param) {
    $param = $param * 5;
    echo '<br>biến cục bộ trong hàm $param :' . $param;
}

thamchieu($a);
echo '<br> In biến $a ngoài hàm : ' . $a;