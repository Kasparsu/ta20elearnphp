<?php 

namespace App\Models;

use App\DB;
use DateTime;

abstract class Model {
    protected static $table;

    public function __construct()
    {
        if(!isset($this->created_at)){
            $this->created_at = time() . '000';
        }
        if(!isset($this->updated_at)){
            $this->updated_at = time() . '000';
        }
    }

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
    public static function find($id){
        $db = new DB();
        return $db->find(static::$table, static::class, $id);
    }
    public function save(){
        $db = new DB();
        $this->updated_at = time() . '000';
        $fields = get_object_vars($this);
        unset($fields['id']);
        if(isset($this->id)){
            $db->update(static::$table, $fields, $this->id);
        } else {
            $db->insert(static::$table, $fields);
        }
    }

    public function delete(){
        $db = new DB();
        $db->delete(static::$table, $this->id);
    }

    public static function where($fieldName, $fieldValue){
       $db = new DB();
       return $db->where(static::$table, static::class, $fieldName, $fieldValue);
    }
}