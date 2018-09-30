<?php
class Application {

    public function __construct()
    {

    }

    public function run() {


        $controller = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : 'index';
        $controller = strtolower($controller);
        $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';
        $action = strtolower($action);
        $controllerClass = $controller . 'Controller';
        $actionName = $action . 'Action';


        $controllerInstance = new $controllerClass();



        if (method_exists($controllerInstance, $actionName)) {
            $controllerInstance->$actionName();
        }





    }


}