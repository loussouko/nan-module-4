<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 20/04/2019
 * Time: 19:31
 */

class Commande
{
    static function getCommandeUser($id)
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM commande WHERE idUser = ? ORDER BY dateCommande DESC');
        $stat->execute([$id]);
        return $stat->fetchAll();
    }
    static function getAll()
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM commande ORDER BY idCommande DESC ');
        $stat->execute([$id]);
        return $stat->fetchAll();
    }
    static function getByDate($date)
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM commande WHERE dateCommande = ?');
        $stat->execute([$date]);
        return $stat->fetchAll();
    }
    static function updateCommande($min,$max,$mont,$id)
    {
        global $db;
        $stat = $db->prepare('UPDATE frais set minMont=?, maxMont=?, frais=? WHERE idFrais=?');
        $stat->execute([$min,$max,$mont,$id]);
    }
    static function deleteCommande($id)
    {
        global $db;
        $stat = $db->prepare('DELETE FROM commande WHERE idCommande=?');
        $stat->execute([$id]);
    }
    static function insert($numeroCommande,$dateCommande,$fraisCommande,$montantCommande,$montantTotal,$idUser,$idLivraison,$paiment,$produit)
    {
        global $db;
        $stat = $db->prepare('INSERT INTO commande(numeroCommande,dateCommande,fraisCommande,montantCommande,montantTotal,idUser,idLivraison,paiement,produit) values(?,?,?,?,?,?,?,?,?)');
        $stat->execute([$numeroCommande,$dateCommande,$fraisCommande,$montantCommande,$montantTotal,$idUser,$idLivraison,$paiment,$produit]);
    }
}