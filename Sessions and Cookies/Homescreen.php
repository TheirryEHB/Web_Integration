<?php

    if(isset($_POST['English'])) {
        setcookie('taal', 'EN');
    }
    elseif (isset($_POST['Dutch'])) {
        setcookie('taal', 'NL');
    }
    elseif (isset($_POST['French'])) {
        setcookie('taal', 'FR');
    }

    if (isset($_COOKIE['taal'])){
        echo $_COOKIE['taal'];
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

<form action="Instellingen.php" method="post">
    <div>
        <p>Hallo, welcome to exersice 1.</p>
    </div>
    <div>
        <p>Hallo, welkome bij oefening 1.</p>
    </div>
    <div>
        <p>Bonjour, bienvenue a l'exersice 1.</p>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>

</form>

</body>
</html>
