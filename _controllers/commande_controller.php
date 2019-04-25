<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 20/04/2019
 * Time: 18:09
 */
isPanier();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nc = checkInput($_POST['nc']);
    $dc = checkInput($_POST['dc']);
    $jl = checkInput($_POST['jl']);
    $fc = checkInput($_POST['fc']);
    $mc = checkInput($_POST['mc']);
    $mt = checkInput($_POST['mt']);
    $id = checkInput($_POST['id']);
    $cp = checkInput($_POST['cp']);
    $cont = checkInput($_POST['cont']);
    $stat = validFrom([$nc,$dc,$jl,$fc,$mc,$mt,$id,$cp,$cont]);
    if ($stat) {
       Commande::insert($nc,$dc,$fc,$mc,$mt,$id,$jl,$cp,html_entity_decode($cont));
        Panier::viderPanier();
        header('location:modifprofil');
        exit();
    }
}