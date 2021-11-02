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
        use App\Http\Controllers\UserController;

        if( isset($_GET['submit']) ) {
            //be sure to validate and clean your variables
            $name = htmlentities($_GET['inputUsername']);
            $email = htmlentities($_GET['inputEmail']);
            $pass = htmlentities($_GET['inputPassword']);

            $_GET['submit'] = null;

            $userCon = new UserController();
            $userCon->register($name, $email, md5($pass));


            }
    ?>
    <div class="maindiv">
        <form class="formm" action="" method="get">
            <div class="form-group">
                <label for="inputUsername">Username</label>
                <input type="text" class="form-control" name="inputUsername" id="inputUsername" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" name ="inputEmail" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" name ="inputPassword" id="inputPassword" placeholder="Password">
            </div>
            <div class="form-group">
                <label class="form-check-label"><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" value="send">Register</button>
        </form>
    </div>

@endsection
</body>
</html>
