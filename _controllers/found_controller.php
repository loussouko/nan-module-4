<?php
/**
 * Created by PhpStorm.
 * User: nan
 * Date: 12/04/2019
 * Time: 13:21
 */

if(isset($_POST) && !empty($_POST)){

    $Coursname=$_POST['courName'];
    $foundCourse=Cours::searchCours($Coursname);
    var_dump($foundCourse);

  } 