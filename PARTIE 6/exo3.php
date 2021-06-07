<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

 if(isset($_GET['startDate'])){
    $startDate = $_GET['startDate'];
 }
 if (isset($_GET['endDate'])){
     $endDate = $_GET['endDate'];
 }
?>
  <p> <?= $startDate.' '.$endDate ?></p>  
</body>
</html>
