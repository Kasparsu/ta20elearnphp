<?php

namespace App;

use App\Models\Post;
use PDO;

class DB {
    private $conn;

    public function __construct() {
        $this->conn = new PDO('sqlite:database.sqlite');
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function all($table, $model){
        $statement = $this->conn->prepare("SELECT * FROM $table;");
        $statement->execute();
        //$statement->setFetchMode(PDO::FETCH_ASSOC);
        return $statement->fetchAll(PDO::FETCH_CLASS, $model);
    }
}