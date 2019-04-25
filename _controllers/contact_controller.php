<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 18/04/2019
 * Time: 23:42
 */
$nomError = $prenomError=$mailError=$contactError=$messageError= '';
$isSuccess = false;
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nom = checkInput($_POST['nom']);
    $prenom = checkInput($_POST['prenom']);
    $mail = checkInput($_POST['mail']);
    $message = checkInput($_POST['message']);
    $contact = checkInput($_POST['contact']);
    $isSuccess= true;

    if(empty($nom))
    {
        $nomError= 'Le nom ne peut etre vide';
        $isSuccess= false;
    }
    if(empty($prenom))
    { // si le champ est vide
        $prenomError= 'Le prenom ne peut etre vide';
        $isSuccess= false;
    }

    if (empty($mail)) {
        $mailError= 'Le mail ne peut etre vide';
        $isSuccess= false;
    }
    else if(!preg_match("/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/", $mail))
    {
        $mailError="Le mail n'est pas valide";
        $isSuccess= false;
    }

    if(empty($message))
    { // si le champ est vide
        $messageError='veuillez entrer le message';
        $isSuccess= false;
    }

    if(empty($contact))
    { // si le champ est vide
        $contactError='veuillez entrer le numero';
        $isSuccess= false;
    }
    else if(!preg_match('/^[0-9]{8,}$/', $contact))
    {
        $contactError='Que des chiffres';
        $isSuccess= false;
    }
    if ($isSuccess)
    {
         Suggestion::insertMessage($nom,$prenom,$mail,$contact,$message);
         $_SESSION['success'] = 'Votre message a bien ete enregistre';
         header('location:contact');
         exit();
    }
}


