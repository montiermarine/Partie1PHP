<?php
if (isset($_POST['submit'])){
setcookie("login", $_POST['login'], time() + 365*24*3600, null, null, false, true);
setcookie("password", $_POST['password'], time() + 365*24*3600, null, null, false, true); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="#">
<div class="form-group">
      <label class="login" for="login">Nom d'Utilisateur</label>
    <input class="form-control" name="login" type="text" placeholder="Nom d'Utilisateur">
    <label class="password" for="password">Mot de passe</label>
    <input class="form-control" name="password" type="password" placeholder="Mot de Passe">
    <input type="submit" name="submit" value="Go">
    </div>
</form>
<a href="exo4.php">Cookie Page</a>
<a href="exo5.php">Cookie Modifications</a>
    
</body>
</html> 