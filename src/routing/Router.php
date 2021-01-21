<?php

namespace App\routing;

class Router
{
     static $routes = [
        'get' => [],
        'post' => []
    ];

    public static function get(string $uri, callable $callback)
    {
        self::$routes['get'][$uri] = $callback;
    }

    public static function post(string $uri, callable $callback)
    {
        self::$routes['post'][$uri] = $callback;
    }

    public static function handle(string $method, string $uri) {
        $routesByMethod = self::$routes[strtolower($method)];

        if (!key_exists($uri, $routesByMethod)) {
            echo 'Unknown route!';

            return;
        }

        $callback = self::$routes[strtolower($method)][$uri];

        $callback();
    }
}