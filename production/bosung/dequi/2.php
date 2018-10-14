<?php
/**
 * Created by PhpStorm.
 * User: datdo
 * Date: 10/13/2018
 * Time: 2:20 PM
 */
echo __FILE__;


function thamtri($a) {
    $a = $a * 5;
}

function thamchieu(&$b) {
    $b = $b * 5;
}

$a = 1;
thamtri($a);
echo '<br> $a' . $a;

$b = 1;
thamchieu($b);
echo '<br> $b' . $b;