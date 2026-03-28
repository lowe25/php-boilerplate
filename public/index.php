<?php

require_once __DIR__ . '/../vendor/autoload.php';

// load helpers
require_once __DIR__ . '/../app/core/helpers.php';

// load core
require_once __DIR__ . '/../app/core/View.php';
require_once __DIR__ . '/../app/core/Router.php';

// import controller
use App\Controllers\HomeController;

// init router
$router = new Router();

// DEFINE ROUTES HERE
$router->get('/', [HomeController::class, 'index']);

// handle URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// fix base path (IMPORTANT for XAMPP)
$basePath = '/php-boilerplate/public';
$uri = str_replace($basePath, '', $uri);
$uri = $uri ?: '/';

// dispatch route
$router->dispatch($uri, $_SERVER['REQUEST_METHOD']);