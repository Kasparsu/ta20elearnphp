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

    public function find($table, $model, $id){
        $statement = $this->conn->prepare("SELECT * FROM $table WHERE id=$id;");
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, $model);
        return $statement->fetch();
    }

    public function insert($table, $fields){
        $fieldNames = array_keys($fields);
        $fieldNamesText = implode(',', $fieldNames);
        
        foreach($fields as &$field){
            if(is_object($field) && get_class($field) == 'DateTime'){
                $field = $field->getTimestamp() * 1000; // mstime
            }
        }
        $fieldValuesText = "'" . implode("','", $fields) . "'";
        $sql = "INSERT INTO $table ($fieldNamesText)
        VALUES ($fieldValuesText)";
        // use exec() because no results are returned
        $this->conn->exec($sql);
    }
}