<?php
class loginController {

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
     * Phuong thuc dung de hien thi view login
     */
    public function indexAction() {

        $data = array();

        return $this->view('login', 'index', $data);

    }

    /**
     * Phuong thuc dung de dang nhap
     */
    public function loginAction() {

    }

    /**
     * Phuong thuc nay duoc dung de dang xuat
     */
    public function logoutAction() {

    }

}