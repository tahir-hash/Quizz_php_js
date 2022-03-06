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
            echo "traite";
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
        if($_REQUEST['action']=="liste_question")
        {
            lister_questions();
        }
    }
    else
    {
      require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php"); 
    }
}
function lister_questions()    
{
    ob_start();
    $data= json_to_array("questions");
    require_once(PATH_VIEWS."question".DIRECTORY_SEPARATOR."liste.questions.html.php"); 
    $contain_for_views=ob_get_clean();
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php"); 
}