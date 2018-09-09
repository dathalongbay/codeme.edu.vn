<?php
require "vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$date = date('d-m-Y');
$path = dirname(__FILE__).'/logs/'.$date.'.log';

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler($path, Logger::WARNING));

echo "<pre>";
print_r(E_ALL);
echo "</pre>";

echo $a;
if (!empty(error_get_last())) {
    $errors = error_get_last();

    echo "<pre>";
    print_r($errors);
    echo "</pre>";

    $error_msg = '';
    foreach ($errors as $key_error => $error) {
        $error_msg .=  ' ' . $key_error . ' - ' . $error;
    }

    // add records to the log
    $log->addWarning('System warning ' . $error_msg);
    $log->addError('Error ' . $error_msg);
}


