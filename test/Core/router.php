<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = require base_path('routers.php');
routeToController($uri, $routes);