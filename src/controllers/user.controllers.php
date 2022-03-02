<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");
/**
* Traitement des Requetes POST
*/
if($_SERVER['REQUEST_METHOD']=="POST")
{
   if($_REQUEST['action']=="push")
    {
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $login=$_POST['login'];
            $password=$_POST['password'];
           inscrireAdmin($nom,$prenom,$login,$password);
    }
}
/**
* Traitement des Requetes GET
*/
if($_SERVER['REQUEST_METHOD']=="GET")
{
    if(isset($_REQUEST['action']))
    {
        if(!is_connect())
        {
            header("location".WEBROOT);
            exit();
        }
        if($_REQUEST['action']=="home")
        {
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php"); 
        }
        else if($_REQUEST['action']=="liste_joueur")
        {
            lister_joueur();
        }
        else if($_REQUEST['action']=="newadmin")
        {
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."creeradmin.html.php"); 
        }
    }
}

function lister_joueur()    
{
    $data= find_users(ROLE_JOUEUR);
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."liste.joueur.html.php"); 
}