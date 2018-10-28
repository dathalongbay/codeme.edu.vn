<?php
class indexController {

    /**
     *
     * indexController constructor.
     */
    public function __construct()
    {
        /*if ( !isset($_SESSION['login_user']) || empty($_SESSION['login_user']) ) {

            $loginURL = SITE_URL . 'index.php?controller=login&action=index';
            header("Location: $loginURL");
            die;
        }*/
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
     * Default action
     */
    public function indexAction() {
        $view_folder = 'index';
        $action_name = 'index';
        $data = array(
            'name' => 'T3H',
            'name1' => 'T3H1',
            'phone' => '012345566',
            'address' => 'ha noi',
            'passport' => '12345678');
        return $this->view($view_folder, $action_name, $data);
    }


}