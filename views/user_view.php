<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <link href="assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style2.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
    <script src="assets/css/fontawesome/js/all.js"></script>
    <style>
        img:hover
        {
            transform: scale(10,6);
        }
    </style>
</head>

<body>
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>E-COS</h3>
            <strong>EC</strong>
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
                    <i class="fa fa-store"></i>
                    Gestion des produits
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="addproduct">Ajouter des produits</a>
                    </li>
                    <li>
                        <a href="admin">Liste des produits</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="user">
                    <i class="fas fa-user-alt"></i>
                    Clients </a>
            </li>
            <li>
                <a href="addcategorie">
                    <i class="fas fa-copy"></i>
                    Categories
                </a>
            </li>
            <li>
                <a href="commandes">
                    <i class="fas fa-list"></i>
                    Commande
                </a>
            </li>
            <li>
                <a href="avis">
                    <i class="fas fa-inbox"></i>
                    Message
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
                    <form action="user" method="post" class="form-inline">
                        <input class="form-control col-4" type="search" placeholder="abidjan ou  cote d'ivoire ou yopougon " name="search">
                        <button class="btn btn-outline-success " type="submit"><i class=" fa fa-search"></i></button>
                    </form>
                    <p class="mb-0 h4 text-primary text-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseTwo" style="cursor: pointer;">
                        Liste des Clients par ville ou pays ou quartier.
                    </p>
                </div>
                <div id="collapseOne" class="collapse "  data-parent="#accordionExample">
                    <div class="card-body">
                        <table class="table table-bordered table-striped ">
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>Pays</th>
                                <th>Ville</th>
                                <th>Quartier</th>
                                <th>Contact</th>
                                <th>Adresse</th>
                                <th>isLock</th>
                                <th>Actions</th>
                            </tr>
                            <tr>
                                <?php
                                foreach($users as $use):?>
                                <th><?= $use['nomUser'] ?></th>
                                <th><?= $use['prenomUser'] ?></th>
                                <th><?= $use['mailUser'] ?></th>
                                <th><?= $use['paysUser'] ?></th>
                                <th><?= $use['villeUser'] ?></th>
                                <th><?= $use['quartierUser'] ?></th>
                                <th><?= $use['contactUser'] ?></th>
                                <th><?= $use['adresseUser'] ?></th>
                                <th><?= $use['isLock'] ?></th>
                                <th>
                                    <a href="user-<?= $use['id'] ?>"><i class="fa fa-trash text-danger mr-1"></i></a>
                                    <?php if($use['isLock'] == 1):?>
                                        <a href="locked-<?= $use['id'] ?>"><i class="fa fa-lock text-warning mr-4"></i></a>
                                    <?php else: ?>
                                        <a href="unlocked-<?= $use['id'] ?>"><i class="fa fa-unlock text-success"></i></a>
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
                        LISTE DES CLIENTS
                    </p>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <table class="table table-bordered table-striped ">
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>Pays</th>
                                <th>Ville</th>
                                <th>Quartier</th>
                                <th>Contact</th>
                                <th>Adresse</th>
                                <th>isLock</th>
                                <th>Actions</th>
                            </tr>
                            <tr>
                                <?php $user = User::getAllUsers();
                                foreach($user as $use):?>
                                <th><?= $use['nomUser'] ?></th>
                                <th><?= $use['prenomUser'] ?></th>
                                <th><?= $use['mailUser'] ?></th>
                                <th><?= $use['paysUser'] ?></th>
                                <th><?= $use['villeUser'] ?></th>
                                <th><?= $use['quartierUser'] ?></th>
                                <th><?= $use['contactUser'] ?></th>
                                <th><?= $use['adresseUser'] ?></th>
                                <th><?= $use['isLock'] ?></th>
                                <th>
                                    <a href="user-<?= $use['id'] ?>"><i class="fa fa-trash text-danger mr-2"></i></a>
                                    <?php if($use['isLock'] == 1):?>
                                        <a href="locked-<?= $use['id'] ?>"><i class="fa fa-lock text-warning "></i></a>
                                    <?php else: ?>
                                        <a href="unlocked-<?= $use['id'] ?>"><i class="fa fa-unlock text-success"></i></a>
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



<script src="assets/css/bootstrap/js/jquery-3.3.1.min.js"></script>
<script src="assets/css/bootstrap/js/popper.min.js"></script>
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
