<?php



function issetPostParams(string ...$params): bool {
    foreach ($params as $param) {
        if (!isset($_POST[$param])) {
            return false;
        }
    }
}

if(issetPostParams('nom', 'prenom', 'rue', 'numero', 'cp', 'ville', 'pays', 'mail')) {
    try {
        $server = "localhost";
        $user = "root";
        $db = "table_test_php";
        $password = "";

        $conn = new PDO("mysql:host=$server;dbname=$db;charset=utf8, $user, $password");

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $rue = $_POST['rue'];
        $numero = $_POST['numero'];
        $cp = $_POST['ville'];
        $ville = $_POST['ville'];
        $pays = $_POST['pays'];
        $mail = $_POST['mail'];

        $sql = "INSERT INTO user(nom, prenom, rue, numero, cp, ville, pays, mail) 
                VALUES ('$nom', '$prenom', '$rue', '$numero', '$cp', '$ville', '$pays', '$mail') 
                ";
    }


    catch (PDOException $e) {
        echo "erreur de connexion :" . $e->getMessage();
    }
}
else {
    header('location: index.php');
}


/**
 * Reprenez le code de l'exercice précédent et transformez vos requêtes pour utiliser les requêtes préparées
 * la méthode de bind du paramètre et du choix du marqueur de données est à votre convenance.
 */