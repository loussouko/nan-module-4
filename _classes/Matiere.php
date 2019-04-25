<?php

Class Matiere {

    static function getAllMatiereByNiveau($idNiveau)
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM matiere WHERE idNiveau = ?');
        $stat->execute([$idNiveau]);
        return $stat->fetchAll();
    }
    static function getMatiere($id)
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM matiere WHERE idMatiere = ?');
        $stat->execute([$id]);
        return $stat->fetch();
    }
    static function getAllMatiere()
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM matiere');
        $stat->execute();
        return $stat->fetchAll();
    }

    static function insertMatiere($reqLibMatiere,$reqImgMatiere)
    {
        global $db;
        $stat = $db->prepare('INSERT INTO matiere (libMatiere,imgMatiere) VALUES(?,?)');
        $stat->execute([$reqLibMatiere,$reqImgMatiere]);
    }

    static function deleteMatiere($idMatiere)
    {
        global $db;
        $stat = $db->prepare('DELETE FROM cours WHERE idMatiere  = ?');
        $stat->execute([$idMatiere]);
        $stat = $db->prepare('DELETE FROM matiere WHERE idMatiere  = ?');
        $stat->execute([$idMatiere]);
    }

    static function updateMatiere($idMatiere,$reqLibMatiere,$imgMatiere)
    {
      global $db;
      $stat = $db->prepare('UPDATE matiere SET libMatiere=?, imgMatiere=? WHERE idMatiere=?');
      $stat->execute([$reqLibMatiere,$imgMatiere,$idMatiere]);
    }
    
}