<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 18/04/2019
 * Time: 19:30
 */
$totalproduits = count(Product::getAllProduct());
$perPage = 8;
$cPage = 1;
$nbpage = ceil($totalproduits/$perPage);
$produits = Product::getAllProductByPages($cPage,$perPage);
$uri =$_SERVER['QUERY_STRING'];
$uri = substr($uri,5);
$urs = 'home';
$url = 0;
if(!empty($_GET['id']) && isset($_GET['id']))
{
    $produits = Product::getAllProductByPages($_GET['id'],$perPage);
    $url = substr($uri,8);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search']) && $_POST['search'] != null) {
    $_SESSION['search'] = $_POST['search'];
    if (isset($_SESSION['search']) && !empty($_SESSION['search'])) {
        $produits =Product::search($_SESSION['search']);
        unset($_SESSION['search']);
    } else {
        $produits = Product::getAllProductByPages(1,8);
    }
}


