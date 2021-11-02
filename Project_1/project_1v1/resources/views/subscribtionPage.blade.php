<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.master')
    @section('loginsection1')
        <?php

        use App\Models\User;if( isset($_GET['submit']) ) {

                $name = $_GET['inputUsername'];
                $pass = md5($_GET['inputPassword']);
                if (isset($_GET['rememInput'])){
                    $remem = $_GET['rememInput'];
                    echo $remem;
                }

                $user = User::where('name', '=', $name, 'AND', 'password', '=', $pass)->first();
                $email = $user->email;
                Auth::attempt(['name'=>$name,'password'=>$pass, 'email'=>$email]);


                if(Auth::check())
                    echo "authed";
//                echo Auth::user()->name;
                $_GET['submit'] = null;
            }

        ?>
        <div class="maindiv">
            <form class="formm" action="" method="get">
                <div class="form-group">
                    <label for="inputUsername">Username</label>
                    <input type="text" class="form-control" id="inputUsername" name="inputUsername" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
                </div>
                <div class="form-group">
                    <label class="form-check-label"><input type="checkbox" id="rememInput" name="rememInput"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary" name="submit" value="send">Sign in</button>
            </form>
        </div>
        <div class="form-group">
            <label class="form-check-label"><a href="{{route('gotopage', ["pagename" => "register"])}}">Register</a></label>
        </div>
    @endsection
</body>
</html>
