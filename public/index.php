<?php

// Define path to application directory
defined('APPLICATION_PATH')
    || define(
        'APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application')
       );

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? 
            getenv('APPLICATION_ENV') : 'production'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));

/** Zend_Application */
require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();
// Create application, bootstrap, and run
$application = new Zend_Config_Ini(
    APPLICATION_PATH . '/configs/application.ini',
    APPLICATION_ENV, 
    array('allowModifications' => true)
);
/* Define Routes and merge */
$routes = new Zend_Config_Ini(
    APPLICATION_PATH . '/configs/routes.ini',
    APPLICATION_ENV, 
    array('allowModifications' => true)
);
$application->merge($routes);
$application = new Zend_Application(
    APPLICATION_ENV,
    $application
);

$application->bootstrap()
            ->run();