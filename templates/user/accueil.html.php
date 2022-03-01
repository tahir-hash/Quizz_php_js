<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."acceuil.css"?>">
    <title>Document</title>
</head>
<body>
<div class="vertical-menu">
<?php if(is_admin()) : ?>
  <a href="<?= WEBROOT."?controller=user&action=home"?>" class="active">Liste de Questions</a>
  <a href="#">Créer Admin</a>
  <a href="<?= WEBROOT."?controller=user&action=liste_joueur"?>">Liste Joueurs</a>
  <a href="#">Créer Questions</a>
<?php endif ?>
  <a href="<?= WEBROOT."?controller=securite&action=logout"?>">Deconnexion</a>
  <?php if(is_joueur()) : ?>
    <h1>BIENVENUE DANS VOTRE JEU DE QUIZZ..</h1>
    <?php endif ?>
</div>
</body>
</html>