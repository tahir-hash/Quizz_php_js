<?php

require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");

/**
* Traitement des Requetes POST
*/ 
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_REQUEST['action']))
    {
        if($_REQUEST['action']=="connexion")
        {
            $login=$_POST['login'];
            $password=$_POST['password'];
            connexion($login,$password);
        }
        else if($_REQUEST['action']=="push")
        {
            $data = json_to_array("users");
            $end_file= end($data);
            $last_id = $end_file['id'];
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $login=$_POST['login'];
            $password=$_POST['password'];
            $role=ROLE_JOUEUR;
            $image=$_POST['image'];
            $explode=explode("@",$login);
            $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
            $name= $explode[0].".".$extension;
            if(find_login($login)==false)
            {
                inscrire($last_id,$nom,$prenom,$login,$password,$role,$name);
                $succes=[];
                $succes['inscription_suc']="INSCRIPTION REUSSIE";
                $_SESSION["succes_ins"]= $succes;
                require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."inscription.html.php");
                //require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php"); 
            }
            else
            {
                $errors=[];
                $errors['inscription']="Login existant";
                $_SESSION["error_ins"]= $errors;
                header("location:".WEBROOT."?controller=securite&action=inscription");
                exit();
            }
        }
    }

}
/**
* Traitement des Requetes GET
*/
if($_SERVER['REQUEST_METHOD']=="GET")
{
    if(isset($_REQUEST['action']))
    {
        if($_REQUEST['action']=="connexion")
        {
           require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php"); 
        }
        elseif($_REQUEST['action']=="logout")
        {
            logout();
        }
        else if($_REQUEST['action']=="inscription")
        {
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."inscription.html.php"); 
        }
        else
        {
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."error.html.php");   
        }
    }
    else
    {
      require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php"); 
    }
}

//connection
function connexion(string $login, string $password)
{
    $errors=[];
    champ_obligatoire('login', $login, $errors);
  //  champ_obligatoire('password', $password, $errors);
    if(count($errors)==0)
    {
        valid_email('login',$login,$errors);
    }
    valid_password('password',$password,$errors);
    if(count($errors)==0)
    {
        $users= find_user_login_password($login,$password);
        if(count($users)!=0)
        {
            $_SESSION[KEY_CONNECT]= $users;
            header("location:".WEBROOT."?controller=user&action=home");
            exit();
        }
        else
        {
            $errors['connexion']="Login ou mot de passe incorect";
            $_SESSION[KEY_ERRORS]= $errors;
            header("location:".WEBROOT);
            exit();
        }
    }
    else
    {
        $_SESSION[KEY_ERRORS]= $errors;
        header("location:".WEBROOT);
        exit();
    }
}
function logout()
{
    session_destroy();
    session_unset();
    header("location:".WEBROOT);
    exit(); 
}
