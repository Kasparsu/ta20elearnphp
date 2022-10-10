<?php 

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;
use PDO;
use stdClass;

class PostsController {

    public function index(){
        $posts = Post::all();
        view('posts/index', compact('posts'));
    }

    public function create(){
        view('posts/create');
    }

    public function store(){
        var_dump($_GET);
        var_dump($_POST);
    }
}