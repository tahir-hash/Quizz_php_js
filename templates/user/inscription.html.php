<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Page de connexion.</title>
  <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."inscription.css"?>">
</head>
<body>
    <div class="header">
      <img src="" alt="">
        <h1>LE PLAISIR DE JOUER</h1>
    </div>
    <div class="inscription">
        <div class="left">
            <div class="text">
                <h1>S'inscrire</h1>
                <p>Pour tester votre niveau de culture génerale</p>
            </div>
            <form class="form" id="form">
            <div class="form-control">
                <label for="prenom">Prenom</label>
                <input type="text" id="prenom" placeholder="Aaaaa">
                <small></small>
            </div>
            <div class="form-control">
                <label for="nom">Nom</label>
                <input type="text" id="prenom" placeholder="BBBB">
                <small></small>
            </div>
            <div class="form-control">
                <label for="login">Login</label>
                <input type="text" id="login" placeholder="aabaab">
                <small></small>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter password">
                <small></small>
            </div>
            <div class="form-control">
                <label for="password2">Confirm password</label>
                <input type="password" id="password2" placeholder="Confirm your password">
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
                <h3>Avatar du joueur</h3>
        </div>
    </div>
  <script src="<?=WEB_PUBLIC."js".DIRECTORY_SEPARATOR."scriptIns.js"?>"></script>
</body>
</html>  