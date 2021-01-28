Consignes :

- Utiliser la méthode appropriée pour inclure le fichier texte.php
- Utiliser la méthode appropriée pour inclure le fichier vars.php, si le fichier n'existe pas, PHP doit s'arreter.



Théorie :

Une fonctionnalité **trés important de PHP** est la possibilité d'inclure des fichiers de scripts dans d'autres fichiers.

Il existe deux méthodes pour accomplir cela : "include" et "require"

- include

La méthode include ajoute le contenu du script inclu au script éxécuté, si le fichier inclu n'existe pas, PHP produira
une erreur de type "warning" , cette erreur n'entraine pas l'arret du script.

Syntaxe :

include "chemin/vers/fichier.php";

Exemple :

truc.php contient : echo "bidule<br><br>";

include "truc.php";

echo "machin";

Sur la page, le résultat sera bidule<br><br>machin


- require

La méthode require fonctionne de la même façon qu'include mais si le fichier inclu n'est pas trouvé, PHP va produire
 une erreur de type "compile_error" , le script est alors arrété.

Pour cette raison, je vous recommande d'utiliser systématiquement require pour inclure des fichiers, cela vous permet de
  vérifier facilement que vous avez bien spécifié l'emplacement du fichier à inclure et évite des problemes par la suite.


