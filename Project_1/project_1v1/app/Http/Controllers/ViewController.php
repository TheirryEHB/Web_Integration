<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller{

    public function goToPage($page){


        if ($page == "subscribtionPage")
            return view('subscribtionPage');
        elseif ($page == "projectpage")
            return view('projectpage');
        elseif ($page == "frontpage")
            return view('frontpage');
        elseif ($page == "register")
            return view('registerPage');



    }


}
