<?php
class indexController {

    /**
     *
     * indexController constructor.
     */
    public function __construct()
    {

    }

    public function view($view, $action, $data) {
        ob_start();

        extract($data);

        if (IS_ADMIN == 1) {
            require ADMIN_VIEW_PATH.'/'.$view.'/'.$action.'.php';
        } else {
            require VIEW_PATH.'/'.$view.'/'.$action.'.php';
        }

        $out = ob_get_contents();

        ob_end_clean();

        echo $out;
    }

    /**
     * Default action
     */
    public function indexAction() {
        echo '<br>' . __METHOD__;
        return $this->view();
    }


}