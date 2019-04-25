<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 20/04/2019
 * Time: 19:17
 */

class Livraison
{
    static function getLivraison()
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM livraison ');
        $stat->execute([]);
        return $stat->fetchAll();
    }
    static function getLivraisonId($id)
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM livraison WHERE idLivraison=? ');
        $stat->execute([$id]);
        return $stat->fetch();
    }

    static function update($min,$max,$mont,$id)
    {
        global $db;
        $stat = $db->prepare('UPDATE frais set minMont=?, maxMont=?, frais=? WHERE idFrais=?');
        $stat->execute([$min,$max,$mont,$id]);
    }
    static function delete($id)
    {
        global $db;
        $stat = $db->prepare('DELETE FROM livraison WHERE idLivraison=?');
        $stat->execute([$id]);
    }
    static function insert($jours)
    {
        global $db;
        $stat = $db->prepare('INSERT INTO frais(joursLivraison) values(?)');
        $stat->execute([$jours]);
    }
}