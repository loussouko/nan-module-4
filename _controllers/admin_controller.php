<?php
isAdmin();
if(isset($_POST) && !empty($_POST))
{
    $niv = checkInput($_POST['Level']);
    $mati = checkInput($_POST['mati']);
    if(!empty($niv) && !empty($mati))
    {
        $matNiv=Cours::getAllCourseByMatiere($mati,$niv);
        $_SESSION['niv'] = $niv;
        $_SESSION['mati'] = $mati;
    }
}
if(isset($_GET['id']) && !empty($_GET['id']))
{
    Cours::deleteCours($_GET['id']);
    header('Location: admin');
    exit();
}