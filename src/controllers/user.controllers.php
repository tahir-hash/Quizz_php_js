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
        if(!is_connect())
        {
            header("location".WEBROOT);
            exit();
        }
        if($_REQUEST['action']=="home")
        {
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php"); 
        }
    }
}