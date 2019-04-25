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

  static function insertUser($nom,$prenom,$mail,$pays,$ville,$quartier,$contact,$mdp,$adresse)
  {
    global $db;
    $type = 2;
    $stat = $db->prepare('INSERT INTO users (nomUser,prenomUser,mailUser,paysUser,VilleUser,quartierUser,contactUser,passeUser,adresseUser,typeUser) VALUES(?,?,?,?,?,?,?,?,?,?)');
    $stat->execute([$nom,$prenom,$mail,$pays,$ville,$quartier,$contact,$mdp,$adresse,$type]);
  }


  static function deleteUser($id)
  {
    global $db;
    $stat = $db->prepare('DELETE FROM users WHERE id=?');
    $stat->execute([$id]);
  }
  static function bloquerUser($id)
    {
        global $db;
        $act=0;
        $stat = $db->prepare('UPDATE users set isLock=? WHERE id=?');
        $stat->execute([$act,$id]);
    }
    static function debloquerUser($id)
    {
        global $db;
        $act=1;
        $stat = $db->prepare('UPDATE users set isLock=? WHERE id=? ');
        $stat->execute([$act,$id]);
    }

  static function getUserById($id)
  {
    global $db;
    $stat = $db->prepare('SELECT * FROM users WHERE id=?');
    $stat->execute([$id]);
    return $stat->fetch();
  }
  static function getUser($mail,$passwd)
  {
    global $db;
    $stat = $db->prepare('SELECT * FROM users WHERE mailUser = ? and passeUser = ?');
    $stat->execute([$mail,$passwd]);
    return $stat->fetch();
  }

  static function updateUser($nom,$prenom,$mail,$pays,$ville,$quartier,$contact,$mdp,$adresse,$id)
  {
    global $db;
    $stat = $db->prepare('UPDATE users SET nomUser = ?,prenomUser=?,mailUser=?,paysUser=?,villeUser=?,quartierUser=?,contactUser=?,passeUser=?,adresseUser=? WHERE id=?');
    $stat->execute([$nom,$prenom,$mail,$pays,$ville,$quartier,$contact,$mdp,$adresse,$id]);
  }
    static function resetmdp($mail,$mdp)
    {
        global $db;
        $stat = $db->prepare('UPDATE users SET passeUser=? WHERE mailUser=?');
        $stat->execute([$mdp,$mail]);
    }
    static function searchUser($recherche)
    {
        global $db;
        $type = 2;
        $stat = $db->prepare('SELECT * FROM users WHERE  quartierUser LIKE ? AND typeUser = ? OR villeUser LIKE ? AND typeUser = ? OR paysUser LIKE ? AND typeUser = ?');
        $stat->execute(['%'.$recherche.'%',$type,'%'.$recherche.'%',$type,'%'.$recherche.'%',$type]);
        return $stat->fetchAll();

    }
}