<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 20/04/2019
 * Time: 19:06
 */

class Frais
{
   static function getFrais($mont)
   {
       global $db;
       $stat = $db->prepare('SELECT frais FROM frais WHERE minMont <= ? AND maxMont >= ?');
       $stat->execute([$mont,$mont]);
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
        $stat = $db->prepare('DELETE FROM frais WHERE idFrais=?');
        $stat->execute([$id]);
    }
    static function insert($min, $max,$mont)
    {
        global $db;
        $stat = $db->prepare('INSERT INTO frais(minMont,maxMont,frais) values(?,?,?)');
        $stat->execute([$min,$max,$mont]);
    }

}