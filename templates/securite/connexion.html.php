<?php
    if(isset($_SESSION[KEY_ERRORS]))
    {
      $errors= $_SESSION[KEY_ERRORS];
      unset($_SESSION[KEY_ERRORS]);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Page de connexion.</title>
  <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."connexion.css"?>">
</head>
<body>
    <div class="header">
      <img src="" alt="">
        <h1>LE PLAISIR DE JOUER</h1>
    </div>
  <form method="POST" action="<?=WEBROOT?>">
    <h1>Se connecter</h1>
    
    <div class="inputs">
        <input type="hidden" name="controller" value="securite">
        <input type="hidden" name="action" value="connexion"> 
      <?php if (isset($errors['connexion'])):?>
        <p style="color:red"><?= $errors['connexion'];?></p>
      <?php endif?>
      <input id="login" type="text" placeholder="Login" name="login">
      <span id="error_login"></span>
      <?php if (isset($errors['login'])): ?>
        <p style="color:black"><?= $errors['login'];?></p>
      <?php endif ?>
      <input id="password" type="password" placeholder="Mot de passe" name="password">
      <span id="error_password"></span>
      <?php if (isset($errors['password'])): ?>
        <p style="color:black"><?= $errors['password'];?></p>
      <?php endif ?>
    </div>
    <p class="inscription">S'inscrire pour <span><a href="<?= WEBROOT."?controller=user&action=inscription"?>">JOUER.</a></span></p>
    <div align="center">
      <input type="submit" id="submit" value="Se connecter">
    </div>
  </form>
  <script src="<?=WEB_PUBLIC."js".DIRECTORY_SEPARATOR."script.js"?>"></script>
</body>
</html>  