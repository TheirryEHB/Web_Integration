<?php
//echo phpinfo();

    if(  formSubmitted()){

        if(validatieFormulierCorrect()){
            // Correct ingevuld
            //// verwerkengegevens
            /// // toon resultatenof redirect
        }
        else {
            //Nietcorrect ingevuld
            ////Maakde  foutboodschappen
            /// //Toon het formulierweer.
        }
    }

    function formSubmitted(){
        $dom = new DOMDocument();
        $dom->loadHTML('<ul><li id="voorli">Voornaam: Kevin</li><li id="achtli">Achternaam: Felix</li></ul>');
        return False;
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

<form action="/action_page.php">
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd">
    </div>
    <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>

</form>
</body>
</html>
