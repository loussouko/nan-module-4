<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 18/04/2019
 * Time: 23:42
 */
$nomError = $prenomError=$mailError=$paysError=$villeError=$quartierError=$contactError=$mdpError=$adresseError= '';
$isSuccess = false;
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nom = checkInput($_POST['nom']);
    $prenom = checkInput($_POST['prenom']);
    $mail = checkInput($_POST['mail']);
    $pays = checkInput($_POST['pays']);
    $ville = checkInput($_POST['ville']);
    $quartier = checkInput($_POST['quartier']);
    $contact = checkInput($_POST['number']);
    $mdp = checkInput($_POST['mdp']);
    $adresse = checkInput($_POST['address']);
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

    if(empty($pays))
    { // si le champ est vide
        $paysError="veuillez entrer le pays";
        $isSuccess= false;
    }

    if(empty($ville))
    { // si le champ est vide
        $villeError='veuillez entrer la ville';
        $isSuccess= false;
    }

    if(empty($quartier))
    { // si le champ est vide
        $quartierError='veuillez entrer le quartier';
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

    if (empty($mdp)) {
        $mdpError='Ne peut etre vide';
        $isSuccess= false;
    }
    else if(!preg_match('/^[a-zA-Z0-9]{5,}$/', $mdp))
    {
        $mdpError= 'Au moins 5 caracteres';
        $isSuccess= false;
    }

    if(empty($adresse))
    { // si le champ est vide
        $adresseError='Ne doit etre vide';
        $isSuccess= false;
    }
    else if(!preg_match('/^[0-9]{2,}\s*[a-zA-Z]{2,}\s*[0-9]{3,}\s*[a-zA-Z]{6,}$/', $adresse))
    {
        $adresseError='Au moins 13 caracteres';
        $isSuccess= false;
    }
    if ($isSuccess)
    {
        User::insertUser($nom,$prenom,$mail,$pays,$ville,$quartier,$contact,sha1($mdp),$adresse);
        header('location: login');
        exit();
    }
}


