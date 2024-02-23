<?php
use Bramus\Router\Router;
use Ngotr\Thithu2\Controllers\ProductController;

require_once 'vendor/autoload.php';
require_once 'env.php';



// Create Router instance
$router = new Router();

// Define routes
// ...
$router->get('/', function () {
    echo '<a href="/Product">quản lí trang Product</a>';
});

$router->mount('/Product', function () use ($router) {

    $router->get('/', ProductController::class . '@index');
    $router->match('GET|POST', '/{id}/update', ProductController::class . '@update');
    $router->match('GET|POST', '/add', ProductController::class . '@add');
    $router->get('/{id}/delete', ProductController::class . '@delete');


});

// Run it!
$router->run();
