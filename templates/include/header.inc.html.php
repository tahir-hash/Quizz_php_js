<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."barre.css"?>">
    <title>Document</title>
</head>
<body>
        <div class="header">
                <img src="" alt="">
                <h1>LE PLAISIR DE JOUER</h1>
        </div>
        <div class="logout">
            <h1>CREER ET PARAMETRER VOS QUIZZ</h1>
            <button onclick="window.location.href = '<?= WEBROOT."?controller=securite&action=logout" ?>';">Déconnexion</button>
        </div>
</body>
</html>