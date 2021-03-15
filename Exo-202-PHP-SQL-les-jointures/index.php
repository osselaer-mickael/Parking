<?php

/**
 * 1. Commencez par importer le script SQL disponible dans le dossier SQL.
 * 2. Connectez vous à la base de données blog.
 */

$server = 'localhost';
$user = 'root';
$db = 'exercice202';
$password = '';
try {
    $conn = new PDO("mysql:host=$server;dbname=$db;charset=UTF8;", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch(PDOException $exception) {
    die($exception->getMessage());
}


/**
 * 3. Sans utiliser les alias, effectuez une jointure de type INNER JOIN de manière à récupérer :
 *   - Les articles :
 *     * id
 *     * titre
 *     * contenu
 *     * le nom de la catégorie ( pas l'id, le nom en provenance de la table Categorie ).
 *
 * A l'aide d'une boucle, affichez chaque ligne du tableau de résultat.
 */

// TODO Votre code ici.

$stmt = $conn->prepare("
    SELECT article.id, article.title, article.content, categorie.name
    FROM article
    INNER JOIN categorie on article.category_fk = categorie.id
    ");
$state = $stmt->execute();

if ($state) {
    $articles = $stmt->fetchAll();
    echo "<pre>";
    print_r($articles);
    echo "</pre>";
}

/**
 * 4. Réalisez la même chose que le point 3 en utilisant un maximum d'alias.
 */

// TODO Votre code ici.
$stmt = $conn->prepare("
    SELECT article.id AS i, article.title AS t, article.content AS c, categorie.name AS n 
    FROM article
    INNER JOIN categorie on article.category_fk = categorie.id
    ");
$state = $stmt->execute();

if ($state) {
    $articles = $stmt->fetchAll();
    echo "<pre>";
    print_r($articles);
    echo "</pre>";
}


/**
 * 5. Ajoutez un utilisateur dans la table utilisateur.
 *    Ajoutez des commentaires et liez un utilisateur au commentaire.
 *    Avec un LEFT JOIN, affichez tous les commentaires et liez le nom et le prénom de l'utilisateur ayant écris le comentaire.
 */

// TODO Votre code ici.
$sql = "
    INSERT INTO utilisateur (firstName, lastName, mail, password) 
    VALUES('Mickael', 'Osselaer', 'mcaosselaer@gmail.com', 'kakakaka') 
    ";

$stmt = $conn->prepare($sql);
$stmt->execute();