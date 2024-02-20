<?php

include 'vendor/autoload.php';

use Phroute\Phroute\RouteCollector;
use App\Controllers\CustomerController;

$router = new RouteCollector(); 

$router->get('/', function() {
    $customerController = new CustomerController();
});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));