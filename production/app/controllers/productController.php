<?php
class productController {

    /**
     *
     * articleController constructor.
     */
    public function __construct()
    {

    }

    /**
     * Liệt kê tất cả các sản phẩm
     */
    public function indexAction(){

    }

    public function view($view = '', $action = '', $data = '') {
        ob_start();

        extract($data);

        $view_path = VIEW_PATH . '/' . $view . '/' . $action . '.php';
        require $view_path;

        $output = ob_get_contents();

        ob_end_clean();

        echo $output;
    }

    /**
     * Xem chi tiết 1 sản phẩm
     */
    public function viewAction(){

    }

    /**
     * Thêm sản phẩm
     */
    public function submitAction(){

    }

    /**
     * Sửa sản phẩm
     */
    public function editAction() {

    }

    /**
     * Lưu dữ liệu vào trong database
     */
    public function storeAction() {

    }

    /**
     * Xóa sản phẩm
     */
    public function deleteAction() {

    }

}