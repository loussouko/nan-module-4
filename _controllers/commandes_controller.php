<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 21/04/2019
 * Time: 02:42
 */
isAdmin();
if(isset($_POST) && !empty($_POST))
{
    $search = checkInput($_POST['search']);
    if(!empty($search))
    {
        $coms=Commande::getByDate($search);
        $_SESSION['date'] = $search;
    }
}