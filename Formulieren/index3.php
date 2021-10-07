<?php
//echo phpinfo();


$showForm = true;
function formSubmitted2(){
    return (!empty($_POST));
}
function validate(){
    return strlen($_POST['username']) >= 8 && !empty($_POST['country']);
}

if ((!empty($_POST))){
    if (validate()){
        $boodschap = "Het is juist.";
        header("Location: profile.php");
        $showForm = false;
    }
    else{
        $boodschap = "Er is een fout.";
        header("Location: forbidden.php");
        $showForm = true;
    }
    echo $boodschap;
}
else{
    $showForm = true;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php
if($showForm) { ?>

<form action="" method="post">
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" name="username">
    </div>
    <div class="form-group">
        <label for="country">Country:</label>
        <input type="text" class="form-control" name="country">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" name="pwd">
    </div>
    <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>

    <?php } ?>



</form>
</body>
</html>
