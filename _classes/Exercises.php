<?php 

class Exercices {

    static function getAllExerciceByChapitres($idChapitres)
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM exercices WHERE idChapitre = ?');
        $stat->execute([$idChapitres]);
        return $stat->fetchAll()();
    }   
  
    static function insertExercice($reqContenteExo,$reqidChapitre)
    {
        global $db;
        $stat = $db->prepare('INSERT INTO exercices (contentExo,idChapitre) VALUES(?,?)');
        $stat->execute([$reqContenteExo,$reqidChapitre]);
        return $stat->fetch();
  
    }

    static function deleteExercice($idExercise)
    {
        global $db;
        $stat = $db->prepare('DELETE FROM exercices WHERE idExo =  ?');
        $stat->execute([$idExercise]);
        return $stat->fetchAll();
    }

    static function updateExercice($idExercise,$reqLibExercice,$reqidChapitre)
    {
      global $db;
      $stat = $db->prepare('UPDATE exercices SET contentExo =? , idChapitre = ? WHERE idExo = ?');
      $stat->execute([$reqLibExercice,$reqidChapitre,$idExercise]);
      return $stat->fetchAll();
    }
}