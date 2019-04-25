<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-COS</title>
    <link href="assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/css/fontawesome/js/all.js" ></script>
</head>
<body>
<?php require 'include/header.php'; ?>
<div class="container-fluid mx-2">
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Modifier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="commande-tab" data-toggle="tab" href="#commande" role="tab">Commande</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-6">
                            <label class="text-danger">Nom : </label>
                        </div>
                        <div class="col-6">
                            <p><?= $_SESSION['user']['nomUser']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="text-danger">Prenom : </label>
                        </div>
                        <div class="col-6">
                            <p><?= $_SESSION['user']['prenomUser']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="text-danger">Mail : </label>
                        </div>
                        <div class="col-6">
                            <p><?= $_SESSION['user']['mailUser']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="text-danger">Pays : </label>
                        </div>
                        <div class="col-6">
                            <p><?= $_SESSION['user']['paysUser']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="text-danger">Ville : </label>
                        </div>
                        <div class="col-6">
                            <p><?= $_SESSION['user']['villeUser']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="text-danger">Quartier : </label>
                        </div>
                        <div class="col-6">
                            <p><?= $_SESSION['user']['quartierUser']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="text-danger">Contact : </label>
                        </div>
                        <div class="col-6">
                            <p><?= $_SESSION['user']['contactUser']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="text-danger">Adresse: </label>
                        </div>
                        <div class="col-6">
                            <p><?= $_SESSION['user']['adresseUser']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="col-lg-4 offset-lg-4" style="margin-top: 10px;">
                        <form action="modifprofil" method="post" class="bg-warning" >
                            <h3 class="text-center text-light">MODIFIER VOS INFORMATIONS</h3>
                            <div class="form-group">
                                <label for="nom" class="col-form-label col-sm-12 text-center">Nom</label>
                                <div class="col-sm-12">
                                    <input type="text" id="nom" name="nom" class="form-control" value="<?= $_SESSION['user']['nomUser'] ?>">
                                    <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prenom" class="col-form-label col-sm-12 text-center">Prenom</label>
                                <div class="col-sm-12">
                                    <input type="text" id="prenom" name="prenom" class="form-control" value="<?= $_SESSION['user']['prenomUser']  ?>">
                                    <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mail" class="col-form-label col-sm-12 text-center">Email</label>
                                <div class="col-sm-12">
                                    <input type="text" id="mail" name="mail" class="form-control" value="<?= $_SESSION['user']['mailUser']  ?>">
                                    <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pays" class="col-form-label col-sm-12 text-center">Pays</label>
                                <div class="col-sm-12">
                                    <input type="text" id="pays" name="pays" class="form-control" value="<?= $_SESSION['user']['paysUser']  ?>">
                                    <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ville" class="col-form-label col-sm-12 text-center">Ville</label>
                                <div class="col-sm-12">
                                    <input type="text" id="ville" name="ville" class="form-control" value="<?= $_SESSION['user']['villeUser']  ?>">
                                    <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="quartier" class="col-form-label col-sm-12 text-center">Quartier</label>
                                <div class="col-sm-12">
                                    <input type="text" id="quartier" name="quartier" class="form-control" value="<?= $_SESSION['user']['quartierUser']  ?>">
                                    <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="number" class="col-form-label col-sm-12 text-center">Contact</label>
                                <div class="col-sm-12">
                                    <input type="number" id="number" name="number" class="form-control" value="<?= $_SESSION['user']['contactUser'] ?>">
                                    <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mdp" class="col-form-label text-center col-sm-12">Mot de passe</label>
                                <div class="col-sm-12">
                                    <input type="password" id="mdp" name="mdp" class="form-control" >
                                    <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-form-label col-sm-12 text-center">Adresse</label>
                                <div class="col-sm-12">
                                    <input type="text" id="address" name="address" class="form-control" value="<?= $_SESSION['user']['adresseUser']  ?>">
                                    <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success offset-4 my-2">Modifier</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="commande" role="tabpanel" aria-labelledby="commande-tab">
                    <table class="table table-success table-striped my-2 table-bordered">
                        <tr>
                            <th><i class="fa fa-qrcode mr-1"></i>Numero commande</th>
                            <th><i class="fa fa-calendar-alt mr-2"></i>Date de commande</th>
                            <th><i class="fa fa-money-check"></i>Montant total</th>
                            <th><i class="fa fa-cart-plus mr-2"></i>Jour de livraison</th>
                            <th><i class="fa fa-list mr-2"></i>Details produit</th>
                            <th><i class="fa fa-money-bill-alt mr-2"></i>Type de paiement</th>
                            <th><i class="fa fa-tasks mr-2"></i>Action</th>
                        </tr>
                        <tr>
                            <?php
                            $commande=Commande::getCommandeUser($_SESSION['user']['id']);
                            foreach($commande as $com):?>
                            <td><?= $com['numeroCommande'] ?></td>
                            <td><?= $com['dateCommande'] ?></td>
                            <td><?= $com['montantTotal'] ?> FCFA</td>
                            <td><?php $livraison=Livraison::getLivraisonId($com['idLivraison']); echo $livraison['joursLivraison']; ?></td>
                            <td style="overflow:hidden"><?= html_entity_decode($com['produit']); ?></td>
                            <td><?= $com['paiement'] ?></td>
                            <td><button class="btn btn-success" onclick="window.print();"><i class="fa fa-print"></i></button></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php require'include/footer.php'; ?>
    <script src="assets/css/bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="assets/css/bootstrap/js/popper.min.js"></script>
    <script src="assets/css/bootstrap/js/bootstrap.min.js" ></script>
</body>
</html>