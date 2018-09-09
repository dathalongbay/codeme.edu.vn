<?php
require "vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


$path = dirname(__FILE__) . '/logs/abc.log';

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler($path, Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');



