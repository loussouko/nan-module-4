<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
       img:hover
       {
           transform: scale(2,1);
       }
    </style>
</head>
<body>
<?php require'include/header.php'; ?>
<div class="container">
    <div class="row">
        <div class=" row product product-details clearfix">
            <div class="col-md-6">
                <div id="product-view">
                    <div class="product-view">
                        <img src="<?= $produits['imageProduit'] ?>">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-body">
                    <h2 class="product-name font-weight-bold"><?= $produits['nomProduit'] ?></h2>
                    <h3 class="product-price text-danger">Prix: <?= $produits['prixProduit'] ?> FCFA </h3>
                    <div>
                    </div>
                    <p><strong class="text-success">Stock:</strong> <?= $produits['stockProduit'] ?></p>
                    <p><strong>Details:</strong><?= $produits['detailProduit'] ?></p>
                    <div class="product-btns">
                        <button class="btn btn-warning"><a onclick="confirms(<?= $produits['idProduit'] ?>,'<?= $uri ?>','<?= $urs ?>',<?= $url ?>)" ><i class="fa fa-shopping-cart"></i> Ajouter</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require'include/footer.php'; ?>
<script src="assets/css/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="assets/css/bootstrap/js/popper.min.js"></script>
<script src="assets/css/bootstrap/js/bootstrap.min.js" ></script>
<script>
function confirms(id,req,urs,url)
{
var action = confirm("Produit ajouter avec succes.\rVoulez vous visitez votre panier?");
if(action)
{
document.location.href= 'panier-'+id;
}
else if(req !== 'detailproduct')
{
document.location.href= 'panier-'+urs+'-'+id+'-'+url;
}
else {
document.location.href= 'panier-'+req+'-'+id;
}
}
</script>
</body>
</html>