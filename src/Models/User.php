<?php 

namespace App\Models;

use App\DB;
use DateTime;

class User extends Model {
    protected static $table = 'users';

    public $id;
    public $email;
    public $password;

}