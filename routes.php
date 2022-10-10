<?php

use App\Controllers\PostsController;
use App\Router;
use App\Controllers\PublicController;

Router::get('/', [PublicController::class, 'home']);
Router::get('/page1', [PublicController::class, 'page1']);
Router::get('/page2', [PublicController::class, 'page2']);
Router::get('/posts', [PostsController::class, 'index']);
Router::get('/posts/new', [PostsController::class, 'create']);
Router::post('/posts', [PostsController::class, 'store']);