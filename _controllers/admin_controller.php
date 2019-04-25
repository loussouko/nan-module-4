<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 20/04/2019
 * Time: 01:23
 */isAdmin();
if(isset($_POST) && !empty($_POST))
{
    $cat = checkInput($_POST['cat']);
    if(!empty($cat))
    {
        $pros=Product::getProductByCategory($cat);
        $_SESSION['category'] = $cat;
    }
}
if(isset($_GET['id']) && !empty($_GET['id']))
{
    Product::delete($_GET['id']);
    header('Location: admin');
    exit();
}