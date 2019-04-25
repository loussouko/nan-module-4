<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 21/04/2019
 * Time: 22:52
 */
isAdmin();
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $id = $_GET['id'];
    $produits= Product::getProductById($id);
}
if(isset($_POST) && !empty($_POST))
{
    $nom = checkInput($_POST['nom']);
    $stock= checkInput($_POST['stock']);
    $cat = checkInput($_POST['cat']);
    $cont = checkInput($_POST['cont']);
    $prix = checkInput($_POST['prix']);
    $id = checkInput($_POST['id']);
    $produits= Product::getProductById($id);
    $verifImg= $_FILES['img']['name'];
    $reqImg = $_FILES['img'];
    $stat = validFrom([$nom,$cont,$cat,$stock,$prix]);
    if($stat)
    {
        if(empty($verifImg))
        {
            Product::update($nom,html_entity_decode($cont),$prix,$produits['imageProduit'],$stock,$cat,$id);
            header('location: admin');
            exit();
        }
        else {
            $image = importImg($reqImg, $nom);
            Product::update($nom, html_entity_decode($cont), $prix, $image, $stock, $cat, $id);
            header('location: admin');
            exit();
        }
    }
    else{
        $error = 'veuillez remplir tous les champs';
    }
}