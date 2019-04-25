<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 20/04/2019
 * Time: 12:44
 */
$_SESSION['panier'];
if(isset($_GET['id']) && !empty($_GET['id']))
{
    Panier::deleteProduct($_GET['id']);
    header('location:panier');
    exit();
}