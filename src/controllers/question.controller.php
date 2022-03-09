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
        elseif($_REQUEST['action']=="creer_questions")
        {
            ob_start();
            require_once(PATH_VIEWS."question".DIRECTORY_SEPARATOR."create.questions.html.php");
            $contain_for_views=ob_get_clean();
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php"); 
        }
        else
        {
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."error.html.php");
        }
    }
    
}
function lister_questions()    
{
    ob_start();
    $data= json_to_array("questions");
    $page = (!empty($_GET['page']) && $_GET['page'] > 0) ? (int) ($_GET['page']) : 1;
    $limit = 3;
    $totalPages = ceil(count($data) / $limit);
    $page = max($page, 1);
    $page = min($page, $totalPages);
    $offset = ($page - 1) * $limit;
    $offset = ($offset < 0) ? 0 : $offset;
    $items = array_slice($data, $offset, $limit);
    require_once(PATH_VIEWS."question".DIRECTORY_SEPARATOR."liste.questions.html.php"); 
    $contain_for_views=ob_get_clean();
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php"); 
}