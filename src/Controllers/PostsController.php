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
        $post = new Post();
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
        header('Location: /posts');
    }

    public function edit(){
        $post = Post::find($_GET['id']);
        if($post){
            view('posts/edit', compact('post'));
        } else {
            echo 404;
        }
    }

    public function update(){
        $post = Post::find($_GET['id']);
        if($post){
            $post->title = $_POST['title'];
            $post->body = $_POST['body'];
            $post->save();
            header('Location: /posts');
        } else {
            echo 404;
        }
    }
    
    public function destroy(){
        $post = Post::find($_GET['id']);
        if($post){
            $post->delete();
            header('Location: /posts');
        } else {
            echo 404;
        }
    }
}