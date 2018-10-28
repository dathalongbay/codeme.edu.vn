<?php
class adminController {

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

        $adminModel = new adminModel();
        $admins = $adminModel->getRows();
        $data = array();
        $data['admins'] = $admins;

        return $this->view('admin', 'index', $data);
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
        $data = array();
        return $this->view('admin', 'submit', $data);
    }

    /**
     * Sửa bài viết
     */
    public function editAction() {
        $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
        $data = array();
        $adminModel = new adminModel();
        $data['admin'] = $adminModel->getRow($id);

        return $this->view('admin', 'edit', $data);
    }

    /**
     * Lưu dữ liệu vào trong database
     */
    public function storeAction() {

        $data = $_POST;
        $adminModel = new adminModel();
        $adminModel->store($data);

        $upload = new Upload();
        $upload_result = $upload->upload($_FILES);

        echo '<pre>';

        print_r($upload_result);
        echo '</pre>';
        die;

        header("Location: http://localhost/codeme.edu.vn/production/?controller=admin&action=index");
        die();
    }

    /**
     * Xóa bài viết
     */
    public function deleteAction() {
        $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
        if ($id > 0) {
            $adminModel = new adminModel();
            $adminModel->delete($id);
        }

        header("Location: http://localhost/codeme.edu.vn/production/?controller=admin&action=index");
        die();
    }


}