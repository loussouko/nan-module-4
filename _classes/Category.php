<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 19/04/2019
 * Time: 21:19
 */
class Category
{

    static  function insert($nomCategorie)
    {
        global $db;
        $stat = $db->prepare('INSERT INTO categorie (nomCategorie) VALUES(?)');
        $stat->execute([$nomCategorie]);
    }
    static function update($nomCategorie,$id)
    {
        global $db;
        $stat = $db->prepare('UPDATE categorie SET nomCategorie=? WHERE idCategorie=?');
        $stat->execute([$nomCategorie,$id]);
    }
    static function  delete($id)
    {
        global $db;
        $stat = $db->prepare('DELETE FROM categorie WHERE idCategorie=?');
        $stat->execute([$id]);
    }
    static  function getAllCategory()
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM categorie');
        $stat->execute([]);
        return $stat->fetchAll();
    }
    static  function getCategoryById($id)
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM categorie WHERE idCategorie= ?');
        $stat->execute([$id]);
        return $stat->fetch();
    }
    static  function getNomCategory($id)
    {
        global $db;
        $stat = $db->prepare('SELECT nomCategorie FROM categorie WHERE idCategorie= ?');
        $stat->execute([$id]);
        return $stat->fetch();
    }

}