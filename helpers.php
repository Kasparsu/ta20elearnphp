<?php

use App\Models\User;

function view($viewName, $vars = []){
    extract($vars);
    include __DIR__ . "/views/$viewName.php";
} 

function auth(){
    return User::auth();
}