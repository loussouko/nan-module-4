<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 19/04/2019
 * Time: 23:34
 */
isAdmin();
if (isset($_POST) && !empty($_POST))
{
    $nom = checkInput($_POST['nom']);
    $stat = validFrom([$nom]);
    if($stat)
    {
        Category::insert($nom);
        header('location:addcategorie');
        exit();
    }
}
if(isset($_GET['id']) && !empty($_GET['id']))
{
    Category::delete($_GET['id']);
    header('Location: addcategorie');
    exit();
}
