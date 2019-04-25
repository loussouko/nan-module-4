<?php
/**
 * Created by PhpStorm.
 * User: nan
 * Date: 12/04/2019
 * Time: 11:10
 */
if(isset($_GET['id']) && !empty($_GET['id']))
{
    User::debloquerUser($_GET['id']);
    header('Location: user ');
    exit();
}