<?php
class categoryArticleController {

    /**
     *
     * categoryArticleController constructor.
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
     * Liệt kê tất cả các danh mục
     */
    public function indexAction(){

        $categoryArticleModel = new categoryArticleModel();
        $categories = $categoryArticleModel->getListCategories();

        $parents = array();

        foreach($categories as $key => $value) {

            $category_id = (int) $value['id'];
            $parents[$category_id] = $value;
        }

        $data = array();
        $data['categories'] = $categories;
        $data['parents'] = $parents;

        return $this->view('categoryarticle', 'index', $data);
    }

    /**
     * Xem chi tiết 1 danh mục
     */
    public function viewAction(){
        echo '<br>' . __METHOD__;

    }

    /**
     * Thêm danh mục
     */
    public function submitAction(){
        $data = array();
        return $this->view('categoryarticle', 'submit', $data);
    }

    /**
     * Sửa danh mục
     */
    public function editAction() {
        $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
        $data = array();
        $categoryArticleModel = new categoryArticleModel();
        $data['category'] = $categoryArticleModel->getRow($id);

        return $this->view('categoryarticle', 'edit', $data);
    }

    /**
     * Lưu dữ liệu vào trong database
     */
    public function storeAction() {
        echo '<pre>';
        print_r($_FILES);
        echo '</pre>';

        $data = $_POST;
        $categoryArticleModel = new categoryArticleModel();
        $categoryArticleModel->store($data);

        $upload = new Upload();
        $upload_result = $upload->upload($_FILES);

        echo '<pre>';

        print_r($upload_result);
        echo '</pre>';
        die;

        header("Location: http://localhost/codeme.edu.vn/production/?controller=categoryArticle&action=index");
        die();
    }

    /**
     * Xóa danh mục
     */
    public function deleteAction() {
        $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
        if ($id > 0) {
            $categoryArticleModel = new categoryArticleModel();
            $categoryArticleModel->delete($id);
        }

        header("Location: http://localhost/codeme.edu.vn/production/?controller=categoryArticle&action=index");
        die();
    }


}