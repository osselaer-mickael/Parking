Consignes :

- Compléter la premiere ligne de code pour afficher $i tant que la variable i est inférieure à 6
- Compléter la seconde ligne de code pour afficher $i tant que la variable i est inférieure à 6
- Compléter la troisieme ligne pour créer une boucle qui va de 0 à 9
- Compléter la quatrieme ligne pour boucler sur les éléments du tableau $colors



Théorie :

En php, les boucles existent également, elles fonctionnent exactement comme en javascript, on éxécute un bloc de code
tant que la condition est vrai ou un certains nombre de fois.

Différentes instructions existent :


- while : On execute le bloc de code tant que la condition est vrai

````php
while(condition) {
    //code à executer
}
````


Exemple :

````php
$x = 1;

while($x <= 5) {
    echo "Le nombre est: $x <br>";
    $x++;
}
````


Dans cet exemple, x est défini à 1, une boucle est crée : tant que x est inférieur ou égal à 5, on éxécute le bloc de code
Dans ce bloc, on augmente x de 1 à chaque fois que le bloc est executé


- do ... while : On execute le bloc une premiere fois puis tant que la condition est vrai , on execute à nouveau le bloc

````php
do {
    //du code à executer
}
while(condition);
````


Exemple :

````php
$x = 1;

do {
    echo "Le nombre est: $x <br>";
    $x++;
} 
while ($x <= 5);
````


- for : On execute le bloc un nombre de fois défini à l'avance

````php
for(variable;test;increment) {
    //code a executer
}
````

Exemple :

````php
for ($x = 0; $x <= 10; $x++) {
    echo "x vaux: $x <br>";
}
````

- foreach : Boucle pour parcourir un tableau

````php
foreach($tableau as $valeur) {
    //code
}
````

Exemple :

````php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}
````

