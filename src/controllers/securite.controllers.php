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
        else
        {
          require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");   
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