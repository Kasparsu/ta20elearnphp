<?php

//var_dump($_SERVER['REQUEST_URI']);

switch($_SERVER['REQUEST_URI']){
    case '/': 
        $name = 'Kaspar';
        include __DIR__ . '/../views/home.php';
        break;
    case '/page1':
        include __DIR__ . '/../views/page1.php';
        break;
    case '/page2':
        include __DIR__ . '/../views/page2.php';
        break;
    default:
        echo "404";
        break;
}