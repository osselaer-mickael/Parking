<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exo169</title>
</head>
<body>

    <?php

    if(isset($_POST['mail']) && isset($_POST['montext'])) {
        mail($_POST['mail'], "objet", $_POST['montext'])
        ?>
    <div class="success"> les informations ont bien été envoyées, merci! </div> <?php
    }
    ?>


    <form method="post" action="index.php">
        <label for="email"></label>
        <input type="email" name="mail" id="email">
        <br>
        <label for="text"></label>
        <textarea name="montext" id="text" cols="30" rows="10" minlength="30" maxlength="500"></textarea>
        <br>
        <button type="submit" value="Envoyer" name="submit">Envoyer</button>
    </form>

</body>
</html>