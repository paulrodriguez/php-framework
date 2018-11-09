<?php
define('APP_ROOT',dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);
define('PS', PATH_SEPARATOR);

include APP_ROOT.DS.'vendor'.DS.'autoload.php';
include APP_ROOT.DS.'app'.DS.'App.php';


App::run();

