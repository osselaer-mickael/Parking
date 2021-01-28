<?php

//exercice 1
function typeTrue() {
    return true;
}

//exercice 2
$toto = "tititoto";

function maChaine ($toto) {
    echo $toto;
}

//exercice 3
$titi = "mathys";
$tata = "gauthier";

function popi($titi, $tata) {
    echo $titi;
    echo $tata;
}

//exercice 4
$number1 = 3;
$number2 = 5;

function mesNombres ($number1, $number2) {
    if ($number1 < $number2) {
        echo true;
    }
}

//exercice 5
$maPhrase = "le Janvier";

function maDate ($maPhrase) {
    echo $maPhrase + 15;
}

//exercice 6
$monTableau = ["nom" => "osselaer", "prenom" => "mickael", "age" => 29 ];
echo $monTableau["prenom"];


//exercice 7
function toto($age, $genre) {
    if($genre === 'masculin' && $age >= 18){
        echo "Vous êtes un homme et vous êtes majeur";
    }
    elseif($genre === 'masculin' && $age < 18) {
        echo "Vous êtes un homme et vous êtes mineur";
    }

    elseif($genre !== "masculin" && $age >= 18) {
        echo "Vous êtes une femme et vous êtes majeur";
    }
    else {
        echo "Vous êtes une femme et vous êtes mineur";
    }
}
//exercice 8
$nombre1 = 1;
$nombre2 = 2;
$nombre3 = 3;

function tata($nombre1, $nombre2, $nombre3) {
    if ($nombre1 + $nombre2 + $nombre3 === 6) {
        echo "true";
    }
    else{
        echo "false";
    }
}
tata(1, 2, 3);
toto(18, "masculin");
?>