<?php

/**
 * 1. Créez un cookie de nom username ayant pour valeur votre prénom
 * 2. Affichez la valeur de ce cookie avec un simple echo.
 */
// TODO Votre code ici.

//setcookie('username', 'mickael');
//echo $_COOKIE ['username'] . "<br>";
//echo $_COOKIE ['mickael'] . "<br>";




/**
 * 3. Commentez le code du point 1 et 2
 * 4. Créez un cookie de nom username ayant pour valeur votre nom et expirant dans 2 jours et 2h, le domaine doit être localhost ( votre machine )
 * 5. Créez une page bio.php et tentez d'afficher le cookie username sur cette page.
 */
// TODO Votre code ici.

setcookie('username', 'mickael',time() + 93400, '/', 'localhost', true, true);


