<?php

//var_dump($_SERVER['REQUEST_URI']);
spl_autoload_register(function($className){
    $className = substr($className, strlen('App\\'));
    require_once __DIR__ . "/../src/$className.php";
});

require __DIR__ . '/../helpers.php';
require __DIR__ . '/../routes.php';


$router = new App\Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$match = $router->match();
if($match){
    if(is_callable($match['action'])){
        call_user_func($match['action']);
    } elseif (is_array($match['action'])){
        $className = $match['action'][0];
        $method = $match['action'][1];
        $controller = new $className();
        $controller->$method();
    }
} else {
    echo 404;
}