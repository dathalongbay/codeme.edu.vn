<?php
$hocsinh = array();
$hocsinh[] = array('id' => 1, 'name' => 'A', 'toan' => rand(0,10), 'van' => rand(0,10), 'anh' => rand(0,10));
$hocsinh[] = array('id' => 2, 'name' => 'B', 'toan' => rand(0,10), 'van' => rand(0,10), 'anh' => rand(0,10));
$hocsinh[] = array('id' => 3, 'name' => 'C', 'toan' => rand(0,10), 'van' => rand(0,10), 'anh' => rand(0,10));
$hocsinh[] = array('id' => 4, 'name' => 'D', 'toan' => rand(0,10), 'van' => rand(0,10), 'anh' => rand(0,10));
$hocsinh[] = array('id' => 5, 'name' => 'E', 'toan' => rand(0,10), 'van' => rand(0,10), 'anh' => rand(0,10));

echo '<br>' . 'Lần 1 bên ngoài hàm :';
echo '<pre>';
print_r($hocsinh);
echo '</pre>';
/**
 * Viêt hàm thi đại học nếu tham số truyền vào là 1 mảng
 * thì return true;
 * Nếu hàm truyền vào là 1 số thì return false;
 * Sau khi gọi hàm xong tính toán điểm tổng của 3 môn
 * và kết quả trượt hay đỗ
 * > hay = 15 thì đỗ
 * < 15 thi trượt
 * cần kiểm tra không có điểm liệt = 0
 */

function thidaihoc(&$param) {
    if (is_array($param) && !empty($param)) {
        foreach($param as $key => $value) {
            $param[$key]['ketqua'] = 'trượt đại học';
            $param[$key]['total'] = $value['toan'] + $value['van'] + $value['anh'];
            if ( ($value['toan'] > 0) && ($value['van'] > 0) && ($value['anh'] > 0) ) {
                if ($param[$key]['total'] >= 15) {
                    $param[$key]['ketqua'] = 'đỗ đại học';
                }
            }
        }
        return true;
    }
    return false;
}

echo '<br> Cố tình truyền sai đê trả về false';
$a = 3;
$result = thidaihoc($a);
echo '<br> $result :';
    var_dump($result);
echo '<br> biến a';
echo '<pre>';
print_r($a);
echo '</pre>';
echo '<br> Truyền đúng trả về true';
$result = thidaihoc($hocsinh);
echo '<br> $result :';
    var_dump($result);
echo '<br>';
echo '<pre>';
print_r($hocsinh);
echo '</pre>';