<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 18/04/2019
 * Time: 23:01
 */
$uri =$_SERVER['QUERY_STRING'];
$uri = substr($uri,5);
$urs = 'ciment';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search']) && $_POST['search'] != null) {
    $_SESSION['search'] = $_POST['search'];
}

if (isset($_SESSION['search'])) {
    $produits = Product::search($_SESSION['search']);
    unset($_SESSION['search']);
} else {
    $produits = Product::getAllProduct();
}
