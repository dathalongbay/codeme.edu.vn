<?php
class articleController {

    /**
     *
     * articleController constructor.
     */
    public function __construct()
    {

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
     * Liệt kê tất cả các bài viết
     */
    public function indexAction(){
        echo '<br>' . __METHOD__;
        $data = array();
        $this->view('article', 'index', $data);
    }

    /**
     * Xem chi tiết 1 bài viết
     */
    public function viewAction(){
        echo '<br>' . __METHOD__;
    }

    /**
     * Thêm bài viết
     */
    public function submitAction(){
        echo '<br>' . __METHOD__;
    }

    /**
     * Sửa bài viết
     */
    public function editAction() {
        echo '<br>' . __METHOD__;
    }

    /**
     * Lưu dữ liệu vào trong database
     */
    public function storeAction() {
        echo '<br>' . __METHOD__;
    }

    /**
     * Xóa bài viết
     */
    public function deleteAction() {
        echo '<br>' . __METHOD__;
    }


}