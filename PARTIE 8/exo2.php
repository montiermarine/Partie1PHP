<?php
session_start();
$_SESSION['lastname'] = "MONTIER";
$_SESSION['firstname'] = "Marine";
$_SESSION['age'] = 29;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
<h1>Bonjour, <?= $_SESSION['lastname'].' '.$_SESSION['firstname'] ?> </h1>
<p>Félicitations ! Tu as <?= $_SESSION['age'] ?> ans.
Tu peux choisir de changer de page : <br/>
<a href="exercice2.php">Lien Exercice2 nouvelle page</a>
</p>
    
</body>
</html>