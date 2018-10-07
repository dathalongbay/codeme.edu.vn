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

        $articleModel = new articleModel();
        $articles = $articleModel->getRows();
        $data = array();
        $data['articles'] = $articles;

        return $this->view('article', 'index', $data);
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
        return $this->view('article', 'submit', $data);
    }

    /**
     * Sửa bài viết
     */
    public function editAction() {
        $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
        $data = array();
        $articleModel = new articleModel();
        $data['article'] = $articleModel->getRow($id);

        return $this->view('article', 'edit', $data);
    }

    /**
     * Lưu dữ liệu vào trong database
     */
    public function storeAction() {
        $data = $_POST;
        $articleModel = new articleModel();
        $articleModel->store($data);

        header("Location: http://localhost/codeme.edu.vn/production/?controller=article&action=index");
        die();
    }

    /**
     * Xóa bài viết
     */
    public function deleteAction() {
        echo '<br>' . __METHOD__;
    }


}