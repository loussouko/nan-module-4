<?php
/**
 * Created by PhpStorm.
 * User: nan
 * Date: 12/04/2019
 * Time: 11:50
 */

    if(isset($_POST) && !empty($_POST))
    {
       $reqNom = checkInput($_POST['regName']);
        $reqPrenom = checkInput($_POST['regPren']);
        $reqEmail = checkInput($_POST['regMail']);
        $reqMdp = checkInput($_POST['regPass']);
        $reqLevel = checkInput($_POST['regLevel']);
        $verifImg= $_FILES['regImg']['name'];
        $reqImg = $_FILES['regImg'];
        $stat = validFrom([$reqNom,$reqPrenom,$reqEmail,$reqMdp,$verifImg,$reqLevel]);
        if($stat)
        {
            $image = importImg($reqImg,$reqNom);
            User::insertUser($reqNom,$reqPrenom,$reqEmail,sha1($reqMdp),$image,$reqLevel);
            $result = User::getUserById(User::getLastId());
            $_SESSION['user'] = $result['nomUser'];
            $_SESSION['prenom'] = $result['prenomUser'];
            $_SESSION['mail'] = $result['emailUser'];
            $_SESSION['isLock'] = $result['isLock'];
            $_SESSION['typeUser'] = $result['typeUser'];
            $_SESSION['mdp'] = $result['mdpUser'];
            $_SESSION['img'] = $result['imgUser'];
            $_SESSION['niveau'] = $result['idNiveau'];
            header('location:cours');
            exit();
        }
    }
