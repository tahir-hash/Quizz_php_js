<?php
    if(isset($_SESSION["error_ins"]))
    {
      $errors= $_SESSION["error_ins"];
      unset($_SESSION["error_ins"]);
    }
    if(isset($_SESSION["save_ins"]))
    {
      $save= $_SESSION["save_ins"];
      unset($_SESSION["save_ins"]);
    }
    //upload
    if(isset($_POST['submit']))
    {
        if(array_key_exists('image', $_FILES))
        {
            $image_name= $_FILES['image']['name'];
            $tmp_image= $_FILES['image']['tmp_name'];
            $folder= WEB_PUB."uploads".DIRECTORY_SEPARATOR;
            move_uploaded_file($tmp_image, $folder.$image_name);
        }
    } 
    
?>
                  <div class="info">
                  <div class="inscription">
        <div class="left">
            <div class="text">
                <h1>S'inscrire</h1>
                <p>Pour tester votre niveau de culture génerale</p>
            </div>
            <form action="<?=WEBROOT?>" method="POST" class="form" id="form" onSubmit="return valider()" enctype= "multipart/form-data">
            <div class="formulaire">
            <input type="hidden" name="controller" value="user">
            <input type="hidden" name="action" value="push">
            <div class="form-control">
            <?php if (isset($errors['inscription'])): ?>
        <h3 style="color:red"><?= $errors['inscription'];?></h3>
      <?php endif ?>
      <!-- inscription reussie -->
      <?php if (isset($save['save_suc'])):?>
        <p style="color:#2ecc71;"><?= $save['save_suc'];?></p>
      <?php endif?>
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
                <input type="password" name="password2" id="password2" placeholder="Confirm your password"><br>
                <small></small>
            </div>
            <input type="submit" value="Creer un compte"> 
            </div>
            <div class="right">
                <label for="avatar_img">
                    <img src="<?= WEBROOT."img".DIRECTORY_SEPARATOR."avatar.png"?>" id="default_img" alt="">
                </label>
                <input type="file" name="image" accept=".jpg,.png,.jpeg" id="avatar_img">
                    <h3>Avatar de l'admin</h3>
            </div>
        </form>
        </div>
    </div>
                  </div>
          </div>
  <script src="<?=WEB_PUBLIC."js".DIRECTORY_SEPARATOR."scriptIns.js"?>"></script>
