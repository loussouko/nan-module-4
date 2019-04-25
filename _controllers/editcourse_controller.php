<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 15/04/2019
 * Time: 00:35
 */
isAdmin();
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $id = $_GET['id'];
    $cours =Cours::getCoursById($id);
}
if(isset($_POST) && !empty($_POST))
{
    $nom = checkInput($_POST['nom']);
    $mat= checkInput($_POST['mat']);
    $niv = checkInput($_POST['niv']);
    $cont = checkInput($_POST['cont']);
    $stat = validFrom([$nom,$cont,$mat,$niv]);
    $id= checkInput($_POST['id']);
    $cours =Cours::getCoursById($id);
    if($stat)
    {
        Cours::updateCours($nom,html_entity_decode($cont),$mat,$niv,$id);
        header('location: admin');
        exit();
    }
}
