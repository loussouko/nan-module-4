<?php
/**
 * Created by PhpStorm.
 * User: nan
 * Date: 12/04/2019
 * Time: 13:21
 */
isLogged();
 $course = Cours::getCours($_GET['id'], $_SESSION['user']['idNiveau']);
 if (!$course) { header('location:cours'); exit(); }
 $sousCourse = Cours::getAllCourseByMatiere($course['idMatiere'], $_SESSION['user']['idNiveau']);
if(empty($course['contentCours'])) $course['contentCours'] = "Contenu vide";