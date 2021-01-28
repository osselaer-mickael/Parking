Consignes :

- Compléter le code fourni pour afficher la longueur de la chaine de caracteres contenant le mot "google"

- Compléter le code fourni pour afficher la chaine de caracteres "anticonstitutionellement" à l'envers

- Et si vous testiez également avec votre prénom ?

- Compléter le code fourni pour remplacer le mot "ok" par "non" dans la chaine "ok google!"





Théorie :

Les Strings ou chaines de caracteres en français sont des suites de lettres ( comme en javascript )

Comme en javascript, PHP offre des méthodes natives pour manipuler les chaines de caracteres.


- Retourner la longueur d'une chaine de caractere : strlen

Exemple :

echo strlen("abc");

Retournera 3 car la chaine "abc" contient 3 caracteres


- Compter le nombre de mots dan une chaine de caracteres : str_word_count

Exemple :

echo str_word_count("Hello world!");

Retournera 2 car il y a deux mots dans cette chaine de caracteres.



- Inverser une chaine de caracteres : strrev()

Exemple :

echo strrev("Hello world!");

Retournera !dlrow olleH



- Chercher la position d'un mot dans une chaine de caracteres : strpos()

Si Une occurence est trouvée, la méthode retournera la position du premier caractere trouvé dans la chaine, sinon elle
retournera FALSE

Exemple :

echo strpos("Hello world!", "world");

Retournera 6 car le mot world commence au 6eme caractere

A savoir : Comme en javascript, le premier caractere d'une chaine commence à 0



- Remplacer un texte par un autre dans une chaine : str_replace()

Exemple :

echo str_replace("world", "Dolly", "Hello world!");

Retournera Hello Dolly!

Le mot world est remplaçé par le mot Dolly


















