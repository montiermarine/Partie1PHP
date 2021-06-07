<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link src=https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/journal/bootstrap.min.css/>
    <title>Document</title>
</head>
<body>

<?php


if (!isset($_POST['gogo'])) {
?>  
   <form method="post" action="exo6.php">
   <div class="form-group">
         <label for="select1" class="form-label mt-4">Civilités</label>
         <select class="form-select" name="select1">
           <option>Madame</option>
           <option>Monsieur</option>
         </select>
         <label class="lastname" for="lastname">Nom</label>
       <input class="form-control" name="lastname" type="text" placeholder="nom">
       <label class="firstname" for="firstname">Prénom</label>
       <input class="form-control" name="firstname" type="text" placeholder="prenom">
       <input type="submit" value="Go" name="gogo">
       </div>
   </form>
<?php
} else {
$_POST['select1'];
$_POST['lastname'];
$_POST['firstname'];
    echo $_POST['select1'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'];
};
?>
</body>
</html>
