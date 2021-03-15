<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

## Préparation
//* Vous allez réaliser votre premier CRUD en PHP : **CRUD** est l'acronyme de **Create Read Update Delete**
//* Tout d'abord, vous allez vous connecter à une nouvelle base de données conçue pour cet exo
//* A l'aide de PhpMyAdmin, créez une table eleves ( ou eleve au singulier, à vous de choisir, mais gardez votre propre convention )
//Les champs que cette table doit contenir sont:
//  - id
//  - nom
//  - prenom
//  - age
//Choisissez les types de données adéquats.

## CREATE
//Créez une fonction qui ajoute un élève par la table ***eleves***, cette fonction prendra en parametre $nom,$prenom, $age
//A l'intérieur de cette fonction, vous allez executer la requete sql adéquate qui va insérer un nouvel enregistrement en utilisant les parametres de votre fonction comme valeurs.
function getDb() {
    $server = 'localhost';
    $user = 'root';
    $db = 'exercice198';
    $password = '';
    try {
        $conn = new PDO("mysql:host=$server;dbname=$db;charset=UTF8;", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    catch(PDOException $exception) {
        die($exception->getMessage());
    }
    return $conn;
}

function newStudent($nom, $prenom, $age)
{
    $conn = getDb();
    $sql = "INSERT INTO eleves (nom, prenom, age)
             VALUES (:nom, :prenom, :age)";
    $request = $conn->prepare($sql);
    $request->bindParam(":nom", $nom);
    $request->bindParam(":prenom", $prenom);
    $request->bindParam(":age", $age, PDO::PARAM_INT);
    return $request->execute();
}

$result = newStudent("Osselaer", "Mickael", 29);

if($result) {
    echo "mon nouvel éléve est bien ajouté" . "<br>";
}
else {
    echo "une erreur est survenue" . "<br>";
}

## READ
//Créez une fonction qui va selectionner tous les enregistrements de la table ***eleves*** et retourner le resultat
//Vous allez faire un appel à cette fonction pour afficher la liste des élèves sur la page
//Cette fonction retourne soit un tableau PHP contenant toutes les informations, soit les informations déjà mises en forme prêtes à être affichées.

function getStudents() {
    $conn = getDb();
    $request = $conn->prepare("SELECT * FROM eleves");
    $request->execute();
    return $request->fetchAll();
}

$callResult = getStudents();
foreach ($callResult as $eleve) {
    echo $eleve['nom'] . " ";
    echo $eleve['prenom'] . " ";
    echo $eleve['age'] . "<br>";
}

## UPDATE
//Créez une autre fonction permettant de mettre à jour un élève, cette fonction prendra en parametre $prenom,$nom,$age
//et $idEleve, elle mettra à jour l'élève ayant pour id $idEleve en utilisant l'instruction SQL adéquate.

function updateStudent($nom, $prenom, $age, $idEleve) {
    $conn = getDb();
    $sql = "UPDATE eleves SET nom=:nom, prenom=:prenom, age=:age WHERE id=:id";
    $request = $conn->prepare($sql);
    $request->bindParam(":nom", $nom);
    $request->bindParam(":prenom", $prenom);
    $request->bindParam(":age", $age, PDO::PARAM_INT);
    $request->bindParam(':id', $idEleve, PDO::PARAM_INT);
    return $request->execute();
}

$result = updateStudent("Doe", "Rémi", 18, 2);
if($result) {
    echo "la modification a bien été effectuer :" . "<br>";
}
else {
    echo "une erreur est survenue" . "<br>";
}

## DELETE
//Créez une autre fonction permettant de supprimer un élève, cette fonction prendra en parametre $idEleve et permettra
//de supprimer l'enregistrement ayant pour id $idEleve en utilisant l'instruction SQL adéquate.

function deleteStudents($idEleve) {
    $conn = getDb();
    $sql = "DELETE FROM eleves WHERE id=:id";
    $request = $conn->prepare($sql);
    $request->bindParam(":id", $idEleve);
    return $request->execute();
}

$result = deleteStudents(3);
if($result) {
    echo "l'éléve a bien été supprimé :" . "<br>";
}
else {
    echo "une erreur est survenue :" . "<br>";
}



?>
</body>
</html>