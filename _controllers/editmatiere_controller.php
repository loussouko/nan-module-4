<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 14/04/2019
 * Time: 23:39
 */
isAdmin();
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $id = $_GET['id'];
    $matiere = Matiere::getMatiere($id);
}

if(isset($_POST) && !empty($_POST))
{
    $id = $_POST['id'];
    $nom= checkInput($_POST['nom']);
    $verifImg= $_FILES['img']['name'];
    $reqImg = $_FILES['img'];
    $matiere = Matiere::getMatiere($id);
    $stat = validFrom([$nom,$verifImg]);
    if($stat)
    {
        $image = importImg($reqImg,$nom);
        Matiere::updateMatiere($id,$nom,$image);
        header('Location:addmatiere');
        exit();
    }
}
