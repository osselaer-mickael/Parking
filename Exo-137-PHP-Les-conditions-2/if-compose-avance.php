<?php
/*****************************************/
/********** Conditions Avancées *********/
/*****************************************/
echo "CONDITIONS COMPOSEES AVANCEES <br><br><br>";

$animal = "Chat";
$vivant = true;
$couleur = "Blanc";
$yeux = "Vert";

echo "1.Est ce que c'est mon chat ? ";
echo "<br>";
echo "Mon chat est vivant, de couleur blanc et a les yeux Vert";
echo "<br>";

if($animal === "Chat" && $vivant === true && $couleur === "Blanc" && $yeux === "Vert") {
    echo "Oui";
}
else {
    echo "Non";
}
echo "<br><br>";

//----------------------------------------
/*###############################################*/
/*################# ACTIVITÉS ###################*/
/*###############################################*/

// Écrivez le test qui vérifie la question suivante : (utilisez un seul if)
echo "1.Est-ce que c'est un animal qui fait l'affaire ? ";
echo "<br>";
echo "Je veux un chien ou un chat de couleur marron avec des yeux verts ";
echo "<br>";
//n'hésitez pas à changer les valeurs pour tester si ça fonctionne
$animal = "Chat";
$vivant = true;
$couleur = "Marron";
$yeux = "Vert";


if($animal === "chat") {
    echo 'Oui';
}
else {
    echo 'Non';
}
echo "<br><br>";


// Écrivez le test qui vérifie la question suivante : (utilisez un seul if)
echo "2.Est ce que c'est un de mes chats ? ";
echo "<br>";
echo "Un de mes chats est vivant, a des yeux verts et est de couleur marron. 
Et l'autre est aussi vivant, de couleur blanche et a des yeux verts  ";
echo "<br>";
//n'hésitez pas à changer les valeurs pour tester si ça fonctionne
$animal = "Chat";
$vivant = true;
$couleur = "Blanc";
$yeux = "Vert";

if($animal === "chat" && $vivant === true && $couleur === "marron" && $yeux === "vert") {
    echo 'Oui';
}
else {
    echo 'Non';
}
echo "<br><br>";

//----------------------------------------
// Écrivez le test qui vérifie la question suivante : (utilisez un seul if)
echo "3.Est ce que c'est un de mes animaux ? ";
echo "<br>";
echo "J'avais un chien de couleur noire avec des yeux bleus. 
J'ai un chat de couleur orange et avec des yeux bleus et un chien de couleur marron et des yeux bleus ";
echo "<br>";

$animal = "Chien";
$vivant = false;
$couleur = "Noir";
$yeux = "Vert";

/** remplacer le chiffre 0 par les bonnes conditions **/
if($animal === "chien" && $yeux === "bleu") {
    echo 'Oui';
}
else {
    echo 'Non';
}
echo "<br><br>";
//----------------------------------------
