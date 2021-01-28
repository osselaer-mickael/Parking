Consignes :

Vous allez écrire votre premier code PHP !

Complétez le code pour afficher votre premier Hello World

Uploadez le script php via ftp puis lancez la page dans le navigateur en utilisant l'url appropriée



Théorie :

En php, pour écrire du texte qui sera affiché à l'utilisateur, nous utilisons l'instruction echo

Exemple :

echo "Bonjour !";


Comme en javascript, chaque ligne d'instruction se termine par un ;
ATTENTION : Il ne faut JAMAIS oublier le ; à la fin de chaque ligne d'instruction !


- Les commentaires :

Comme en javascript, il est possible d'écrire des commentaires dans votre code php, les commentaires sont ignorés
par l'interpréteur et ne seront donc pas éxécutés.

Exemple :

//Un commentaire sur une ligne
# Une autre façon d'écrire un commentaire sur une ligne
/* Un commentaire sur plusieurs lignes,
en plus on l'écrit exactement comme en Javascript ! */


- La casse :

 En PHP, les méthodes, classes et fonctions ne sont pas sensibles à la casse, conrairement à javascript
 On peut donc écrire :

 ECHO "machin";
 Echo "chose";
 echO "truc";

 Ces trois instructions produiront le même résultat, je vous recommande d'écrire les méthodes en minuscules pour faciliter
 la lecture de votre code.

 ATTENTION : Les variables sont sensibles à la casse !!!
 Une variable en PHP s'écrit de cette façon : $chose = "valeur";
 Si j'écrit $CHOSE = "truc"; alors ce sont deux variables différentes.

 Pour la même raison, je vous recommande d'écrire vos variables en minuscules, pour les variables plus longues, mélangez
 minuscules et Majuscules , exemple :

 $maVariable = "valeur";

 $maVariableAvecUnNomVraimentTresLong = "valeur";

 Mettez le premier mot en minuscule puis chaque premiere lettre des mots suivants en majuscules, c'est une façon trés
 élégante d'écrire votre code.




