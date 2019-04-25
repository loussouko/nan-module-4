<?php 

class User
{
  static function getLastId()
  {
    global $db;
    $stat = $db->prepare('SELECT MAX(id) FROM users');
    $stat->execute([]);
    return $stat->fetch();
  }

  static function getAllUsers()
  {
    global $db;
    $f = 2;
    $stat = $db->prepare('SELECT * FROM users WHERE typeUser= ?');
    $stat->execute([$f]);
    return $stat->fetchAll();
  }

  static function insertUser($reqNom,$reqPrenom,$reqEmail,$reqMdp,$reqImg,$reqNiv)
  {
    global $db;
    $type = 2;
    $stat = $db->prepare('INSERT INTO users (nomUser,PrenomUser,emailUser,mdpUser,imgUser,typeUser,idNiveau) VALUES(?,?,?,?,?,?,?)');
    $stat->execute([$reqNom,$reqPrenom,$reqEmail,$reqMdp,$reqImg,$type,$reqNiv]);
  }


  static function deleteUser($id)
  {
    global $db;
    $stat = $db->prepare('DELETE FROM users WHERE idUser=?');
    $stat->execute([$id]);
  }
  static function bloquerUser($id)
    {
        global $db;
        $act=0;
        $stat = $db->prepare('UPDATE users set isLock=? WHERE idUser=?');
        $stat->execute([$act,$id]);
    }
    static function debloquerUser($id)
    {
        global $db;
        $act=1;
        $stat = $db->prepare('UPDATE users set isLock=? WHERE idUser=? ');
        $stat->execute([$act,$id]);
    }

  static function getUserById($id)
  {
    global $db;
    $stat = $db->prepare('SELECT * FROM users WHERE idUser=?');
    $stat->execute([$id]);
    return $stat->fetch();
  }
    static function getUserByNiv($niv)
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM users WHERE idNiveau=?');
        $stat->execute([$niv]);
        return $stat->fetchAll();
    }

  static function getUser($mail, $passwd)
  {
    global $db;
    $stat = $db->prepare('SELECT * FROM users WHERE emailUser = ? and mdpUser  = ?');
    $stat->execute([$mail, $passwd]);
    return $stat->fetch();
  }

  static function updateUser($nom,$prenom,$mail,$contact,$image,$statut,$active,$mdp,$id)
  {
    global $db;
    $stat = $db->prepare('UPDATE users SET nom=?, prenoms=?, contact=?, image=?, statut=?, password=? WHERE id=?');
    $stat->execute([$nom,$prenom,$mail,$contact,$image,$statut,$active,$mdp,$id]);
  }
}