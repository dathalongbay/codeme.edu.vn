<?php

$quocgia = array();
$quocgia[] = array('id' => 1, 'name' => 'Việt nam');
$quocgia[] = array('id' => 2, 'name' => 'Trung quốc');
$quocgia[] = array('id' => 3, 'name' => 'Hàn quốc');
$quocgia[] = array('id' => 4, 'name' => 'Hoa Kỳ');
$quocgia[] = array('id' => 5, 'name' => 'Canada');

echo '<pre>';
print_r($quocgia);
echo '</pre>';

function danso($param) {
    if (!empty($param)) {
        foreach ($param as $key => $value) {
            if ($value['name'] == 'Việt nam') {
                $param[$key]['total'] = 90000000;
            }
            if ($value['name'] == 'Trung quốc') {
                $param[$key]['total'] = 1300000000;
            }
            if ($value['name'] == 'Hàn quốc') {
                $param[$key]['total'] = 60000000;
            }
            if ($value['name'] == 'Hoa Kỳ') {
                $param[$key]['total'] = 200000000;
            }
            if ($value['name'] == 'Canada') {
                $param[$key]['total'] = 50000000;
            }
        }
    }
    echo '<br> Trong hàm : ';
    echo '<pre>';
    print_r($param);
    echo '</pre>';
}