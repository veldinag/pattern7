<?php

// Думаю, что в данном файле Front Controller
// с ним взаимодействуют классы MainController, ProductController,
// OrderController, UserController

use Controller\MainController;
use Controller\OrderController;
use Controller\ProductController;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();

$routes->add(
    'index',
    new Route('/', ['_controller' => [MainController::class, 'indexAction']])
);

$routes->add(
    'product_list',
    new Route('/product/list', ['_controller' => [ProductController::class, 'listAction']])
);
$routes->add(
    'product_info',
    new Route('/product/info/{id}', ['_controller' => [ProductController::class, 'infoAction']])
);

$routes->add(
    'order_info',
    new Route('/order/info', ['_controller' => [OrderController::class, 'infoAction']])
);
$routes->add(
    'order_checkout',
    new Route('/order/checkout', ['_controller' => [OrderController::class, 'checkoutAction']])
);

$routes->add(
    'user_authentication',
    new Route('/user/authentication', ['_controller' => [\Controller\UserController::class, 'authenticationAction']])
);
$routes->add(
    'logout',
    new Route('/user/logout', ['_controller' => [\Controller\UserController::class, 'logoutAction']])
);

return $routes;
