<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $mail = checkInput($_POST['mail']);
    $mdp = checkInput($_POST['mdp']);
    $stat = validFrom([$mail,$mdp]);
    if ($stat)
    {
        $result=User::getUser($mail,sha1($mdp));
        if($result)
        {
            $_SESSION['user'] =$result;
            if($_SESSION['user']['typeUser'] == 2 && $_SESSION['user']['isLock'] == 1)
            {
                header('location:home');
                exit();
            }
            elseif($_SESSION['user']['typeUser'] == 2 && $_SESSION['user']['isLock'] == 0)
            {
                $error = "Compte bloque, veuillez contacter l'Administrateur";
            }
            else{
                header('location: admindash');
                exit();
            }
        }
        else{
            $error = "mot de passe ou mail incorrect";
        }
    }else{
        $error = "mot de passe ou mail incorrect";
    }
}