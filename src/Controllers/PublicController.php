<?php 

namespace App\Controllers;

class PublicController {

    public function home(){
        $name = 'Kaspar';
        view('home', compact('name'));
    }

    public function page1(){
        view('page1');
    }

    public function page2(){
        view('page2');
    }

}