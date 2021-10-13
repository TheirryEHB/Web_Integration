<?php

    if(isset($_POST['action'])) {
        /*echo $_POST['action'];*/
        if($_POST['action'] == "English")
            setcookie('taal', 'EN');
        elseif ($_POST['action'] == "Dutch")
            setcookie('taal', 'NL');
        elseif ($_POST['action'] == "French")
            setcookie('taal', 'FR');
    }

    if (isset($_COOKIE['taal'])){
        echo $_COOKIE['taal'];
    }
    else
        setcookie('taal', 'NL');
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
        <?php
            if ($_COOKIE['taal'] == 'EN')
                echo "Hallo, welcome to exersice 1.";
            elseif ($_COOKIE['taal'] == 'FR')
                echo "Bonjour, bienvenue a l'exersice 1.";
            else
                echo "Hallo, welkome bij oefening 1.";
        ?>

    </div>

    <button type="submit" class="btn btn-default">Submit</button>

</form>

</body>
</html>
