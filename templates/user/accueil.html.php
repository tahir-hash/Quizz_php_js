<?php require_once(PATH_VIEWS.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."header.inc.html.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."liste.css"?>">
  <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."admin.css"?>">
  <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."create.qu.css"?>">
  <title>Page d'accueil</title>
</head>
<body>
          <div class="contain">
                  <div>
                      <?php require_once(PATH_VIEWS.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."menu.inc.html.php");?>
                  </div>
<?php if(is_admin()) : ?>
                        <?= $contain_for_views ?>
                        <?php endif ?>
                        <?php if(is_joueur()) : ?>
                          <?php require_once(PATH_VIEWS.DIRECTORY_SEPARATOR."user".DIRECTORY_SEPARATOR."jeu.html.php");?>
                        <?php endif ?>
          </div>
          
</body>
</html>