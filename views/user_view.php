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
    <link rel="stylesheet" href="assets/css/main.css">
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
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <div class="inputG">
                        <form action="user" method="post">
                            <select name="Level" id="Level">
                                <option value="">-Choisir Niveau-</option>
                                <?php
                                $niveau = Niveau::getAllNiveau();
                                //debug($niveau);
                                foreach($niveau as $niv):?>
                                    <option value="<?= $niv['idNiveau']; ?>"><?= $niv['libNiveau']; ?></option>
                                <?php endforeach;?>
                            </select>
                            <button type="submit" class="btn btn-light"> <i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <p class="mb-0 h4 text-primary text-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseTwo" style="cursor: pointer;">
                        Etudiant de la : <?php $lvl=Niveau::getNiveau($_SESSION['niv']); if($_POST['Level'] != ''){echo $lvl['libNiveau'];} ?>
                    </p>
                    </div>
                <div id="collapseOne" class="collapse "  data-parent="#accordionExample">
                    <div class="card-body">
                        <table class="table table-bordered table-striped ">
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>IsLock</th>
                                <th>Niveau</th>
                                <th>Actions</th>
                            </tr>
                            <tr>
                                <?php foreach($userNiv as $use):?>
                                <th><?= $use['nomUser'] ?></th>
                                <th><?= $use['prenomUser'] ?></th>
                                <th><?= $use['emailUser'] ?></th>
                                <th><img src="<?= $use['imgUser'] ?>" alt="" class="img-thumbnail" height="60" width="60"></th>
                                <th><?= $use['isLock'] ?></th>
                                <th><?php $lvl=Niveau::getNiveau($use['idNiveau']); echo $lvl['libNiveau']; ?></th>
                                <th>
                                    <a href="user-<?= $use['idUser'] ?>"><i class="fa fa-trash text-danger mr-4"></i></a>
                                    <?php
                                    if($use['isLock'] == 1):?>
                                        <a href="locked-<?= $use['idUser'] ?>"><i class="fa fa-lock text-warning mr-4"></i></a>
                                    <?php else: ?>
                                        <a href="unlocked-<?= $use['idUser'] ?>"><i class="fa fa-unlock text-success"></i></a>
                                    <?php endif; ?>
                                </th>
                            </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <p class="mb-0 h4 text-primary text-center" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="cursor: pointer;">
                            Tous les Etudiants
                    </p>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <table class="table table-bordered table-striped ">
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>IsLock</th>
                                <th>Niveau</th>
                                <th>Actions</th>
                            </tr>
                            <tr>
                                <?php foreach($users as $user):?>
                                <th><?= $user['nomUser'] ?></th>
                                <th><?= $user['prenomUser'] ?></th>
                                <th><?= $user['emailUser'] ?></th>
                                <th><img src="<?= $user['imgUser'] ?>" alt="" class="img-thumbnail" height="60" width="60"></th>
                                <th><?= $user['isLock'] ?></th>
                                <th><?php $lvl=Niveau::getNiveau($user['idNiveau']); echo $lvl['libNiveau']; ?></th>
                                <th>
                                    <a href="user-<?= $user['idUser'] ?>"><i class="fa fa-trash text-danger mr-4"></i></a>
                                    <?php
                                    if($user['isLock'] == 1):?>
                                        <a href="locked-<?= $user['idUser'] ?>"><i class="fa fa-lock text-warning mr-4"></i></a>
                                    <?php else: ?>
                                        <a href="unlocked-<?= $user['idUser'] ?>"><i class="fa fa-unlock text-success"></i></a>
                                    <?php endif; ?>
                                </th>
                            </tr>
                            <?php endforeach;?>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="assets/css/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<!-- Popper.JS -->
<script src="assets/css/bootstrap/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/css/bootstrap/js/bootstrap.min.js" ></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>

</html>