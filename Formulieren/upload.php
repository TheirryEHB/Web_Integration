<?php

    //Bestandsnaamecho
    $filename = $_FILES["profielfoto"]["name"];
    //Bestandstype/mime-type (vb: "image/jpeg")
    $btype = $_FILES["profielfoto"]["type"];
    //Bestandsgrootte in bytesecho
    $_FILES["profielfoto"]["size"];//Tijdelijke bestandsnaam op serverecho
    $_FILES["profielfoto"]["tmp_name"];
    //Eventuele fouten die bij uploaden zijn opgetredenecho
    $_FILES["profielfoto"]["error"];

    if ($btype == "image/png" || $btype == "image/jpg" || $btype == "image/jpeg"){
        move_uploaded_file($filename, "/uploads");
    }
    else{
        header("Location: form.php");
    }

?>