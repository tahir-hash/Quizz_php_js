<?php
    if(isset($_SESSION["error_ins"]))
    {
      $errors= $_SESSION["error_ins"];
      unset($_SESSION["error_ins"]);
    }
    if(isset($_SESSION["succes_ins"]))
    {
      $success= $_SESSION["succes_ins"];
      unset($_SESSION["succes_ins"]);
    }
    //upload
    if(isset($_POST['submit']))
    {
        //var_dump($_FILES);
        if(array_key_exists('image', $_FILES))
        {
            
            $email=$_POST['login'];
            $explode=explode("@",$email);
            $name= $explode[0];
            $image_name= $_FILES['image']['name'];
            $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
            $last_name=$name.".".$extension;
            $tmp_image= $_FILES['image']['tmp_name'];
            $folder= WEB_PUB."uploads".DIRECTORY_SEPARATOR;
            move_uploaded_file($tmp_image, $folder.$last_name);
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Page d'inscription</title>
  <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."inscription.css"?>">
</head>
<body>
    <div class="header">
    <img src="<?= WEBROOT."img".DIRECTORY_SEPARATOR."logo.png"?>"alt="">
        <h1>LE PLAISIR DE JOUER</h1>
    </div>
    <div class="inscription">
        <div class="left">
            <div class="text">
                <h1>S'inscrire</h1>
                <p>Pour tester votre niveau de culture génerale</p>
            </div>
            <form action="<?=WEBROOT?>" method="POST" class="form" id="form" onSubmit="return valider()" enctype= "multipart/form-data">
            <div class="formulaire">
            <input type="hidden" name="controller" value="securite">
            <input type="hidden" name="action" value="push">
            <?php if (isset($errors['inscription'])): ?>
        <h3 style="color:red"><?= $errors['inscription'];?></h3>
      <?php endif ?>
      <!-- inscription done -->
      <?php if (isset($success['inscription_suc'])):?>
        <p style="color:#2ecc71;"><?= $success['inscription_suc'];?></p>
      <?php endif?>
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
                <small></small> <br>
            </div>
            <input type="submit" name="submit" value="Creer un compte">
            <p style="color:#2ecc71;" class="retour"><span><a style="color:red;" href="<?= WEBROOT."?controller=securite&action=connexion"?>">Se connecter</a></span></p>
            </div>
            
            <div class="right">
                <label for="avatar_img">
                    <img src="<?= WEBROOT."img".DIRECTORY_SEPARATOR."avatar.png"?>" id="default_img" alt="">
                </label>
                <input type="file" name="image" accept=".jpg,.png,.jpeg" id="avatar_img">
                    <h3>Avatar du joueur</h3>
            </div>
        </form>
        </div>
        
    </div>
  <script src="<?=WEB_PUBLIC."js".DIRECTORY_SEPARATOR."scriptIns.js"?>"></script>
</body>
</html>  