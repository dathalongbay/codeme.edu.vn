<?php
class categoryArticleController {

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
        echo '<pre>';
        print_r($_FILES);
        echo '</pre>';

        $data = $_POST;
        $articleModel = new articleModel();
        $articleModel->store($data);

        $upload = new Upload();
        $upload_result = $upload->upload($_FILES);

        echo '<pre>';

        print_r($upload_result);
        echo '</pre>';
        die;

        header("Location: http://localhost/codeme.edu.vn/production/?controller=article&action=index");
        die();
    }

    /**
     * Xóa bài viết
     */
    public function deleteAction() {
        $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
        if ($id > 0) {
            $articleModel = new articleModel();
            $articleModel->delete($id);
        }

        header("Location: http://localhost/codeme.edu.vn/production/?controller=article&action=index");
        die();
    }


}