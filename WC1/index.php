
<?php
//echo phpinfo();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Werkcollege 1</title>
</head>
<body>
<select id="oefs">
    <?php
    for ($x = 1; $x <= 19; $x++) {
        echo "<option value='Oef$x' id='Oef$x'>Oef$x</option>";
    }
    ?>
</select>

<?php
for ($x = 1; $x <= 19; $x++) {
    echo "<div value='Oef$x' class='divv' id='Oef$x'>Oef$x</div>";
}
?>



<?php require("Meetkunde.php");

    echo "de opp is: ".berekenOppervlakteCirkel(2.2);
    echo "<br>";
    echo "opp driehoek: ".berekenOppervlakteDriehoek(2, 3);
    echo "<br>";
    echo "opp rechthoek: ".berekenOppervlakteRechthoek(5, 5);
    echo "<br>";
    echo "opp vierkant: ".berekenOppervlakteVierkant(2);
    echo "<br>";
    echo "cout". $functionsExecutedCounter;
    echo "<br>";
    gelijkAan(20);
    echo "<br>";
    som();
    echo "<br>";
    datumEnSeizoen();
    echo "<br>";
    splitsNaam("Thierry K");
?>




<script src="script/script.js"></script>
</body>
</html>
