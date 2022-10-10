<?php

namespace App\Models;

use App\DB;
use DateTime;

class Post extends Model {
    protected static $table = 'posts';

    public $id;
    public $title;
    public $body;
//    public $created_at;
//    public $updated_at;

    public function created(){
        $date = new DateTime();
        $date = $date->setTimestamp(substr($this->created_at, 0, -3));
        return $date;
    }

}