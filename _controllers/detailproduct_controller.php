<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 20/04/2019
 * Time: 03:00
 */
$uri =$_SERVER['QUERY_STRING'];
$uri = substr($uri,5);
$urs = 'detailproduct';
$url = '0';
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $produits=Product::getProductById($_GET['id']);
    $url = $_GET['id'];
}
