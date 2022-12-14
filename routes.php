<?php

use App\Controllers\AuthController;
use App\Controllers\PostsController;
use App\Router;
use App\Controllers\PublicController;

Router::get('/', [PublicController::class, 'home']); // 'App/Controllers/PublicController'
Router::get('/page1', [PublicController::class, 'page1']);
Router::get('/page2', [PublicController::class, 'page2']);

Router::get('/posts', [PostsController::class, 'index']);
Router::get('/posts/new', [PostsController::class, 'create']);
Router::post('/posts', [PostsController::class, 'store']);
Router::get('/posts/edit', [PostsController::class, 'edit']);
Router::post('/posts/edit', [PostsController::class, 'update']);
Router::get('/posts/delete', [PostsController::class, 'destroy']);

Router::get('/login', [AuthController::class, 'loginForm']);
Router::get('/register', [AuthController::class, 'registerForm']);
Router::post('/login', [AuthController::class, 'login']);
Router::post('/register', [AuthController::class, 'register']);
Router::get('/logout', [AuthController::class, 'logout']);