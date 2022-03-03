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

                        <?= $contain_for_views ?>
          </div>
</body>
</html>