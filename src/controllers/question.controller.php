<?php

require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."question.model.php");

/**
* Traitement des Requetes POST
*/ 
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_REQUEST['action']))
    {
        if($_REQUEST['action']=="ajout")
        {
            /* var_dump($_POST);
            die; */
            $data = json_to_array("questions");
            $end_file= end($data);
            $last_id = $end_file['id'];
            $question=$_POST['textarea'];
            $point=$_POST['nombre'];
            $type=$_POST['select'];
            $input=$_POST['input'];
            
            foreach ($input as $index => $input){
                $reponses[$index]=$input;
                //print_r($reponses);
            }
            //$correct=['xjghj','jxf'];
            switch($type)
            {
                case 'texte':
                    $correct=$reponses;
                    //print_r($reponses);
                break;
                case 'multi':
                    $check=$_POST['checkbox'];
                    foreach ($check as $value){
                        $correct[]=$value;
                       // print_r($correct); 
                    }
                break;
                case 'unique':
                    $radio=$_POST['radio'];
                        $correct[]=$radio;
                        //print_r($correct); 

                break;
            }
           save_question($last_id,$question,$point,$type,$reponses,$correct);
           $succes=[];
            $succes['question_suc']="ENREGISTREMENT REUSSI";
            $_SESSION["succes_ques"]= $succes;
            ob_start();
            require_once(PATH_VIEWS."question".DIRECTORY_SEPARATOR."create.questions.html.php");
            $contain_for_views=ob_get_clean();
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
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
    $_SESSION['limit'] = (!empty($_GET['limit']) && $_GET['limit'] > 0) ? (int) ($_GET['limit']) : 3;
    $limit=$_SESSION['limit'];
    $totalPages = ceil(count($data) / $limit);
    $page = max($page, 1);
    $page = min($page, $totalPages);
    $offset = ($page - 1) * $limit;
    $offset = ($offset < 0) ? 0 : $offset;
    $data = array_slice($data, $offset, $limit);
    require_once(PATH_VIEWS."question".DIRECTORY_SEPARATOR."liste.questions.html.php"); 
    $contain_for_views=ob_get_clean();
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php"); 
}