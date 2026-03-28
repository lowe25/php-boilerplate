<?php

class Router {
    protected $routes = [];

    public function get($uri, $callback) {
        $this->routes['GET'][$uri] = $callback;
    }

    public function dispatch($uri, $method) {
        $callback = $this->routes[$method][$uri] ?? null;

        if (!$callback) {
            http_response_code(404);
            echo View::render('layouts/404', [
                'title' => '404 Page Not Found'
            ]);
            return;
        }

        if (is_array($callback)) {
            [$controller, $method] = $callback;
            (new $controller)->$method();
        } else {
            $callback();
        }
    }
} 