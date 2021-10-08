<?php


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Instellingen</title>
</head>
<body>
<div>
    <form action="Homescreen.php" method="post">
        <div class="form-group">
            <label for="custom-radio">Kies uw gewenste taal:</label>
            <div class="custom-control custom-radio">
                <input type="radio" name="action" value="English" class="form-check-input"> English<br>
                <input type="radio" name="action" value="Dutch" class="form-check-input"> Dutch<br>
                <input type="radio" name="action" value="French" class="form-check-input"> French<br>
            </div>
        </div>
        <div class="form-group">
            <label for="username">Voer uw gebruikersnaam in:</label><br>
            <input type="text" name="username" >
        </div>
        <div class="form-group">
            <label for="kleur">Kies een kleur:</label><br>
            <select name="kleur" Size="Number_of_options">
                <option value="Wit"> Wit </option>
                <option value="Zwart"> Zwart </option>
                <option value="Rood"> Rood </option>
                <option value="Green"> Green </option>
            </select>
        </div>
        <div class="form-group">
            <label for="timez">Kies een kleur:</label><br>
            <select name="timez">
                <option value="Central European Summer Time"> Central European Summer Time </option>
                <option value="British Summer Time"> British Summer Time </option>
                <option value="Eastern European Summer Time"> Eastern European Summer Time </option>
                <option value="Moscow Standard Time"> Moscow Standard Time </option>
            </select>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>

    </form>
</div>
</body>
</html>
