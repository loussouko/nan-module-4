<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 20/04/2019
 * Time: 00:32
 */
isAdmin();
if(isset($_POST) && !empty($_POST))
{
    $nom = checkInput($_POST['nom']);
    $stock= checkInput($_POST['stock']);
    $cat = checkInput($_POST['cat']);
    $cont = checkInput($_POST['cont']);
    $prix = checkInput($_POST['prix']);
    $verifImg= $_FILES['img']['name'];
    $reqImg = $_FILES['img'];
    $stat = validFrom([$nom,$cont,$verifImg,$cat,$stock,$prix]);
    if($stat)
    {
        $image = importImg($reqImg,$nom);
        Product::insert($nom,html_entity_decode($cont),$prix,$image,$stock,$cat);
        header('location: addproduct');
        exit();
    }
    else{
        $error = 'veuillez remplir tous les champs';
    }
}