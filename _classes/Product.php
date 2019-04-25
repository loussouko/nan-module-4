<?php
class Product
{
    static  function insert($nomProduit,$detailProduit,$prixProduit,$imageProduit,$stockProduit,$idCategorie)
    {
        global $db;
        $stat = $db->prepare('INSERT INTO produit (nomProduit,detailProduit,prixProduit,imageProduit,stockProduit,idCategorie) VALUES(?,?,?,?,?,?)');
        $stat->execute([$nomProduit,$detailProduit,$prixProduit,$imageProduit,$stockProduit,$idCategorie]);
    }
    static function update($nomProduit,$detailProduit,$prixProduit,$imageProduit,$stockProduit,$idCategorie,$id)
    {
        global $db;
        $stat = $db->prepare('UPDATE produit SET nomProduit=?,detailProduit=?,prixProduit=?,imageProduit=?,stockProduit=?,idCategorie=? WHERE idProduit=?');
        $stat->execute([$nomProduit,$detailProduit,$prixProduit,$imageProduit,$stockProduit,$idCategorie,$id]);
    }
    static function  delete($id)
    {
        global $db;
        $stat = $db->prepare('DELETE FROM produit WHERE idProduit=?');
        $stat->execute([$id]);
    }
    static  function getAllProduct()
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM produit');
        $stat->execute([]);
        return $stat->fetchAll();
    }
    static  function getAllProductByPages($debut,$fin)
    {
        global $db;
        $deb = ($debut-1)*$fin;
        $stat = $db->query("SELECT * FROM produit ORDER BY idProduit ASC LIMIT $deb,$fin");
        return $stat->fetchall();
    }
    static  function getProductById($id)
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM produit WHERE idProduit=?');
        $stat->execute([$id]);
        return $stat->fetch();
    }
    static  function getProductByCategory($id)
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM produit INNER JOIN categorie ON categorie.idCategorie = produit.idCategorie WHERE produit.idCategorie= ?');
        $stat->execute([$id]);
        return $stat->fetchAll();
    }
    static function search($recherche)
    {
            global $db;
            $stat = $db->prepare('SELECT * FROM produit WHERE nomProduit LIKE ?');
            $stat->execute(['%'.$recherche.'%']);
            return $stat->fetchAll();

    }
    static  function getProductpanier($id)
    {
        global $db;
        $stat = $db->query('SELECT * FROM produit WHERE idProduit IN ('.implode(",",$id).')');
        return $stat->fetchAll();

    }
}