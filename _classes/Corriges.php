<?php

class Corriges {


    static function getAllCorrigeByExercice($idExercice)
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM corriges WHERE idExo = ?');
        $stat->execute([$idExercice]);
        return $stat->fetchAll();
    }   
  
    static function insertCorrige($reqLibExercice,$reqidChapitre)
    {
        global $db;
        $stat = $db->prepare('INSERT INTO corriges (contentExo,idCours) VALUES(?,?)');
        $stat->execute([$reqLibExercice,$reqidChapitre]);
        return $stat->fetch();
  
    }

    static function deleteorrige($idCorriges)
    {
        global $db;
        $stat = $db->prepare('DELETE FROM corriges WHERE idCorr =  ?');
        $stat->execute([$idCorriges]);
        return $stat->fetchAll();
    }

    static function updateCorrige($idExercise,$reqLibExercice,$reqidChapitre)
    {
      global $db;
      $stat = $db->prepare('UPDATE corriges SET contentExo=?, idChapitre = ? WHERE idExo = ?');
      $stat->execute([$reqLibExercice,$reqidChapitre,$idExercise]);
      return $stat->fetchAll();
    }
}