<?php
isAdmin();
if(isset($_POST) && !empty($_POST))
{
    $nom = checkInput($_POST['nom']);
    $mat= checkInput($_POST['mat']);
    $niv = checkInput($_POST['niv']);
    $cont = checkInput($_POST['cont']);
    $stat = validFrom([$nom,$cont,$mat,$niv]);
    if($stat)
    {
      Cours::insertCours($nom,html_entity_decode($cont),$mat,$niv);
      header('location: addcourse');
      exit();
    }
}