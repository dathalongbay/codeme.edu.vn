<?php
/**
 * Created by PhpStorm.
 * User: datdo
 * Date: 10/13/2018
 * Time: 2:20 PM
 */
echo __FILE__;


function thamtri($items) {
    foreach($items as $key => $item) {
        $items[$key]['count'] = 100;
    }
}

function thamchieu(&$items) {
    foreach($items as $key => $item) {
        $items[$key]['count'] = 100;
    }
}

$items = array();
$items[] = array('id' => 1, 'name' => 'PHP');
$items[] = array('id' => 2, 'name' => 'JS');
$items[] = array('id' => 3, 'name' => 'NodeJS');

echo '<pre>';
print_r($items);
echo '</pre>';
thamtri($items);

echo '<pre>';
print_r($items);
echo '</pre>';

thamchieu($items);

echo '<pre>';
print_r($items);
echo '</pre>';
