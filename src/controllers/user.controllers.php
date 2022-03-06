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
            header("location:".WEBROOT);
            exit();  
        }
        if($_REQUEST['action']=="home")
        {
            lister_joueur();  
        }
        else if($_REQUEST['action']=="liste_joueur")
        {
            $page = (!empty($_GET['page']) && $_GET['page'] > 0) ? intval($_GET['page']) : 1;
            $limit = 3;
            $totalPages = ceil(count(json_to_array("users")) / $limit);
            lister_joueur();
        }
        else if($_REQUEST['action']=="newadmin")
        {
            ob_start();
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."creeradmin.html.php"); 
            $contain_for_views= ob_get_clean();
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
        }
        else
        {
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."error.html.php");

        }
    }

}

function lister_joueur()    
{
    ob_start();
    $data= find_users(ROLE_JOUEUR);
    $page = (!empty($_GET['page']) && $_GET['page'] > 0) ? (int) ($_GET['page']) : 1;
    $limit = 3;
    $totalPages = ceil(count($data) / $limit);
    $page = max($page, 1);
    $page = min($page, $totalPages);
    $offset = ($page - 1) * $limit;
    $offset = ($offset < 0) ? 0 : $offset;
    $items = array_slice($data, $offset, $limit);
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."liste.joueur.html.php"); 
    $contain_for_views= ob_get_clean();
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php"); 
}