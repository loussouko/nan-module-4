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
        <div class="col-lg-1 "></div>
        <div class="col-lg-11 col-12">
            <div class="row">
                <?php $brouettes = Product::getProductByCategory(4); foreach ($brouettes as $brouette): ?>
                    <div class="col-lg-2 mx-4 my-2">
                        <div class="card" style="width: 16rem;" >
                            <img src="<?= $brouette['imageProduit'] ?>" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5><?= $brouette['nomProduit'] ?></h5>
                                <p class="card-text text-danger h5 text-center"><?= $brouette['prixProduit'] ?> FCFA</p>
                                <a href="detailproduct-<?= $brouette['idProduit']?>" class="btn btn-primary"><i class="fa fa-list"></i>Details</a>
                                <?php if($brouette['stockProduit'] != 'epuise'): ?>
                                    <a onclick="confirms(<?= $brouette['idProduit'] ?>,'<?= $uri ?>','<?= $urs ?>',<?= $url ?>)" class="btn btn-warning"><i class="fa fa-shopping-cart text-light"></i>Ajouter</a>
                                <?php else: ?>
                                    <p class="card-text text-danger h5 text-center">Stock epuise</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
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
        else if(req !== 'brouette')
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