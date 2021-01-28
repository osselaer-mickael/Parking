<?php
//exercice 1
$monText = "aujourd'hui il fait -1000 degrés";
$monText = addslashes($monText);
echo addslashes($monText)."<br>";

//exercice 2
$monText2 = "fumer augmente le risque de devenir aveugle";
echo ucfirst($monText2)."<br>";
echo ucwords($monText2)."<br>";
echo strtoupper($monText2)."<br>";

$monText3 = "FUMER TUE";
echo strtolower($monText3)."<br>";
echo lcfirst($monText3)."<br>";

//exercice 3
$monText4 = "Un texte répond de façon plus ou moins pertinente à des critères qui en déterminent la qualité littéraire.
On retient en particulier la structure d'ensemble, la syntaxe et la ponctuation, l'orthographe lexicale et grammaticale,
 la pertinence et la richesse du vocabulaire, la présence de figures de style, le registre de langue et la fonction 
 recherchée (narrative, descriptive, expressive, argumentative, injonctive, poétique). C'est l'objet de l'analyse littéraire. ";

echo str_word_count($monText4);

//exercice 4
$monText5 = "Fumer n'est pas bon pour votre santé";

function replaceText($monText5) {
    $mots =  explode("",$monText5);
    foreach($mots as $mot) {
      echo "mot: $mot  <br>";
    }
}
replaceText($monText5);

//exercice 5
$monTableau = ["tata <br>", "titi <br>", "toto <br>"];
echo implode($monTableau);

//exercice 6
$monText6 = "j'ai besoin de vacance";
echo strrev($monText6). "<br>";
echo str_shuffle($monText6). "<br>";

//exercice 7
$monText7 = "Hello, nous apprenons le PHP";
echo $monText7. "<br>";
echo strip_tags($monText7). "<br>";

//exercice 8
$monText8 = "j'ai plus d'idée";
echo str_pad($monText8,500). "<br>";

//exercice 9
$monText9 = "j'en ai vraiment plus";
$tableau =str_split($monText9);
foreach ($tableau as $item) {
    echo "$item <br>". "<br>";
}

//exercice 10
$monText10 = "j'aime bien les exercices";
$monText10 = str_replace("bien", 'pas', $monText10);
echo $monText10;

//exercice 11
$monText11 = "je fait le test de mon intelligence dans cette formation";
$findme = stripos($monText11, 'test');

if ($findme === true) {
    echo "La chaîne '$findme' a  été trouvée dans la chaîne '$monText11'";
}

//exercice 12



//exercice 13

?>
