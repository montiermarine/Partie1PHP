<?php
session_start();
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
<h1>Bonjour,<?= $_SESSION['lastname'].' '.$_SESSION['firstname'] ?> </h1>
<p>Je me souviens, tu as <?= $_SESSION['age'] ?> ans.</p>
    
</body>
</html>
