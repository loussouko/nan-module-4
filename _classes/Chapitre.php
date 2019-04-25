<?php

class Chapitre{

	static function getAllChapitre(){
		global $db;
		$stat=$db->prepare("SELECT * FROM chapitre ");
		$stat->execute();

		return $stat->fetchAll();
	}

	static function getChapitreById($id){
		global $db;
		$stat=$db->prepare("SELECT * FROM chapitres WHERE id= $id ");
		$stat->execute();

		return $stat->fetch();
	}

	static function insertChapitre($nomChapitre){
		global $db;
		$stat=$db->prepare("INSERT INTO chapitres (nomChapitre) VALUES(?) ");
		$allCours=$stat->execute([$nomChapitre]);
	}

	static function deleteChapitre($id){
    global $db;
    $stat = $db->prepare('DELETE FROM chapitres WHERE id=?');
    $stat->execute([$id]);
  }
  

}
