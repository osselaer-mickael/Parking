<?php
/**
 * 1. Le dossier SQL contient l'export de ma table user.
 * 2. Trouvez comment importer cette table dans une des bases de données que vous avez créées, si vous le souhaitez vous pouvez en créer une nouvelle pour cet exercice.
 * 3. Assurez vous que les données soient bien présentes dans la table.
 * 4. Créez votre objet de connexion à la base de données comme nous l'avons vu
 * 5. Insérez un nouvel utilisateur dans la base de données user
 * 6. Modifiez cet utilisateur directement après avoir envoyé les données ( on imagine que vous vous êtes trompé )
 */
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'exercice192';


try {
    $conn = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user , $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $nom = 'osselaer';
    $prenom = 'mickael';
    $rue = 'verrerie noire';
    $numero = 2;
    $code_postal = 59186;
    $ville = 'anor';
    $pays = 'france';
    $mail = 'mcaosselaer@gmal.com';


    $stm = $conn->prepare("
        INSERT INTO  user (nom, prenom, rue, numero, code_postal, ville, pays, mail)
        VALUE (?, ?, ?, ?, ?, ? , ?, ?)
    ");


    $stm->bindValue(1, $nom);
    $stm->bindValue(2, $prenom);
    $stm->bindValue(3, $rue);
    $stm->bindValue(4, $numero, PDO::PARAM_INT);
    $stm->bindValue(5, $code_postal, PDO::PARAM_INT);
    $stm->bindValue(6, $ville);
    $stm->bindValue(7, $pays);
    $stm->bindValue(8, $mail);

    $stm->execute();

    $id = $conn->lastInsertId();
    $rue = "verrerie blanche";

    $stm = $db->prepare("
    UPDATE user SET rue = :rue WHERE id = :id 
    ");

    $stm->bindParam(':rue',$rue);
    $stm->execute();
}


catch(PDOException $e) {
    echo "une erreur est survenu; " .$e->getMessage() . "<br>";
}












/**
 * Théorie
 * --------
 * Pour obtenir l'ID du dernier élément inséré en base de données, vous pouvez utiliser la méthode: $bdd->lastInsertId()
 *
 * $result = $bdd->execute();
 * if($result) {
 *     $id = $bdd->lastInsertId();
 * }
 */