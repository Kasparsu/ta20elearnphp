<?php

use App\Controllers\PostsController;
use App\Router;
use App\Controllers\PublicController;

Router::addRoute('/', [PublicController::class, 'home']);
Router::addRoute('/page1', [PublicController::class, 'page1']);
Router::addRoute('/page2', [PublicController::class, 'page2']);
Router::addRoute('/posts', [PostsController::class, 'index']);