<?php require_once(PATH_VIEWS.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."header.inc.html.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."liste.css"?>">
  <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."admin.css"?>">

    <title>Document</title>
</head>
<body>
          <div class="contain">
                  <div>
                      <?php require_once(PATH_VIEWS.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."menu.inc.html.php");?>
                  </div>
                  <div class="info">
                  <div class="inscription">
        <div class="left">
            <div class="text">
                <h1>S'inscrire</h1>
                <p>Pour tester votre niveau de culture génerale</p>
            </div>
            <form action="<?=WEBROOT?>" method="POST" class="form" id="form" onSubmit="return valider()">
            <input type="hidden" name="controller" value="user">
            <input type="hidden" name="action" value="push">
            <div class="form-control">
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom"id="prenom" placeholder="Aaaaa">
                <small></small>
            </div>
            <div class="form-control">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" placeholder="BBBB">
                <small></small>
            </div>
            <div class="form-control">
                <label for="login">Login</label>
                <input type="text" name="login" id="login" placeholder="aabaab">
                <small></small>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter password">
                <small></small>
            </div>
            <div class="form-control">
                <label for="password2">Confirm password</label>
                <input type="password" name="password2" id="password2" placeholder="Confirm your password">
                <small></small>
            </div>
            <div class="file">
                <h3>Avatar</h3>
                <button>Choisir un fichier</button>
            </div>
            <input type="submit" value="Creer un compte">
        </form>
        </div>
        <div class="right">
        <img src="<?= WEBROOT."img".DIRECTORY_SEPARATOR."avatar.png"?>" alt="">
                <h3>Avatar de l'admin</h3>
        </div>
    </div>
                  </div>
          </div>
  <script src="<?=WEB_PUBLIC."js".DIRECTORY_SEPARATOR."scriptIns.js"?>"></script>

</body>
</html>