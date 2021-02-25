<?php

/**
 * 1. Complétez $from et $to ( évitez d'utiliser la même adresse mail )
 * 2. Envoyez un mail avec ces informations, si certaines choses manquent, complétez
 * 3. Déployez sur votre serveur et testez !
 */

$from = 'mcaosselaer@gmail.com';
$to = 'nv.osselaer@gmail.com';
$message = 'Hello World, sending a simple mail !';
// TODO Votre code ici.

//envoi du mail
mail($to, $from, $message);

/**
 * 4. Commentez le code précédent, mais gardez les variables $from et $to
 * 5. Définissez un message long d'au moins 120 caractères au choix.
 * 6. Faites en sorte de couper la phrase puisqu'elle fera plus de 70 caractères
 * 7. Envoyez le mail.
 * 8. En cas d'erreur, affichez le message: Une erreur est survenue lors de l'envoi du mail
 * 9. En cas de succès, affichez le message: Le message a bien été envoyé. Merci !
 * 10. Faites en sorte que chaque message envoyé soit enregistré dans un fichier 'mails.txt'
 *     Les valeurs à enregistrer SUR UNE SEULE LIGNE sont: $message, $to
 *     N'écrasez pas les valeurs déjà existantes ( s'il y en a ).
 */
// TODO Votre code ici.


$message2 = "Qu'est-ce que Lorem Ipsum? Lorem Ipsum est simplement un texte factice de l'industrie de l'impression et de
 la composition. Lorem Ipsum est le texte factice standard de l'industrie depuis les années 1500, quand un imprimeur 
 inconnu a pris une galère de caractèreset l'a brouillée pour en faire un livre de spécimens. Il a survécu non seulement
  cinq siècles, mais aussi le saut dans la composition électronique, demeurant essentiellement inchangé. Il a été
  popularisé dans les années 1960 avec la sortie de feuilles Letraset contenant des passages du Lorem Ipsum, et plus 
  récemment avec un logiciel de publication assistée par ordinateur comme Aldus PageMaker comprenant des versions de Lorem Ipsum.";

$message2 = wordwrap($message2, 70, "\r\n");
mail($to, $from, $message2);