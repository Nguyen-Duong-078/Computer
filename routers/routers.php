<?php

use Bramus\Router\Router;
use Power\Computer\Controllers\Admin\AuthenticateController;
use Power\Computer\Controllers\Admin\CatelogueController;
use Power\Computer\Controllers\Admin\DashboardController;
use Power\Computer\Controllers\Admin\UserController;
use Power\Computer\Controllers\Admin\CategoryController;
use Power\Computer\Controllers\Admin\PostController;
use Power\Computer\Controllers\Admin\StudentController;
use Power\Computer\Controllers\Admin\TeacherController;
use Power\Computer\Controllers\Client\HomeController;
use Power\Computer\Controllers\Client\PostController as ClientPostController;
use Power\Computer\Controllers\Client\CategoryController as ClientCategoryController;

// Create Router instance
$router = new Router();

// Define routes
$router->get('/', HomeController::class . '@index');
$router->get('/category/{id}', ClientCategoryController::class . '@show');


$router->match('GET|POST', '/auth/login', AuthenticateController::class . '@login');

$router->mount('/admin', function () use ($router) {
    $router->get('/', DashboardController::class . '@index');
    $router->get('/logout', AuthenticateController::class . '@logout');


    $router->mount('/users', function () use ($router) {
        $router->get('/', UserController::class . '@index');
        $router->get('/{id}/show', UserController::class . '@show');
        $router->get('/{id}/delete', UserController::class . '@delete');
        $router->match('GET|POST', '/{id}/update', UserController::class . '@update');
        $router->match('GET|POST', '/{id}/account_settings', UserController::class . '@account_settings');
        $router->match('GET|POST', '/create', UserController::class . '@create');
    });

    $router->mount('/catelogues', function () use ($router) {
        $router->get('/', CatelogueController::class . '@index');
        $router->get('/{id}/show', CatelogueController::class . '@show');
        $router->get('/{id}/delete', CatelogueController::class . '@delete');
        $router->match('GET|POST', '/{id}/update', CatelogueController::class . '@update');
        $router->match('GET|POST', '/create', CatelogueController::class . '@create');
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

$router->run();

// Hiển thị trang 404 khi không tìm thấy url
if (http_response_code() === 404) {
    Error_404();
    exit();
}
