<?php
isLogged();
    $idNiveau=$_SESSION['user']['idNiveau'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search']) && $_POST['search'] != null) {
      $_SESSION['search'] = $_POST['search'];
    }
    
    if (isset($_SESSION['search'])) {
      $matieres = Cours::searchMatiere($_SESSION['search']);
      unset($_SESSION['search']);
    } else {
      $matieres = Matiere::getAllMatiere();
    }
    