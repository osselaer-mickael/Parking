<?php
    $server = 'localhost';
    $bdd = 'exercice194';
    $user = 'root';
    $password = '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php

try {
    $conn = new PDO("mysql:host=$server;dbname=$bdd;charset=utf8", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $stmt = $conn->prepare("SELECT * FROM user ");

    $state = $stmt->execute();
    if ($state) {
        $result = $stmt->fetchAll();
        foreach ($result as $ligne) {
            echo "<div class='utilisateur'>";
            echo "<p>" . $ligne['nom'] ."</p>";
            echo "<p>" . $ligne['prenom'] . "</p>";
            echo "<p>" . $ligne['rue'] . "</p>";
            echo "<p>" . $ligne['numero'] . "</p>";
            echo "<p>" . $ligne['code_postal'] . "</p>";
            echo "<p>" . $ligne['ville'] . "</p>";
            echo "<p>" . $ligne['pays'] . "</p>";
            echo "<p>" . $ligne['mail'] . "</p>";

            echo "</div>";
        }
    }

    $stmt = $conn->prepare("SELECT * FROM user order by id DESC ");

    $state = $stmt->execute();
    if ($state) {
        $result = $stmt->fetchAll();
        foreach ($result as $ligne) {
            echo "<div class='utilisateur2'>";
            echo "<p>" . $ligne['nom'] ."</p>";
            echo "<p>" . $ligne['prenom'] . "</p>";
            echo "<p>" . $ligne['rue'] . "</p>";
            echo "<p>" . $ligne['numero'] . "</p>";
            echo "<p>" . $ligne['code_postal'] . "</p>";
            echo "<p>" . $ligne['ville'] . "</p>";
            echo "<p>" . $ligne['pays'] . "</p>";
            echo "<p>" . $ligne['mail'] . "</p>";

            echo "</div>";
        }
    }
    $stmt = $conn->prepare("SELECT nom, prenom FROM user");

    $state = $stmt->execute();
    if ($state) {
        $result = $stmt->fetchAll();
        foreach ($result as $ligne) {
            echo "<div class='utilisateur3'>";
            echo "<p>" . $ligne['nom'] ."</p>";
            echo "<p>" . $ligne['prenom'] . "</p>"; 
            echo "</div>";
        }
    }
}
    catch (PDOException  $exception) {
        echo $exception->getMessage();
    }
?>
</body>
</html>
<?php


