<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo complet lecture SQL.</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<?php

//**Importez le script colyseum.sql dans une nouvelle base de données avant de commencer.
//Tous les résultats devront être affichés dans une page index.php.**
//**Modifiez le code CSS selon vos besoins, n'oubliez pas de l'importer dans votre code HTML**
$server = 'localhost';
$user = 'root';
$db = 'exerccie197';
$password = '';
try {
    $conn = new PDO("mysql:host=$server;dbname=$db;charset=UTF8;", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch(PDOException $exception) {
    die($exception->getMessage());
}

##Exercice 1
//Afficher tous les clients.

$stmt = $conn->prepare("SELECT * FROM clients");
$state = $stmt->execute();
if ($state) {
    $clients = $stmt->fetchAll();
    echo "<pre>";
    print_r($clients);
    echo "</pre>";
}

##Exercice 2
//Afficher tous les types de spectacles possibles.
$stmt = $conn->prepare("SELECT * FROM showtype");
$state = $stmt->execute();
if ($state) {
    $spectacle = $stmt->fetchAll();
    foreach ($spectacle as $type) {
        echo "<div>";
        echo $type['type'];
        echo "</div>";
    }
}

##Exercice 3
//Afficher les 20 premiers clients.

$stmt = $conn->prepare("SELECT * FROM clients LIMIT 20");
$state = $stmt->execute();
if ($state) {
    $clients = $stmt->fetchAll();
    foreach ($clients as $client) {
        echo "<div class = 'notAllCustomers'>";
        echo $client['firstName'];
        echo "</div>";
    }
}

##Exercice 4
//N'afficher que les clients possédant une carte de fidélité.

$stmt = $conn->prepare("SELECT * FROM clients WHERE card = 1");
$state = $stmt->execute();
if ($state) {
    $clients = $stmt->fetchAll();
    foreach ($clients as $client) {
        echo "<div class = 'yesCard'>";
        echo $clients;
        echo "</div>";
    }
}

##Exercice 5
//Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".
//Les afficher comme ceci :
//Nom : *Nom du client*
//Prénom : *Prénom du client*
//Trier les noms par ordre alphabétique.

$stmt = $conn->prepare("SELECT lastName, firstName FROM clients WHERE lastName LIKE 'M%' ORDER BY lastName ASC");
$notAllCustomers = $stmt->execute();
if ($notAllCustomers) {
    $clients = $stmt->fetchAll();
    foreach ($clients as $client) {
        echo "<div class = 'yesCard'>";
        echo $client['lastName'] . ' ' . $client['firstName'];
        echo "</div>";
    }
}

##Exercice 6
//Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique.
//Afficher les résultat comme ceci :
//*Spectacle* par *artiste*, le *date* à *heure*.

$stmt = $conn->prepare("SELECT title, performer, date, startTime FROM shows ORDER BY title ASC");
$state = $stmt->execute();
if ($state) {
    $shows = $stmt->fetchAll();
    foreach ($shows as $show) {
        echo "<div class = 'showtime'>";
        echo $show['title'] . ' ' . $show['performer']. ' ' . $show['date']. ' ' . $show['startTime'];
        echo "</div>";
    }
}

##Exercice 7
//Afficher tous les clients comme ceci :
//Nom : *Nom de famille du client*
//Prénom : *Prénom du client*
//Date de naissance : *Date de naissance du client*
//Carte de fidélité : *Oui (Si le client en possède une) ou Non (s'il n'en possède pas)*
//Numéro de carte : *Numéro de la carte fidélité du client s'il en possède une.*

$stmt = $conn->prepare("SELECT lastName, firstName, birthDate, card, cardNumber FROM clients");
$state = $stmt->execute();
if ($state) {
    $clients = $stmt->fetchAll();
    foreach ($clients as $client) {
        echo "<div class = 'showtime'>";
        echo "Nom :" . $client['lastName'] . "<br>";
        echo "Prénom :" . $client['firstName'] . "<br>";
        echo "Date de naissance :" . $client['birthDate'] . "<br>";
        if($client['card'] === 1) {
            echo "Carte de fidélité : OUI" . "<br>";
            echo $client['cardNumber'];
        }
        else {
            echo "Carte de fidélité : NON";
        }

        echo "</div>";
    }
}







?>

</body>
</html>
