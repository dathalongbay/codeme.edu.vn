<?php

$admin_path = dirname(__FILE__);
define("SITE_URL", "http://codeme.vn/");
define("ADMIN_PATH", $admin_path);
define("CORE_PATH", $admin_path.'/core');
echo '<br> SITE_URL ' . SITE_URL;
echo '<br> ADMIN_PATH ' . ADMIN_PATH;
echo '<br> CORE_PATH ' . CORE_PATH;

require CORE_PATH . '/application.php';

$app = new Application();
$app->run();
?>