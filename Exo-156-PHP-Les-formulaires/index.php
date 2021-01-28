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

    <form method="post" action="formulair.php">
        <div>
            <label for="id__username">Nom d'utilisateur</label>
            <input type="text" name="username" id="id__username">
        </div>
        <div>
            <label for="id__age">Votre age</label>
            <input type="number" name="age" id="id__age">
        </div>
        <div>
            <label for="id__password">Mot de passe</label>
            <input type="password" name="password" id="id__password">
        </div>
        <div>
            <label for="id__password__repeat">Répéter votre mot de passe</label>
            <input type="password" name="password__repeat" id="id__password__repeat">
        </div>
        <div>
            <input type="submit" value="envoyer" name="submit">
        </div>
    </form>

</body>
</html>
