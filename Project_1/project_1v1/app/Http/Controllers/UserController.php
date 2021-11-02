<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller{

    public function login(){

    }

    public function register($name, $email, $pass){
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $pass;
        $user->save();

        $_GET['submit'] = null;

        $viewC = new ViewController();
        $viewC->goToPage("subscribtionPage");
    }

}
