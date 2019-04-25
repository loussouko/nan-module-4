<?php

class Niveau {

    static function getAllNiveau()
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM niveau');
        $stat->execute();
        return $stat->fetchAll();
    }

    static function getNiveau($id)
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM niveau WHERE idNiveau = ?');
        $stat->execute([$id]);
        return $stat->fetch();
    }

    
  
    static function insertNiveau($reqLibelleNiveau)
    {
        global $db;
        $stat = $db->prepare('INSERT INTO niveau (libelleNiveau) VALUES(?)');
        $stat->execute([$reqLibelleNiveau]);
        return $stat->fetchAll();
  
    }

    static function deleteNiveau($idNiveau)
    {
        global $db;
        $stat = $db->prepare('DELETE FROM niveau WHERE idNiveau =  ?');
        $stat->execute([$idNiveau]);
        return $stat->fetchAll();
    }

    static function updateNiveau($reqLibNiveau,$reqIdNiveau)
    {
      global $db;
      $stat = $db->prepare('UPDATE niveau SET libelleNiveau=?,  WHERE idNiveau=?');
      $stat->execute([$reqLibNiveau,$reqIdNiveau]);
      return $stat->fetchAll();
    }
}