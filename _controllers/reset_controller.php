<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 22/04/2019
 * Time: 02:32
 */
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $mail = checkInput($_POST['rmail']);
    $mdp = checkInput($_POST['rmdp']);
    $stat = validFrom([$mail,$mdp]);
    if ($stat)
    {
            User::resetmdp($mail,sha1($mdp));
            header('location: login');
            exit();
        }
}