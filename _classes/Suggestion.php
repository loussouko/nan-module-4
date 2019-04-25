<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 23/04/2019
 * Time: 20:53
 */

class Suggestion
{
    static function insertMessage($nom,$prenom,$mail,$contact,$message)
    {
        global $db;
        $stat = $db->prepare('INSERT INTO suggestion (nom,prenom,mail,contact,message) VALUES(?,?,?,?,?)');
        $stat->execute([$nom,$prenom,$mail,$contact,$message]);
    }
    static function deleteMessage($id)
    {
        global $db;
        $stat = $db->prepare('DELETE FROM suggestion WHERE id=?');
        $stat->execute([$id]);
    }
    static function getAllMessage()
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM suggestion');
        $stat->execute([]);
        return $stat->fetchAll();
    }
    static  function getAllMessageByPages($debut,$fin)
    {
        global $db;
        $deb = ($debut-1)*$fin;
        $stat = $db->query("SELECT * FROM suggestion ORDER BY id ASC LIMIT $deb,$fin");
        return $stat->fetchall();
    }
}