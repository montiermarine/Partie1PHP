<?php

$age = 33;
$gender = "Femme";
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
        if ($age >= 18 && $gender == "Femme") {
            echo "Vous êtes une Femme et vous êtes Majeure";
        } else if ($age > 18 && $gender == "Femme") {
            echo "Vous êtes une Femme et vous êtes Mineure";
        } else if ($age >= 18 && $gender == "Homme") {
            echo "Vous êtes un Homme et vous êtes Majeure";
        } else {
            echo "Vous êtes un Homme et vous êtes Mineure";
        }
        ?>
    </p>
</body>

</html>