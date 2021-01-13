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
    <title>Partie 8 |Exercice 5</title>
</head>

<body>

    <div class="text-center container">

        <?php

        if (isset($_COOKIE['login'])) {
            $login = $_COOKIE['login'];
        ?>
            <p class="mt-5">Identifiant : <?= $login ?></p>
        <?php
        } else { ?>
            <p class="fst-italic text-danger mt-5">Vous n'avez pas renseigner votre identifiant</p>
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

        <a href="../exo3/index.php" class="btn btn-secondary">Retour</a>

    </div>

</body>

</html>