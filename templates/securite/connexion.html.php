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
    <img src="<?= WEBROOT."img".DIRECTORY_SEPARATOR."logo.png"?>"alt="">
        <h1>LE PLAISIR DE JOUER</h1>
    </div>
    <div class="container">
        <div class="loginform">
            <h1>login form</h1>
        </div>
        <form class="form" id="form" method="POST" action="<?=WEBROOT?>" onSubmit="return valider()">
        <input type="hidden" name="controller" value="securite">
        <input type="hidden" name="action" value="connexion"> 
        <?php if (isset($errors['connexion'])):?>
        <p style="color:red"><?= $errors['connexion'];?></p>
      <?php endif?>
            <div class="form-control">
                <label for="login">Login</label>
                <input type="text" id="login" name="login" placeholder="Login"> 

                <small></small> 
                <?php if (isset($errors['login'])): ?>
        <p style="color:black"><?= $errors['login'];?></p>
      <?php endif ?>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password">    
                <small></small>
                <?php if (isset($errors['password'])): ?>
        <p style="color:black"><?= $errors['password'];?></p>
      <?php endif ?>
            </div>
            <div class="connected">
                <input type="submit" value="Connexion">
                <p class="inscription"><span><a href="<?= WEBROOT."?controller=securite&action=inscription"?>">S'inscrire pour jouer?</a></span></p>
            </div>
            
        </form>
    </div>
  <script src="<?=WEB_PUBLIC."js".DIRECTORY_SEPARATOR."script.js"?>"></script>
</body>
</html>  