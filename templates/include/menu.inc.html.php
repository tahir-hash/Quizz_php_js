
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."menu.css"?>">
    <title>Document</title>
</head>
<body>
<div class="menu">
    <div class="avatar">
      <?php if($_SESSION[KEY_CONNECT]['profil'] !=""):?>
        <img src="<?= WEBROOT."uploads".DIRECTORY_SEPARATOR.$_SESSION[KEY_CONNECT]['profil']?>" alt="">
        <?php endif?>
        <?php if($_SESSION[KEY_CONNECT]['profil'] ==""):?>
        <img src="<?= WEBROOT."img".DIRECTORY_SEPARATOR."images.png"?>" alt="">
        <?php endif?>
        <h3><?= $_SESSION[KEY_CONNECT]['prenom']." ".$_SESSION[KEY_CONNECT]['nom']?></h3>
    </div>
    <div class="vertical-menu">
  <a href="<?= WEBROOT."?controller=user&action=home"?>" class="active">Acceuil <img class="link" src="<?= WEBROOT."img".DIRECTORY_SEPARATOR."liste.png"?>"alt=""></a>
<?php if(is_admin()) : ?>
  <a href="<?= WEBROOT."?controller=user&action=newadmin"?>">Créer Admin<img class="link" src="<?= WEBROOT."img".DIRECTORY_SEPARATOR."liste-active.png"?>"alt=""></a>
  <a href="<?= WEBROOT."?controller=user&action=liste_joueur"?>">Liste des Joueurs<img class="link" src="<?= WEBROOT."img".DIRECTORY_SEPARATOR."liste.png"?>"alt=""></a>
  <a href="<?= WEBROOT."?controller=question&action=liste_question"?>" class="active">Liste des Questions<img class="link" src="<?= WEBROOT."img".DIRECTORY_SEPARATOR."ajout.png"?>"alt=""></a>
  <a href="<?= WEBROOT."?controller=question&action=creer_questions"?>">Créer Questions<img class="link" src="<?= WEBROOT."img".DIRECTORY_SEPARATOR."ajout.png"?>"alt=""></a>
<?php endif ?>
  <!-- <?php if(is_joueur()) : ?>
    <h1>BIENVENUE DANS VOTRE JEU DE QUIZZ..</h1>
    <?php endif ?> -->
</div>
</div>
</body>
</html>