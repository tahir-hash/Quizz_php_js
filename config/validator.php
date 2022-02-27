<?php
function champ_obligatoire(string $key,string $data,array &$errors,string $message="ce champ est obligatoire")
{
    if(empty($data))
    {
         $errors[$key]=$message;
    }
}
function valid_email(string $key,string $data,array &$errors,string $message="Email invalid")
{
    if(!filter_var($data,FILTER_VALIDATE_EMAIL))
    {
        $errors[$key]=$message;
    }
}
function valid_password (string $key,string $data,array &$errors,string $message="Password invalid")
{
    $letters =preg_match ('#[a-zA-Z]#' ,$data); 
    $numbers =preg_match ('#[0-9]#' ,$data); 
    if(strlen($data)<6 || !$numbers || !$letters)
    {
        $errors[$key]=$message;
    }
}