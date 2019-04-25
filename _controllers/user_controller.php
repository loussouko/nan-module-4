<?php
/**
 * Created by PhpStorm.
 * User: nan
 * Date: 12/04/2019
 * Time: 14:31
 */
isAdmin();
$users = User::getAllUsers();
if(isset($_GET['id']) && !empty($_GET['id']))
{
    User::deleteUser($_GET['id']);
    header('Location: user');
    exit();
}
if(isset($_POST) && !empty($_POST))
{
   $niv = checkInput($_POST['Level']);
   if(!empty($niv))
   {
      $userNiv =User::getUserByNiv($niv);
      $_SESSION['niv'] = $niv;
   }
}