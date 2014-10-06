<?php
echo getenv('APPLICATION_ENV');
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', dirname(dirname(__DIR__)));
define('SRC_PATH', ROOT_PATH . DS . 'src' );
define('PUBLIC_PATH', SRC_PATH . DS . 'public' );
define('APP_PATH', SRC_PATH . DS . 'application' );
define('CONFIG_PATH', APP_PATH . DS . 'configs' );
//define('SRC_PATH', ROOT_PATH . DS . 'src' );

require_once ROOT_PATH . DS . 'vendor' . DS . 'autoload.php';

$application = new Zend_Application(getenv('APPLICATION_ENV') ?: 'production', CONFIG_PATH . DS . 'application.ini');
$application->bootstrap();
$application->run();
