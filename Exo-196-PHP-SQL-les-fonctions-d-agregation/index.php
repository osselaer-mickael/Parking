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

$server = 'localhost';
$user = 'root';
$db = 'exercice196';
$password = '';

//* 1. Importez le contenu du fichier user.sql dans une nouvelle base de données.
//* 2. Utilisez un des objets de connexion que nous avons fait ensemble pour vous connecter à votre base de données.
try {
    $conn = new PDO("mysql:host=$server;dbname=$db;charset=UTF8;", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch(PDOException $exception) {
    die($exception->getMessage());
}
//* 3. Récupérez l'age minimum des utilisateurs.
$stmt = $conn->prepare("SELECT MIN(age) as minimum FROM user");

$state = $stmt->execute();
if ($state) {
    $min = $stmt->fetch();
    echo "<div class = 'utilisateur'>";
    echo $min['minimum'];
    echo "</div>";
}

// * 4. Récupérez l'âge maximum des utilisateurs.
$stmt = $conn->prepare("SELECT MAX(age) as maximum FROM user");

$state = $stmt->execute();
if ($state) {
    $max = $stmt->fetch();
    echo "<div class = 'utilisateur'>";
    echo $max['maximum'];
    echo "</div>";
}


//* 5. Récupérez le nombre total d'utilisateurs dans la table à l'aide de la fonction d'agrégation COUNT().
$stmt = $conn->prepare("SELECT COUNT(*) as number FROM user");

$state = $stmt->execute();
if ($state) {
    $utilisateur = $stmt->fetch();
    echo "<div class = 'utilisateur'>";
    echo $utilisateur['number'];
    echo "</div>";
}

//* 6. Récupérer le nombre d'utilisateurs ayant un numéro de rue plus grand ou égal à 5.
$stmt = $conn->prepare("SELECT COUNT(*) as number FROM user WHERE numero >= 5");

$state = $stmt->execute();
if ($state) {
    $utilisateur = $stmt->fetch();
    echo "<div class = 'utilisateur'>";
    echo $utilisateur['number'];
    echo "</div>";
}

//* 7. Récupérez la moyenne d'âge des utilisateurs.
$stmt = $conn->prepare("SELECT AVG(age) as moyenne_age FROM user");

$state = $stmt->execute();
if ($state) {
    $moyenne_age = $stmt->fetch();
    echo "<div class = 'utilisateur'>";
    echo $moyenne_age['moyenne_age'];
    echo "</div>";
}

//* 8. Récupérer la somme des numéros de maison des utilisateurs ( bien que ca n'ait pas de sens ).
$stmt = $conn->prepare("SELECT SUM(numero) as somme_maison FROM user");

$state = $stmt->execute();
if ($state) {
    $sommeMaison = $stmt->fetch();
    echo "<div class = 'utilisateur'>";
    echo $sommeMaison['somme_maison'];
    echo "</div>";
}

?>
</body>
</html>

