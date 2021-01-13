<?php

session_start();
$_SESSION["lastname"] = "Julien";
$_SESSION["firstname"] = "Freret";
$_SESSION["age"] = 25;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Partie 8 | Exercice 2</title>
</head>

<body>


    <div class="text-center">
        <a href="page2.php" class="btn btn-primary mt-5">Lien vers page 2</a>
    </div>


</body>

</html>