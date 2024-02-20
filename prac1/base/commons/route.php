<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function () {
    if (!isset($_SESSION['auth']) || empty($_SESSION['auth'])) {
        header('location: ' . BASE_URL . 'login');
        die;
    }
});


$router->get('/', [App\Controllers\StudentController::class, 'getStudent']);
$router->get('add-student', [App\Controllers\StudentController::class, 'addStudent']);
$router->post('post-student', [App\Controllers\StudentController::class, 'postStudent']);
$router->get('detail-student/{id}', [App\Controllers\StudentController::class, 'detailStudent']);
$router->post('edit-student/{id}', [App\Controllers\StudentController::class, 'editStudent']);
$router->get('delete-student/{id}', [App\Controllers\StudentController::class, 'deleteStudent']);

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
echo $response;
