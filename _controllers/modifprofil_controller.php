<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 19/04/2019
 * Time: 19:24
 */
isLogged();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nom = checkInput($_POST['nom']);
    $prenom = checkInput($_POST['prenom']);
    $mail = checkInput($_POST['mail']);
    $pays = checkInput($_POST['pays']);
    $ville = checkInput($_POST['ville']);
    $quartier= checkInput($_POST['quartier']);
    $contact = checkInput($_POST['number']);
    $mdp = checkInput($_POST['mdp']);
    $adresse = checkInput($_POST['address']);
    $stat = validFrom([$nom,$prenom,$mail,$pays,$ville,$quartier,$contact,$adresse]);
    if ($stat)
    {
        if(empty($mdp))
        {
            $mdp = $_SESSION['user']['passeUser'];
            User::updateUser($nom,$prenom,$mail,$pays,$ville,$quartier,$contact,$mdp,$adresse,$_SESSION['user']['id']);
            $result =User::getUserById($_SESSION['user']['id']);
            $_SESSION['user']=$result;
            header('location: modifprofil');
            exit();
        }
          else
          {
              User::updateUser($nom,$prenom,$mail,$pays,$ville,$quartier,$contact,sha1($mdp),$adresse,$_SESSION['user']['id']);
              $result =User::getUserById($_SESSION['user']['id']);
              $_SESSION['user']=$result;
              header('location: modifprofil');
              exit();
        }
    }
}