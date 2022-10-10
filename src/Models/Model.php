<?php 

namespace App\Models;

use App\DB;
use DateTime;

abstract class Model {
    protected static $table;


    public function __set($name, $value){
        if($name == 'created_at' || $name == 'updated_at'){
            $date = new DateTime();
            $date = $date->setTimestamp(substr($value, 0, -3));
            $this->$name = $date;
        }
    }

    public static function all(){
        $db = new DB();
        return $db->all(static::$table, static::class);
    }
}