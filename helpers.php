<?php

function view($viewName, $vars = []){
    extract($vars);
    include __DIR__ . "/views/$viewName.php";
} 