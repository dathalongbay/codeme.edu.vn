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
 * Sau khi gọi hàm xong tính toán điểm trung bình cộng của 3 môn
 * và kết quả trượt hay đỗ
 * > hay = 15 thì đỗ
 * < 15 thi trượt
 * cần kiểm tra không có điểm liệt = 0
 */

$result = thidaihoc(3);
$result = thidaihoc($hocsinh);