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
<body>
<?php require'include/header.php'; ?>

<div class="container-fluid" style="margin-top: 15px;">
    <div class="row">
        <div class="col-lg-10 offset-lg-1  col-md-10 offset-md-1 col-sm-12">
            <div class="alert alert-success">
                <p class="text-danger text-center h5">PANIER</p>
            </div>
        </div>
        <table class="table table-bordered table-striped table-responsive-sm col-lg-10 offset-lg-1 col-sm-12 col-md-10 offset-md-1">
            <tr>
                <th>Nom du produit</th>
                <th>Quantite</th>
                <th>Prix</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
            <tr>
                <?php if(!empty($_SESSION['panier'])):?>
                <?php
                 $ids = array_keys($_SESSION['panier']);
                 $produits = Product::getProductpanier($ids);
                foreach($produits as $pr):?>
                <td><img src="<?= $pr['imageProduit'] ?>" alt="" width="40"><?= $pr['nomProduit'] ?></td>
                <td>
                    <form class=" form-inline" method="post" action="panier">
                        <input type="number" class="form-control col-4 shadow" name="qt" id="qt"  value="<?= $_SESSION['panier'][$pr['idProduit']]?>">
                        <input type="hidden" value="<?= $pr['idProduit'] ?>" name="id">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus text-light"></i></button>
                    </form>
                </td>
                <td><?= $pr['prixProduit'] ?> </td>
                <td><?= $_SESSION['panier'][$pr['idProduit']] * $pr['prixProduit']  ?> </td>
                <td>
                    <a href="deletepanier-<?= $pr['idProduit'] ?>"><i class="fa fa-trash text-danger fa-2x mr-4"></i></a>
                </td>
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
        <?php if(empty($_SESSION['panier'])):?>
        <div class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 col-sm-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <p class="text-center">Panier vide</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif;?>
        </div>
        <div class="col-8 offset-4">
            <?php if(isset($_SESSION['user']) && !empty($_SESSION['panier'])): ?>
            <button class="btn btn-success btn-lg" onclick="document.location.href='commande'">Solder</button>
            <button class="btn btn-danger btn-lg "onclick="document.location.href='viderpanier'">Vider le panier</button>
            <?php endif; ?>
        </div>
</div>
</div>
<?php require'include/footer.php';?>
<script src="assets/css/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="assets/css/bootstrap/js/popper.min.js"></script>
<script src="assets/css/bootstrap/js/bootstrap.min.js" ></script>
</body>
</html>