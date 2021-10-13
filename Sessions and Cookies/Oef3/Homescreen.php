<?php
session_start();
if(isset($_POST['action'])) {
    if (!isset($_SESSION['taal'])) {
        if ($_POST['action'] == "English")
            $_SESSION['taal'] = 'EN';
        elseif ($_POST['action'] == "Dutch")
            $_SESSION['taal'] = 'NL';
        elseif ($_POST['action'] == "French")
            $_SESSION['taal'] = 'FR';
    }
    else
        $taal = $_SESSION["taal"];
}
if (isset($_POST['username'])) {
//    echo $_POST['username'];
    if (isset($_SESSION["naam"]))
        $naam = $_SESSION["naam"];
    else
        $_SESSION["naam"] = $_POST['username'];
}
if (isset($_POST['kleur'])){
    if (isset($_SESSION["kleur"]))
        $kleur = $_SESSION["kleur"];
    else
        $_SESSION["kleur"] = $_POST['kleur'];
}
if (isset($_POST['timez'])) {
    if (isset($_SESSION["timez"]))
        $timezone = $_SESSION["timez"];
    else
        $_SESSION["timez"] = $_POST['timez'];
}
echo $naam."\n";
echo $kleur."\n";
echo $timezone."\n";

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
