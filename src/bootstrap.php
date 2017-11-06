<?php
// define document root path
define('PATH_ROOT', realpath(__DIR__) . '/../');

// define further absolute paths, necessary for initial setup
define('PATH_SRC', PATH_ROOT . 'src/');
define('PATH_SRC_SHARED', PATH_SRC . 'shared/');

// initialize Autoloader
require_once PATH_SRC_SHARED . 'Psr4AutoloaderClass.php';
$classLoader = new \Initial\Psr4AutoloaderClass();
$classLoader->register();

echo '<html><head><title>It works!</title></head><body><h1>It works!</h1></body></html>';