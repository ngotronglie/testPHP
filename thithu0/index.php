<?php
session_start();
use Bramus\Router\Router;



require_once './vendor/autoload.php';
require_once './env.php';
require_once './helper.php';

use Ngotr\Thithu0\Controllers\TeacherController;

$router = new Router();

$router->mount('/teacher', function () use ($router) {
    $router->get('/', TeacherController::class . '@index');
    $router->get('/{id}/delete', TeacherController::class . '@delete');
    $router->get('/show', TeacherController::class . '@index');
    $router->match('GET|POST', '/add', TeacherController::class . '@add');
    $router->match('GET|POST', '/{id}/update', TeacherController::class . '@update');

});
