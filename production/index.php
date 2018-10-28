<?php
session_start();
$admin_path = dirname(__FILE__);
define("SITE_URL", "http://localhost/codeme.edu.vn/production/");
define("ADMIN_PATH", $admin_path);
define("CORE_PATH", $admin_path.'/core');
define("DATABASE_PATH", $admin_path.'/core/database');
define("APP_PATH", $admin_path.'/app');
define("CONTROLLER_PATH", $admin_path.'/app/controllers');
define("MODEL_PATH", $admin_path.'/app/models');
define("VIEW_PATH", $admin_path.'/app/views');
define("UPLOAD_PATH", $admin_path.'/upload');
define("HELPER_PATH", $admin_path.'/core/helper');

spl_autoload_register(function ($class_name) {
    $paths = array(ADMIN_PATH, HELPER_PATH, CORE_PATH, DATABASE_PATH, APP_PATH, CONTROLLER_PATH, MODEL_PATH, VIEW_PATH);
    foreach ($paths as $path) {
        $file_path = $path . '/' . $class_name . '.php';
        if (file_exists($file_path)) {
            require $file_path;
        }
    }
});

$app = new Application();
$app->run();
?>