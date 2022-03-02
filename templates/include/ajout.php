<?php
if(isset($_POST['submit']))
{
    $put=array(
        "nom"=> $_POST['nom'],
        "prenom"=> $_POST['prenom'],
        "login"=> $_POST['login'],
        "score"=> 0,
        "role"=> ROLE_JOUEUR,
    );
    if(filesize(PATH_DB1)==0)
    {
        $first_record= array($put);
        $datasave=$first_record;
    }
    else
    {
        $oldrecords=json_decode(file_get_contents(PATH_DB));
    array_push($oldrecords,$put);
    $datasave=$oldrecords;
    }
}
