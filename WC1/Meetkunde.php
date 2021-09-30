<?php

$functionsExecutedCounter = 0;

function berekenOppervlakteCirkel($straal){
    global $functionsExecutedCounter;
    $functionsExecutedCounter ++;
    $opp = $straal * $straal * pi();
    return $opp;
}

function berekenOppervlakteDriehoek($basis, $hoogte){
    global $functionsExecutedCounter;
    $functionsExecutedCounter ++;
    return ($basis * $hoogte)/2;
}

function berekenOppervlakteRechthoek($zijde1, $zijde2){
    global $functionsExecutedCounter;
    $functionsExecutedCounter ++;
    return $zijde1 * $zijde2;
}

function berekenOppervlakteVierkant($zijde){
    global $functionsExecutedCounter;
    $functionsExecutedCounter ++;
    return berekenOppervlakteRechthoek($zijde, $zijde);
}

function gelijkAan($nm){
    if($nm == 10 ){
        echo "Het nummer is gelijk aan 10";
    }
    else if( $nm == 20){
        echo "Het nummer is gelijk aan 20";
    }
    else if($nm == 30){
        echo "Het nummer is gelijk aan 30";
    }

}
function som(){
    $sum = 0;
    for($x = 1; $x <= 30; $x++) {
        $sum += $x;
    }
    echo $sum;
}

function datumEnSeizoen(){
    $maand = date('F');
    $datum = date('d/m/y');
    $seizoen = "";

    if($maand == "December" || $maand == "January" || $maand == "February"){
        $seizoen = "Winter";
    }
    else if($maand == "March" || $maand == "April" || $maand == "May"){
        $seizoen = "Lente";
    }
    else if($maand == "June" || $maand == "July" || $maand == "August"){
        $seizoen = "Zomer";
    }
    else if($maand == "September" || $maand == "October" || $maand == ""){
        $seizoen = "Herft";
    }

    echo $maand." ".$datum." ".$seizoen;
}
