<?php

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function debug($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function importImg($img,$nom){
    $image = checkInput($img['name']);
    $imageExtensions = strrchr($image, '.');
    $arrayExtensions = array('.PNG', '.png', '.JPEG', '.jpeg', '.jpg', '.JPG', '.gif', '.GIF');
    if (in_array($imageExtensions,$arrayExtensions)) {
        $address = 'assets/upload/' .$nom. time() . $imageExtensions;
        $tmp_name = $img['tmp_name'];
        move_uploaded_file($tmp_name, $address);
        return $address;
    }
}

function importVid($path, $img){
    $image = checkInput($img['name']);
    $imageExtension = pathinfo($path.$image,PATHINFO_EXTENSION);
    if(strtolower($imageExtension) == "mp4" || $imageExtension == "mkv" )
    {
        $tmp_name = $img['tmp_name'];
        move_uploaded_file($tmp_name, $path.$image) ;
    }
}
function checkForm($tab)
{
    $array = [];
    for($i=0; $i<count($tab); $i++)
    {
       $array[$i] = checkInput($tab[$i]);
    }
    return $array; 
}
function validFrom($tab){

    $var = 0;
    $var1 = 0;
    foreach ($tab as $i){
        $var1 ++;
        if(!empty($i)){
            $var ++;
        }else{
            $var --;
        }
    }
    if($var == $var1){
        return true;
    }else{
        return false;
    }
}

function isLogged()
{
    if (!isset($_SESSION['user'])) {
        header('location:home');
        exit();
    }
    
}
function isPanier()
{
    if (empty($_SESSION['panier'])) {
        header('location:home');
        exit();
    }

}
function isAdmin()
{
    if ($_SESSION['user']['typeUser'] != 1) {
        header('location:home');
        exit();
    }

}
function verifinfo($nom,$prenom,$mail,$pays,$ville,$contact,$mdp,$adresse)
{
 $array = array('nom'=>'','prenom'=>'','mail'=>'','pays'=>'','ville'=>'','contact'=>'','mdp'=>'','adresse'=>'', 'nomError'=>'','prenomError'=>'','mailError'=>'','paysError'=>'','villeError'=>'','contactError'=> '','mdpError'=>'','adresseError'=>'','isSuccess'=> false);
 $array['nom']= $nom;
 $array['prenom']= $prenom;
    $array['mail']= $mail;
 $array['pays']= $pays;
    $array['ville']= $ville;
    $array['contact']= $contact;
    $array['mdp']= $mdp;
    $array['adresse']= $adresse;
    $array['isSuccess']= true;

    if(empty($array['nom']))
    {
        $array['nomError']= 'Le nom ne peut etre vide';
        $array['isSuccess']= false;
    }
    if(empty($array['prenom']))
    { // si le champ est vide
        $array['prenomError']= 'Le prenom ne peut etre vide';
        $array['isSuccess']= false;
    }

    if (empty($array['mail'])) {
        $array['mailError']= 'Le mail ne peut etre vide';
        $array['isSuccess']= false;
    }
    else if(!preg_match("/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/", $array['mail']))
    {
            $array['mailError']="Le mail n'est pas valide";
            $array['isSuccess']= false;
    }

       if(empty($array['pays']))
        { // si le champ est vide
            $array['mailError']="veuillez entrer le pays";
            $array['isSuccess']= false;
        }

        if(empty($array['ville']))
        { // si le champ est vide
            $array['villeError']='veuillez entrer la ville';
            $array['isSuccess']= false;
        }

        if(empty($array['contact']))
        { // si le champ est vide
            $array['contactError']='veuillez entrer le numero';
            $array['isSuccess']= false;
        }
        else if(!preg_match('/^[0-9]{8,}$/', $array['contact']))
        {
           $array['contactError']='Que des chiffres';
         $array['isSuccess']= false;
        }

        if (empty($array['mdp'])) {
            $array['mdpError']='Ne peut etre vide';
            $array['isSuccess']= false;
        }
        else if(!preg_match('/^[a-zA-Z0-9]{5,}$/', $array['mdp']))
        {
            $array['mdpError']= 'Au moins 5 caracteres';
            $array['isSuccess']= false;
        }

        if(empty($array['adresse']))
        { // si le champ est vide
            $array['adresseError']='Ne doit etre vide';
            $array['isSuccess']= false;
        }
        else if(!preg_match('/^[0-9]{2,}\s*[a-zA-Z]{2,}\s*[0-9]{3,}\s*[a-zA-Z]{6,}$/', $array['adresse']))
        {
            $array['adresseError']='Au moins 13 caracteres';
            $array['isSuccess']= false;
        }
         return $array;
    }
