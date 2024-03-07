<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// Routes
$router->get('/', [App\Controllers\CategoryController::class, 'index']);

$router->get('/list-user', [App\Controllers\UserController::class, 'listUser']);
$router->get('/add-user', [App\Controllers\UserController::class, 'addUser']);
$router->post('/post-user', [App\Controllers\UserController::class, 'postUser']);
$router->get('/edit-user/{id}', [App\Controllers\UserController::class, 'editUser']);
$router->post('/handle-edit-user/{id}', [App\Controllers\UserController::class, 'handleEditUser']);
$router->get('/delete-user/{id}', [App\Controllers\UserController::class, 'deleteUser']);

$router->get('/add-category', [App\Controllers\CategoryController::class, 'addCategory']);
$router->post('/post-category', [App\Controllers\CategoryController::class, 'postCategory']);
$router->get('/edit-category/{id}', [App\Controllers\CategoryController::class, 'editCategory']);
$router->post('/handle-edit-category/{id}', [App\Controllers\CategoryController::class, 'handleEditCategory']);
$router->get('/delete-category/{id}', [App\Controllers\CategoryController::class, 'deleteCategory']);

$router->get('/list-product', [App\Controllers\ProductController::class, 'index']);
$router->get('/add-product', [App\Controllers\ProductController::class, 'addProduct']);
$router->post('/post-product', [App\Controllers\ProductController::class, 'postProduct']);
$router->get('/edit-product/{id}', [App\Controllers\ProductController::class, 'editProduct']);
$router->post('/handle-edit-product/{id}', [App\Controllers\ProductController::class, 'handleEditProduct']);
$router->get('/delete-product/{id}', [App\Controllers\ProductController::class, 'deleteProduct']);

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

echo $response;
