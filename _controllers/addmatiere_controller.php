<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 13/04/2019
 * Time: 22:41
 */
isAdmin();
if (isset($_POST) && !empty($_POST))
{
    $nom = checkInput($_POST['nom']);
    $verifImg= $_FILES['img']['name'];
    $reqImg = $_FILES['img'];
    $stat = validFrom([$nom,$verifImg]);
    if($stat)
    {
        $image = importImg($reqImg,$nom);
        Matiere::insertMatiere($nom,$image);
        header('location:addmatiere');
        exit();
    }
}
if(isset($_GET['id']) && !empty($_GET['id']))
{
    Matiere::deleteMatiere($_GET['id']);
    header('Location: addmatiere');
    exit();
}