<?php

use Phalcon\Loader;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Mvc\Application;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;
 
// Define some absolute path constants to aid in locating resources
define('BASE_PATH', dirname(__DIR__ . '../'));
define('APP_PATH', BASE_PATH . '/app');
 

$loader = new Loader();

$loader->registerDirs(
    [
        APP_PATH . '/controllers/',
        APP_PATH . '/models/',
        APP_PATH . '/views/',
        
    ]
);

$loader->register();
$dependencyInjectionContainer = new FactoryDefault();

$dependencyInjectionContainer->set(
    'view',
    function () {
        $view = new View();
        $view->setViewsDir(APP_PATH . '/views/');
        return $view;
    }
);

$dependencyInjectionContainer->set(
    'url',
    function () {
        $url = new UrlProvider();
        $url->setBaseUri('/');
        return $url;
    }
); 


// Setup the database service
$dependencyInjectionContainer->set(
    'db',
    function () {
        return new DbAdapter(
            [
                'host'     => '127.0.0.1',
                'username' => 'root',
                'password' => 'mysql',
                'dbname'   => 'mysql',
            ]
        );
    }
);

try {


$application = new Application($dependencyInjectionContainer);
$response = $application->handle();
$response->send();
} catch (\Exception $e) {
    echo 'Exception: ', $e->getMessage();
}

 
 
 
?>