Consignes Exercice 3 :

I -
Cette page Web utilise des balises div afin de créer des étiquette de nom pour des informaticiens célèbres.
Dans ce défi, vous allez utiliser le JavaScript pour ajouter un élément html de type p à l'intérieur des div ayant
pour classe "name-tag".
Première étape : utilisez document.getElementsByClassName pour trouver tous les div ayant pour classe "name-tag"
, afin de les stocker dans une variable.


II -
Maintenant que vous avez stocké les éléments dans une variable,
utilisez une boucle for pour itérer dessus et ajouter à l'intérieur des div un élément de type "p" qui contiendra
le texte suivant "HELLO WORLD !".



Théorie :

Nouvelle instruction vue dans l'exercice : document.getElementByClassName('<nom de la classe>');

=> Permet de récuperer les éléments html ayant la classe spécifié.

Exemple : var divs = document.getElementsByClassName('nomClasse');

Va récuperer tout les éléments de la page ayant pour classe 'nomClasse' et les stocker dans une variable
La variable contiendra un ensemble qu'on pourra parcourir grâce à une boucle for comme un Tableau
