<?php


$categories = array();
$categories[] = array('id' => 1, 'name' => 'Thiết bị điện tử', 'parent_id' => 0);
$categories[] = array('id' => 2, 'name' => 'Phụ kiện điện tử', 'parent_id' => 0);
$categories[] = array('id' => 3, 'name' => 'TV & Thiết bị gia dụng', 'parent_id' => 0);
$categories[] = array('id' => 4, 'name' => 'Sức khỏe & làm đẹp', 'parent_id' => 0);
$categories[] = array('id' => 5, 'name' => 'Hàng mẹ, bé & Trò chơi', 'parent_id' => 0);
$categories[] = array('id' => 6, 'name' => 'Siêu thị tạp hóa', 'parent_id' => 0);
$categories[] = array('id' => 7, 'name' => 'Hàng gia dụng và đời sống', 'parent_id' => 0);
$categories[] = array('id' => 8, 'name' => 'Thời trang nữ', 'parent_id' => 0);
$categories[] = array('id' => 9, 'name' => 'Thời trang nam', 'parent_id' => 0);
$categories[] = array('id' => 10, 'name' => 'Phụ kiện thời trang', 'parent_id' => 0);
$categories[] = array('id' => 11, 'name' => 'Thể thao & Du lịch', 'parent_id' => 0);
$categories[] = array('id' => 12, 'name' => 'Ô tô xe máy & thiết bị định vị', 'parent_id' => 0);


$categories[] = array('id' => 13, 'name' => 'Điện thoại di động', 'parent_id' => 1);
$categories[] = array('id' => 14, 'name' => 'Máy tính bảng', 'parent_id' => 1);
$categories[] = array('id' => 15, 'name' => 'Laptop', 'parent_id' => 1);
$categories[] = array('id' => 16, 'name' => 'Máy tính để bàn', 'parent_id' => 1);
$categories[] = array('id' => 17, 'name' => 'Âm thanh', 'parent_id' => 1);
$categories[] = array('id' => 18, 'name' => 'Camera', 'parent_id' => 1);
$categories[] = array('id' => 19, 'name' => 'Thiết bị số', 'parent_id' => 1);
$categories[] = array('id' => 20, 'name' => 'Phụ kiện di động', 'parent_id' => 1);
$categories[] = array('id' => 21, 'name' => 'Phụ kiện máy tính', 'parent_id' => 1);
$categories[] = array('id' => 22, 'name' => 'Thiết bị mạng', 'parent_id' => 1);


$categories[] = array('id' => 23, 'name' => 'Xiaomi', 'parent_id' => 13);
$categories[] = array('id' => 24, 'name' => 'Iphone', 'parent_id' => 13);
$categories[] = array('id' => 25, 'name' => 'Samsung', 'parent_id' => 13);
$categories[] = array('id' => 26, 'name' => 'Xiaomi 1', 'parent_id' => 23);
$categories[] = array('id' => 27, 'name' => 'Xiaomi 2', 'parent_id' => 23);
$categories[] = array('id' => 28, 'name' => 'Xiaomi 3', 'parent_id' => 23);

echo '<pre>';
print_r($categories);
echo '</pre>';
foreach ($categories as $category) {
    ?><div><?php echo $category['id'] . ' - ' . $category['name'] . '('.$category['parent_id'].')'?></div> <?php
}

function dequi($source, $parent_id, $level, &$result) {
    if (!empty($source)) {
        foreach($source as $key => $category) {
            if ($category['parent_id'] == $parent_id) {
                $category['level'] = $level;
                $result[] = $category;
                unset($source[$key]);
                dequi($source, $category['id'], $level+1,$result );
            }
        }
    }
}

function dequimenu($source, $parent_id, $level, &$result) {
    if (!empty($source)) {
        $result .= '<ul>';
        foreach($source as $key => $category) {
            if ($category['parent_id'] == $parent_id) {
                $category['level'] = $level;
                $result .= '<li>'.$category['name'].'</li>';
                unset($source[$key]);
                dequimenu($source, $category['id'], $level+1,$result );
            }
        }
        $result .= '</ul>';
    }
}
$result = array();
dequi($categories, 0, 1, $result);
echo '<pre>';
print_r($result);
echo '</pre>';
foreach ($result as $category) {
    ?><div><?php echo str_repeat('-', $category['level']) . $category['name'] . '('.$category['parent_id'].')'?></div> <?php
}

$menu = '';
dequimenu($categories, 0, 1, $menu);
echo $menu;