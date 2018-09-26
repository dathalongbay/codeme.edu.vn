<?php
class Application {

    public function __construct()
    {

    }

    public function run() {

        echo '<br> @@@ ' . __METHOD__;

        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
        $controller = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : 'index';
        $controller = strtolower($controller);
        $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';
        $action = strtolower($action);
        $controllerClass = $controller . 'Controller';
        $actionName = $action . 'Action';
        echo '$controllerClass : ' . $controllerClass;
        echo '<br>';
        echo '$actionName : ' . $actionName;

        $controllerInstance = new $controllerClass();


        echo "<pre>";
        print_r($controllerInstance);
        echo "</pre>";


        if (method_exists($controllerInstance, $actionName)) {
            $controllerInstance->$actionName();
        }





    }


}