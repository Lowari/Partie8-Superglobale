<?php

session_start();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Partie 8 | Exercice 2 page 2</title>
</head>

<body>

    <p class="text-center">Prénom : <?= $_SESSION['lastname'] ?></p>
    <p class="text-center">Nom : <?= $_SESSION['firstname'] ?> </p>
    <p class="text-center">Age : <?= $_SESSION['age'] ?></p>

    <div class="text-center">
        <a href="index.php" class="btn btn-secondary mt-2">Retour</a>
    </div>

</body>

</html>