<?php
class loginController {

    public function __construct()
    {
        /**
         * Generate admin 1 first time
         */
        $adminModel = new adminModel();
        $admins = $adminModel->getRows();
        if (empty($admins)) {
            $data = array(
                'username' => 'datdo',
                'email' => 'dathalongbay@gmail.com',
                'password' => 'a12345678',
                'status' => 1
            );
            $adminModel->store($data);
        }
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


        if (isset($_POST) && !empty($_POST)) {

            if (isset($_POST['username']) && isset($_POST['password'])
                && (strlen($_POST['username']) > 1)  &&  (strlen($_POST['password']) > 1) ) {

                $username = $_POST['username'];
                $password = $_POST['password'];
                $adminModel = new adminModel();
                $checkLogin = $adminModel->getLogin($username, $password);

                if (isset($checkLogin['username'])) {
                    // redirect ve trang chu
                    $_SESSION['login_user'] = $checkLogin;
                    $loginURL = SITE_URL . 'index.php?controller=index&action=index';
                    header("Location: $loginURL");
                    die;
                }

            }
        }

        $_SESSION['login_fail'] = 'Username hay mật khẩu không đúng';
        $loginURL = SITE_URL . 'index.php?controller=login&action=index';
        header("Location: $loginURL");
        die;
    }

    /**
     * Phuong thuc nay duoc dung de dang xuat
     */
    public function logoutAction() {


        unset($_SESSION["login_user"]);

        $loginURL = SITE_URL . 'index.php?controller=login&action=index';
        header("Location: $loginURL");
        die;
    }

}