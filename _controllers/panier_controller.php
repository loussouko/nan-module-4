<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 20/04/2019
 * Time: 10:48
 */
$_SESSION['panier'];
if (isset($_GET['req']) && !empty($_GET['req']) && isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['url']) && !empty($_GET['url']))
{
    Panier::addProduct($_GET['id']);
    $page = $_GET['req'];
    $fin = $_GET['url'];
    header("Location:$page-$fin");
    exit();
}
else if (isset($_GET['req']) && !empty($_GET['req']) && isset($_GET['id']) && !empty($_GET['id']) )
{
    Panier::addProduct($_GET['id']);
    $page = $_GET['req'];
    header("Location:$page");
    exit();
}
else if(isset($_GET['id']) && !empty($_GET['id']))
{
    Panier::addProduct($_GET['id']);
    header('Location:panier');
    exit();
}

if(isset($_POST['qt']) && !empty($_POST['qt']))
{
    $qt= checkInput($_POST['qt']);
    $id= checkInput($_POST['id']);
    Panier::updateProduct($qt,$id);
    header('location:panier');
    exit();
}
