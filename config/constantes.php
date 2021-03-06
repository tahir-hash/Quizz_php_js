<?php
//define("WEBROOT","http://localhost".DIRECTORY_SEPARATOR."quizz_mvc".DIRECTORY_SEPARATOR."public".DIRECTORY_SEPARATOR);

/**
* Chemin sur dossier racine du projet
*/
define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));
/**
* Chemin sur dossier src qui contient les controllers et les modeles
*/
define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);
/**
* Chemin sur dossier templates du projet
*/
define("PATH_VIEWS",ROOT."templates".DIRECTORY_SEPARATOR);
/**
* Chemin sur data qui contient le fichier Json db.json
*/
define("PATH_DB",ROOT."data/db.json");

/**

* Chemin sur le dossier public , pour inclusion des images,css et js*/
define("WEBROOT","http://localhost/quizz_mvc/public/");
//Cle d'erreur
define("KEY_ERRORS","errors");
//cle connexion
define("KEY_CONNECT","connect");
///web public
define("WEB_PUBLIC",str_replace("index.php","",$_SERVER['SCRIPT_NAME']));
define("WEB_PUB",str_replace("index.php","",$_SERVER['SCRIPT_FILENAME']));





