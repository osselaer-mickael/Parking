Consignes :

- Créer la variable $texte et assigner la valeur "Du texte est stocké"

- Ecrire à la suite un echo affchant le contenu de la variable $texte

- Declarer une seconde variable appelée y ayant pour valeur 30

- Afficher dans un echo le contenu de la variable y à l'intérieur ( à la fin du texte ) du texte suivant "y vaux "

- Creer à la suite deux variables : $m et $n, leur assigner respectivement les valeurs 5 et 7 , puis afficher l'expression $m + $n en utilisant echo



Théorie :

En php, vous pouvez déclarer et utiliser des variables, les variables comme en Javascript stocke des données, des valeurs.

Pour indiquer à php que nous souhaitons déclarer une variable, on utilise le signe "$"

Exemple :

````php
    $data = "du texte";
    $data = 5;
````


Comme en javascript, lorsque vous assignez du texte à une variable, vous utiliserez " ", lorsque vous déclarez un nombre,
ceci n'est pas nécessaire.


En php , une variable ne peut pas démarrer par un nombre, ainsi $16f = "avion" retournera une erreur mais $f16 = "avion"
fonctionnera.

Pour rappel, les noms de variables sont sensibles à la casse : $variable est différent de $VARIABLE


- Afficher le contenu d'une variable :

 Pour afficher le contenu d'une variable, vous pouvez utiliser l'instruction "echo", exemple :

````php
    $texte = "machin";
    echo $texte;
    echo "Du texte normal, ensuite affichage de la variable $texte";
    echo "Du texte normal, puis affichage de la variable " . $texte . " et on continue ...";
````
 


En php , nous utilisons les "." pour séparer les chaines de caracteres des variables, en javacript on utilise "+", les symboles
sont différents mais la logique reste la même.


- Portée des variables :

Comme en javascript, les variables en php peuvent avoir une portée globale ( disponible en dehors des fonctions ) ou locale
( disponible uniquement à l'intérieur d'une fonction )

Pour modifier la portée d'une variable, il est également possible d'utiliser le mot clef "global", exemple :

````php
$x = 5;

function machin() {
    global $x;
    echo $x;
}
````

La variable $x sera accessible depuis la fonction machin car le mot clef global a été utilisé.


- Variables Statique :

Le mot clef static suivi d'une variable permet de déclarer une variable dont la valeur ne sera pas réinitialisé, exemple :

````php
function machin() {
    static $x = 0;
    echo $x;
    $x++;
}
````

Dans cette fonction, la variable x va valoir 0 lors du premier appel de la fonction puis elle va être incrémentée de 1
A la procaine execution de la fonction, $x vaudra 1 car la variable va conserver sa derniere valeur connue.


