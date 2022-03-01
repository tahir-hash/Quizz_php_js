<?php require_once(PATH_VIEWS.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."header.inc.html.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."liste.css"?>">

    <title>Document</title>
</head>
<body>
          <div class="contain">
                  <div>
                      <?php require_once(PATH_VIEWS.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."menu.inc.html.php");?>
                  </div>
                  <div class="info">
                    <h1>Liste des Joueurs</h1>
                      <table>
                        <tr>
                          <th>NOM</th>
                          <th>PRENOM</th>
                          <th>SCORE</th>
                        </tr>
                        <tr>
                          <?php $data = find_users(ROLE_JOUEUR);
                          foreach ($data as $value) :?>
                          <td><?=  $value['prenom'];?></td>
                          <td><?=  $value['nom'];?></td>
                          <td><?=  $value['score'];?></td>
                        </tr>
                        <?php endforeach ?>
                      </table>
                  <button disabled="true">SUIVANT</button>
                  </div>
          </div>
</body>
</html>