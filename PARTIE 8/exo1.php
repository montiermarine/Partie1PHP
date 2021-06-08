<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$adressIp = $_SERVER['REMOTE_ADDR'];
$nameServer = $_SERVER['SERVER_NAME'];
?>
<p> Votre nom d'utilisateur est : <?= $userAgent ?><br/>
Votre adresse IP : <?= $adressIp ?> <br/>
Votre nom de server : <?= $nameServer ?> 
</p>


    
</body>
</html>
