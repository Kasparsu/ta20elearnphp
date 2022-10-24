<?php 

namespace App\Controllers;

use App\Models\User;

class AuthController {

    public function loginForm(){
        view('auth/login');
    }

    public function registerForm(){
        view('auth/register');
    }

    public function register(){
        $user = new User();
        $user->email = $_POST['email'];
        $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $user->save();
        header('Location: /login');
    }

    public function login(){
        $users = User::where('email', $_POST['email']);
        if(count($users)){
            $user = $users[0];
            if(password_verify($_POST['password'], $user->password)){
                $_SESSION['id'] = $user->id;
                header('Location: /');
            } else {
                header('Location: /login');
            }
        } else {
            header('Location: /login');
        }
    }
}