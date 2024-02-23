<?php



use Bramus\Router\Router;
use Ngotr\Thithu3\Controllers\FoodController;

require_once './vendor/autoload.php';
require_once './env.php';

// Create Router instance
$router = new Router();

// Define routes
// ...
$router->get('/', function () {
    echo 'đây là trang chủ';
});

$router->mount('/food', function () use ($router) {

    // will result in '/movies/'
    $router->get('/', FoodController::class . '@index');
    $router->match('GET|POST', '/add', FoodController::class . '@add');
    $router->match('GET|POST', '/{id}/update', FoodController::class . '@update');
    $router->match('GET|POST', '/{id}/delete', FoodController::class . '@delete');
});
// Run it!
$router->run();