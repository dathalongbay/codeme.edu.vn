<?php
require "vendor/autoload.php";

class ConNguoi {

    // thuộc tính
    public $ten;

    // thuộc tính
    public $tuoi;

    // thuộc tính
    public $diachi;

    /**
     * Phương thức khai sinh
     */
    public function khaisinh() {

    }


    public function laythongtin() {
        $result = '<br> ten : ' .$this->ten;
        $result .= '<br> tuoi : ' .$this->tuoi;
        $result .= '<br> địa chỉ : ' .$this->diachi;
        return $result;
    }

    public function datthongtin($ten, $tuoi, $diachi) {
        $this->ten = $ten;
        $this->tuoi = $tuoi;
        $this->diachi = $diachi;
    }

}

$tuan_anh = new ConNguoi();

echo "<pre>";
print_r($tuan_anh);
echo "</pre>";

$tuan_anh->datthongtin('nguyen tuan anh', 20, 'ha noi');

echo "<pre>";
print_r($tuan_anh);
echo "</pre>";

$ngoc_anh = new ConNguoi();

$ngoc_anh->datthongtin('nguyen ngoc anh', 31, 'tp ho chi minh');

echo "<pre>";
print_r($ngoc_anh);
echo "</pre>";

$nguyen_trung = new ConNguoi();

$nguyen_trung->datthongtin('nguyen ngoc trung', 11, 'tp da nang');

echo "<pre>";
print_r($nguyen_trung);
echo "</pre>";







