<?php

use Bramus\Router\Router;
use Ngotr\Oop\Controllers\Admin\AuthenticateController;
use Ngotr\Oop\Controllers\Admin\CategoriesController;
use Ngotr\Oop\Controllers\Admin\DashBoardController;
use Ngotr\Oop\Controllers\Admin\PostController;
use Ngotr\Oop\Controllers\Client\PostController as ClientPostController;
use Ngotr\Oop\Controllers\Admin\UserController;
use Ngotr\Oop\Controllers\Client\ClientAuthenticateController;
use Ngotr\Oop\Controllers\Client\HomeController;

// Create Router instance
$router = new Router();
$router->get('/logoutAdmin', AuthenticateController::class . '@logoutAdmin');
$router->get('/logout', ClientAuthenticateController::class . '@logout');
// Define routes
$router->get('/', HomeController::class . '@index');
$router->get('/post/{id}', ClientPostController::class . '@show');
// $router->get('/postAll/{id}');




$router->match('GET|POST', '/auth/login', AuthenticateController::class . '@login');
$router->mount('/admin', function () use ($router) {

    $router->get('/', DashBoardController::class . '@index');
    $router->get('/logoutAdmin', AuthenticateController::class . '@logoutAdmin');


    $router->mount('/users', function () use ($router) {
        $router->get('/', UserController::class . '@index');
        $router->match('GET|POST', '/create', UserController::class . '@create');
        $router->get('/{id}/show', UserController::class . '@show');
        $router->match('GET|POST', '/{id}/update', UserController::class . '@update');
        $router->match('GET|POST', '/{id}/delete', UserController::class . '@delete');
    });

    $router->mount('/categories', function () use ($router) {
        $router->get('/', CategoriesController::class . '@index');
        $router->match('GET|POST', '/create', CategoriesController::class . '@create');
        $router->match('GET|POST', '/{id}/update', CategoriesController::class . '@update');
        $router->match('GET|POST', '/{id}/delete', CategoriesController::class . '@delete');
    });
    $router->mount('/posts', function () use ($router) {
        $router->get('/', PostController::class . '@index');
        $router->get('/{id}/show', PostController::class . '@show');
        $router->get('/{id}/delete', PostController::class . '@delete');
        $router->match('GET|POST', '/{id}/update', PostController::class . '@update');
        $router->match('GET|POST', '/create', PostController::class . '@create');
    });
});

$router->before('GET|POST', '/admin/*', function () {
    if (!isset($_SESSION['user'])) {
        header('Location: /auth/login');
        exit();
    }
});

$router->before('GET|POST', '/admin/.*', function () {
    if (!isset($_SESSION['user'])) {
        header('Location: /auth/login');
        exit();
    }
});
// Run it!
$router->run();