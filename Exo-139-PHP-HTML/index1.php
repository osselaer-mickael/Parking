
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des élèves qui sont présents dans le tableau $students, enrobez les dans un div, un span ou un p -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php
            // TODO votre code ici
            for ($i = 0; $i < count($students); $i++) {
                echo $students [$i];
            }
       ?>
     </ul>
    <?php
        include "./index2.php";
    ?>
    <!-- Incluez le fichier index2.php ici bas de manière a obtenir la suite du code HTML. -->