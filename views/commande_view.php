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
    <style>
        .card:hover
        {
            background-color: #1c7430;
        }
    </style>
</head>
<body class="bg-warning">
<?php require'include/header.php'; ?>

<div class="container-fluid" style="margin-top: 15px;">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="alert alert-success">
                <p class="text-danger text-center h5">COMMANDE</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 bg-light">
            <h5 class="text-center text-danger">Informations personnelles</h5>
           <table class="table table-striped table-success table-responsive ">
               <tr>
                   <th>Nom</th>
                   <th>Prenom</th>
                   <th>Mail</th>
                   <th>Pays</th>
                   <th>Ville</th>
                   <th>Quartier</th>
                   <th>Contact</th>
                   <th>Adresse</th>
               </tr>
               <tr>
                   <td><?= $_SESSION['user']['nomUser'] ?></td>
                   <td><?= $_SESSION['user']['prenomUser'] ?></td>
                   <td><?= $_SESSION['user']['mailUser'] ?></td>
                   <td><?= $_SESSION['user']['paysUser'] ?></td>
                   <td><?= $_SESSION['user']['villeUser'] ?></td>
                   <td><?= $_SESSION['user']['quartierUser'] ?></td>
                   <td><?= $_SESSION['user']['contactUser'] ?></td>
                   <td><?= $_SESSION['user']['adresseUser'] ?></td>
               </tr>
           </table>
            <h5 class="text-center text-danger">Informations produits</h5>
            <table class="table table-bordered table-striped table-success">
                <tr>
                    <th>Nom du produit</th>
                    <th>Quantite</th>
                    <th>Prix</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <?php if(!empty($_SESSION['panier'])):?>
                    <?php
                    $ids = array_keys($_SESSION['panier']);
                    $produits = Product::getProductpanier($ids);
                    foreach($produits as $pr):?>
                    <td><img src="<?= $pr['imageProduit'] ?>" alt="" width="40"><?= $pr['nomProduit'] ?></td>
                    <td><?= $_SESSION['panier'][$pr['idProduit']]?></td>
                    <td><?= $pr['prixProduit'] ?> </td>
                    <td><?= $_SESSION['panier'][$pr['idProduit']] * $pr['prixProduit']  ?> </td>
                </tr>
                <?php endforeach;?>
                <?php endif;?>
                <tr>
                    <td></td>
                    <th rowspan="2" class="text-danger bg-warning ">Quantite total : <?= Panier::quantiteProduct() ?> </th>
                    <td></td>
                    <th rowspan="2" class="text-danger bg-warning">Prix Total: <?= Panier::totalProduct() ?> FCFA </th>
                </tr>
            </table>
        </div>
        <div class="col-6 bg-success">
            <form action="commande" method="post" class="bg-success">
                <h3 class="text-center text-light">CONFIRMEZ COMMANDE</h3>
                <div class="form-group">
                    <label for="nc" class="col-form-label col-sm-12 text-center ">Numero commande</label>
                    <div class="col-sm-12">
                        <input type="number" id="nc" name="nc" class="form-control rounded rounded-pill" value="<?= rand(); ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="dc" class="col-form-label col-sm-12 text-center">Date de commande</label>
                    <div class="col-sm-12">
                        <input type="date" id="dc" name="dc" class="form-control rounded rounded-pill" value="<?php $datenow = date('Y-m-d'); echo $datenow ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fc" class="col-form-label col-sm-12 text-center">Frais de commande</label>
                    <div class="col-sm-12">
                        <input type="number" id="fc" name="fc" class="form-control rounded rounded-pill" value="<?php $frais=Frais::getFrais(Panier::totalProduct()); echo $frais['frais']?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mc" class="col-form-label col-sm-12 text-center">Montant commande</label>
                    <div class="col-sm-12">
                        <input type="number" id="mc" name="mc" class="form-control rounded rounded-pill" value="<?= Panier::totalProduct() ?>" readonly>
                        <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mc" class="col-form-label col-sm-12 text-center">Montant totale</label>
                    <div class="col-sm-12">
                        <input type="number" id="mt" name="mt" class="form-control rounded rounded-pill" value="<?php $frais=Frais::getFrais(Panier::totalProduct()); echo $frais['frais'] + Panier::totalProduct(); ?>" readonly>
                        <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cp" class="col-form-label col-sm-12 text-center">Choix de paiement</label>
                    <div class="col-sm-12">
                        <input type="text" id="cp" name="cp" class="form-control rounded rounded-pill" value="A La Livraison" readonly>
                        <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="jl" class="col-form-label col-sm-12 text-center">Jour de livraison</label>
                    <div class="col-sm-12">
                    <select class="form-control custom-select shadow rounded rounded-pill" name="jl" id="jl">
                        <option value="">-- Selectionnez le jour de la livraison --</option>
                        <?php
                        $livraison = Livraison::getLivraison();
                        //debug($niveau);
                        foreach($livraison as $lv):?>
                            <option value="<?= $lv['idLivraison']; ?>"><?= $lv['joursLivraison']; ?></option>
                        <?php endforeach;?>
                    </select>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="hidden" id="id" name="id" class="form-control" value="<?= $_SESSION['user']['id'] ?>">
                            <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="jl" class="col-form-label col-sm-12 text-center">Produit</label>
                            <textarea name="cont" class= "form-control shadow" id="cont" rows="20" readonly>
                                <table>
                                    <tr>
                                        <th>nom Produit</th>
                                        <th>Quantite</th>
                                    </tr>
                                    <tr>
                                         <?php
                                         $ids = array_keys($_SESSION['panier']);
                                         $produits = Product::getProductpanier($ids);
                                         foreach($produits as $pr):?>
                                        <td><?= $pr['nomProduit']?></td>
                                        <td><?= $_SESSION['panier'][$pr['idProduit']]?></td>
                                    </tr>
                                    <?php endforeach;?>
                                </table>
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="button" onclick="document.location.href='panier'" class=" btn btn-primary btn-lg offset-4 rounded-pill">Annuler</button>
                    <button type="submit" class="btn btn-danger btn-lg rounded-pill">Confirmer</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <?php require'include/footer.php'; ?>
    <script src="assets/css/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/css/bootstrap/js/popper.min.js"></script>
    <script src="assets/css/bootstrap/js/bootstrap.min.js" ></script>
<script src="assets/ckeditor5/ckeditor.js"></script>
<script>
    ClassicEditor.create(document.getElementById('cont'));
</script>
</body>
</html>