<?php

// Compléter le code ci dessous pour afficher la longueur de la chaine de caracteres

echo strlen("google");

//echo"<br><br>"; //Decommentez les <br> pour tester l'affichage lorsque vous aurez plusieurs instructions

// Compléter le code ci dessous pour inverser la chaine de caractere

echo strrev("anticonstitutionellement");

// Et si vous testiez également avec votre prénom ?

echo strlen("mickael");
echo strrev("mickael");

//echo"<br><br>";

// Compléter le code ci dessous pour remplacer le mot ok par non
$oldtxt = "Ok Google!";
$newtxt = str_replace("Ok", "Non", "Ok Google" );

echo ($newtxt);