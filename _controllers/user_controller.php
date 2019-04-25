<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 22/04/2019
 * Time: 00:01
 */
if(isset($_POST) && !empty($_POST))
{
    $search = checkInput($_POST['search']);
    if(!empty($search))
    {
        $users=User::searchUser($search);
    }
}
if(isset($_GET['id']) && !empty($_GET['id']))
{
    User::deleteUser($_GET['id']);
    header('Location: user');
    exit();
}