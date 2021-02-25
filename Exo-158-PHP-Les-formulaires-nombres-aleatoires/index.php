<?php

if(isset($_POST['nombreX']) && isset($_POST['nombreY'])) {
    $x = intval($_POST['nombreX']);
    $y = intval($_POST['nombreY']);
    if($x < 0 || $x > 100) {
        $x = 0 ;
    }
    if($y < 0 || $y > 100) {
        $y = 0;
    }

    echo rand($x, $y);
}




/*
- Créer un script php qui permet de générer un nombre aléatoire compris entre x et y
- Coté front, créer un formulaire acceptant deux valeurs : x et y
- Envoyer le formulaire au script php et retourner le nombre aleatoire généré


- Pour générer un nombre aléatoire en PHP , vous pouvez utiliser la méthode mt_rand() ou rand()

http://php.net/manual/fr/function.mt-rand.php
*/