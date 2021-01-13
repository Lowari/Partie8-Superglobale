<?php

if (isset($_POST['login'], $_POST['password'])) {
    setcookie('login', $_POST['login']);
    setcookie('password', $_POST['password']);
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Partie 8 | Exercice 5</title>
</head>

<body>

    <div class="container text-center w-25 mt-5">

        <form class="text-center" action="index.php" method="POST">

            <div class="mb-3">
                <label for="login" class="form-label">Identifiant</label>
                <input type="text" class="form-control" id="login" name="login" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de Passe</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>

        </form>

        <?php

        if (isset($_COOKIE['login'])) {
            $login = $_COOKIE['login'];
        ?>
            <p class="mt-2">Identifiant : <?= $login ?></p>
        <?php
        } else { ?>
            <p class="fst-italic text-danger">Vous n'avez pas renseigner votre identifiant</p>
        <?php
        }
        if (isset($_COOKIE['password'])) {
            $password = $_COOKIE['password'];
        ?>
            <p>Mot de Passe : <?= $password ?></p>
        <?php
        } else { ?>
            <p class="fst-italic text-danger">Vous n'avez pas renseigner votre mot de passe</p>
        <?php
        }
        ?>

    </div>

</body>

</html>