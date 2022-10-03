<?php 

namespace App\Controllers;

use PDO;

class PostsController {

    public function index(){
        $db = new PDO('sqlite:database.sqlite');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $db->prepare('SELECT * FROM posts;');
        $statement->execute();
        //$statement->setFetchMode(PDO::FETCH_ASSOC);
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        var_dump($results);
    }

}