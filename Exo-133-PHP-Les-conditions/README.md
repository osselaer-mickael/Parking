Consignes :

- Compléter la premiere ligne de code pour verifier que a est supérieur à b ( hello world sera affiché )
- Compléter la seconde ligne de code pour verifier que a est différent de b ( hello world2 sera affiché )
- Compléter la troisieme ligne de code pour afficher Oui si a est égal à b ou non si ce n'est pas le cas
- Compléter la quatrieme ligne de code pour afficher "1" si a est égal à b, afficher "2" si a est supérieur à b sinon afficher "3"
- Compléter la 5eme ligne pour afficher "Hello" si la variable color vaux "red" ou "welcome" si la variable color vaux "green"
- Ajouter ensuite un bloc permettant d'éxécuter du code si la variable color ne vaux ni "red" ou "green"


Théorie :

En php, comme en javascript, vous pouvez écrire des blocs conditionels en utilisant if,else,elseif,switch

La bonne nouvelle : Dans les deux langages, on écrit ces blocs exactement de la même façon !

La mauvaise nouvelle : Pas de mauvaises nouvelles !


- If :

Execute du code si une condition est vrai :

if($x==1)
{
//Du code executé si la condition est vérifiée
}

Dans cet exemple si la variable x vaux 1, le code du bloc sera éxécuté


- if else :

Execute du code si une condition est vrai, execute le code contenu dans le bloc else si la condition est fausse

if($x==2)
{
//Du code executé si la variable x vaux 2
}
else
{
//Du code executé si la variable x ne vaux pas 2
}


- if elseif else :

execute du code si une condition est vrai, execute un autre bloc de code si la condition elseif est vrai, sinon execute
le code contenu dans le bloc else

if($x==1)
{
//Du code executé si x vaux 1
}
elseif($x==3)
{
//Du code executé si x vaux 3
}
else
{
//Du code executé si x ne vaux ni 1 ni 3
}


- switch :

Comme en javascript, un switch execute des blocs de code en fonction de une ou plusieurs conditions

$x=5;
switch($x)
{
case"1":
//du code executé si x vaux 1
break;
case"2":
//du code executé si x vaux 2
break;
case"machin":
//du code executé si x vaux machin
break;
case"5":
//du code executé si x vaux 5
break;
default:
//du code executé si aucune autre conditions n'est remplie
}


