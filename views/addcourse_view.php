<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>

    <link href="assets/css/bootstrap/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/style2.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/ckeditor/sample/sample.css">
    <!-- Font Awesome JS -->
    <script defer src="assets/css/fontawesome/js/all.js" ></script>
</head>

<body>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Genschool</h3>
            <strong>SC</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="admindash">
                    <i class="fas fa-home"></i>
                    Acceuil
                </a>
            </li>
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-briefcase"></i>
                    Gestion des cours
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="addcourse">Ajouter des cours</a>
                    </li>
                    <li>
                        <a href="admin">Liste des cours</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="user">
                    <i class="fas fa-user-alt"></i>
                    Élèves </a>
            </li>
            <li>
                <a href="addmatiere">
                    <i class="fas fa-copy"></i>
                    Matieres
                </a>
            </li>
        </ul>

    </nav>

    <!-- Page Content  -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span></span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>
                <a class="btn btn-outline-dark my-2 my-sm-0" href="logout">Deconnexion</a>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 bg-light">
                    <form action="addcourse" method="post">
                        <h1 class="text-warning text-center">Ajouter des Cours</h1>
                        <fieldset>
                            <div class="form-group">
                                <label for="nom" class="col-form-label h5 col-sm-8" >Nom du cours:</label>
                                <input type="text" class="form-control shadow" name="nom" id="nom" placeholder="votre nom">
                            </div>
                            <div class="form-group">
                                <label for="mat" class="col-form-label h5 col-sm-4" >Matiere:</label>
                                <select class="form-control custom-select shadow" name="mat" id="mat">
                                    <option value="">-- Selectionnez la matiere --</option>
                                    <?php
                                    $matiere = Matiere::getAllMatiere();
                                    //debug($niveau);
                                    foreach($matiere as $mat):?>
                                        <option value="<?= $mat['idMatiere']; ?>"><?= $mat['libMatiere']; ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="niv" class="col-form-label h5 col-sm-8" >Niveau:</label>
                                <select class="form-control custom-select shadow" name="niv" id="niv">
                                    <option value="">-- Selectionnez le niveau --</option>
                                    <?php
                                    $niveau = Niveau::getAllNiveau();
                                    //debug($niveau);
                                    foreach($niveau as $niv):?>
                                        <option value="<?= $niv['idNiveau']; ?>"><?= $niv['libNiveau']; ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </fieldset>
                            <legend class="text-center text-primary">Contenu</legend>
                            <div class="form-group">
                                <textarea name="cont" class= "form-control shadow" id="cont" rows="20"></textarea>
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary ">Ajouter</button>
                            </div>
                        </fielset>

                    </form>
                </div>
    </div>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="assets/css/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<!-- Popper.JS -->
<script src="assets/css/bootstrap/js/popper.min.js"></script>
<!-- Bootstrap JS -->
        <script src="assets/css/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/ckeditor5/ckeditor.js"></script>

<script>
ClassicEditor.create(document.getElementById('cont'));
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>

</html>
