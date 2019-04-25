<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 21/04/2019
 * Time: 22:21
 */
isAdmin();
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $id = $_GET['id'];
    $categories= Category::getCategoryById($id);
}
if (isset($_POST) && !empty($_POST))
{
    $nom = checkInput($_POST['nom']);
    $id = checkInput($_POST['id']);
    $categories= Category::getCategoryById($id);
    $stat = validFrom([$nom]);
    if($stat)
    {
        Category::update($nom,$id);
        header('location:addcategorie');
        exit();
    }
}

