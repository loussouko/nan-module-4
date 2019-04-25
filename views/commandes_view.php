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
                    <form action="commandes" method="post" class="form-inline">
                            <input class="form-control" type="search" placeholder="<?php $datenow = date('Y-m-d'); echo $datenow ?>" name="search">
                        <button class="btn btn-outline-success " type="submit"><i class=" fa fa-search"></i></button>
                    </form>
                    <p class="mb-0 h4 text-primary text-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseTwo" style="cursor: pointer;">
                        Commande du: <?php if($_POST['search'] != ''){echo $_SESSION['date'];} ?>
                    </p>
                </div>
                <div id="collapseOne" class="collapse "  data-parent="#accordionExample">
                    <div class="card-body">
                        <table class="table table-hover table-striped my-2 table-bordered table-responsive">
                            <tr>
                                <th><i class="fa fa-qrcode mr-1"></i>Numero commande</th>
                                <th><i class="fa fa-calendar-alt mr-2"></i>Date de commande</th>
                                <th><i class="fa fa-money-check"></i>Montant total</th>
                                <th><i class="fa fa-cart-plus mr-2"></i>Jour de livraison</th>
                                <th><i class="fa fa-list mr-2"></i>Details produit</th>
                                <th><i class="fa fa-money-bill-alt mr-2"></i>Type de paiement</th>
                                <th><i class="fa fa-user-circle mr-2"></i>Nom clients</th>
                                <th><i class="far fa-address-card mr-2"></i>Adresse clients</th>
                                <th><i class="fa fa-code mr-2"></i>Pays clients</th>
                                <th><i class="fa fa-city mr-2"></i>Ville clients</th>
                                <th><i class="fa fa-users mr-2"></i>Quartier clients</th>
                                <th><i class="fa fa-phone mr-2"></i>Contacts clients</th>
                            </tr>
                            <tr>
                                <?php
                                foreach($coms as $com):?>
                                <td><?= $com['numeroCommande'] ?></td>
                                <td><?= $com['dateCommande'] ?></td>
                                <td><?= $com['montantTotal'] ?> FCFA</td>
                                <td><?php $livraison=Livraison::getLivraisonId($com['idLivraison']); echo $livraison['joursLivraison'] ?></td>
                                <td><?= $com['produit'] ?></td>
                                <td><?= $com['paiement'] ?></td>
                                <td><?php $user=User::getUserById($com['idUser']); echo $user['nomUser'] ?></td>
                                <td><?php $user=User::getUserById($com['idUser']); echo $user['adresseUser'] ?></td>
                                <td><?php $user=User::getUserById($com['idUser']); echo $user['paysUser'] ?></td>
                                <td><?php $user=User::getUserById($com['idUser']); echo $user['villeUser'] ?></td>
                                <td><?php $user=User::getUserById($com['idUser']); echo $user['quartierUser'] ?></td>
                                <td><?php $user=User::getUserById($com['idUser']); echo $user['contactUser'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <p class="mb-0 h4 text-primary text-center" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="cursor: pointer;">
                        LISTE DES COMMANDES
                    </p>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <table class="table table-hover table-striped my-2 table-bordered table-responsive">
                            <tr>
                                <th><i class="fa fa-qrcode mr-1"></i>Numero commande</th>
                                <th><i class="fa fa-calendar-alt mr-2"></i>Date de commande</th>
                                <th><i class="fa fa-money-check"></i>Montant total</th>
                                <th><i class="fa fa-cart-plus mr-2"></i>Jour de livraison</th>
                                <th><i class="fa fa-list mr-2"></i>Details produit</th>
                                <th><i class="fa fa-money-bill-alt mr-2"></i>Type de paiement</th>
                                <th><i class="fa fa-user-circle mr-2"></i>Nom clients</th>
                                <th><i class="far fa-address-card mr-2"></i>Adresse clients</th>
                                <th><i class="fa fa-code mr-2"></i>Pays clients</th>
                                <th><i class="fa fa-city mr-2"></i>Ville Clients</th>
                                <th><i class="fa fa-users mr-2"></i>Quartier clients</th>
                                <th><i class="fa fa-phone mr-2"></i>Contacts Clients</th>
                            </tr>
                            <tr>
                                <?php
                                $commande=Commande::getAll();
                                foreach($commande as $com):?>
                                <td><?= $com['numeroCommande']; ?></td>
                                <td><?= $com['dateCommande']; ?></td>
                                <td><?= $com['montantTotal']; ?> FCFA</td>
                                <td><?php $livraison=Livraison::getLivraisonId($com['idLivraison']); echo $livraison['joursLivraison']; ?></td>
                                <td style="overflow:hidden;"><?= html_entity_decode($com['produit']); ?></td>
                                <td><?= $com['paiement'] ?></td>
                                <td><?php $user=User::getUserById($com['idUser']); echo $user['nomUser']; ?></td>
                                <td><?php $user=User::getUserById($com['idUser']); echo $user['adresseUser']; ?></td>
                                <td><?php $user=User::getUserById($com['idUser']); echo $user['paysUser']; ?></td>
                                <td><?php $user=User::getUserById($com['idUser']); echo $user['villeUser'] ?></td>
                                <td><?php $user=User::getUserById($com['idUser']); echo $user['quartierUser'] ?></td>
                                <td><?php $user=User::getUserById($com['idUser']); echo $user['contactUser'] ?></td>
                            </tr>
                            <?php endforeach; ?>
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
