<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 24/04/2019
 * Time: 00:37
 */
$totalmessages = count(Suggestion::getAllMessage());
$perPage = 4;
$cPage = 1;
$nbpage = ceil($totalmessages/$perPage);
$messages = Suggestion::getAllMessageByPages($cPage,$perPage);
if(!empty($_GET['id']) && isset($_GET['id']))
{
    $messages = Product::getAllProductByPages($_GET['id'],$perPage);
}