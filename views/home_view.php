<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-COS</title>
    <link href="assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
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

<div class="container-fluid mx-2">
    <div class="row">
        <div class="col-12">
            <div class="carousel slide" data-ride="carousel" id="carousel" style="height: 520px;">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active bg-danger"></li>
                    <li data-target="#carousel" data-slide-to="1" class="bg-danger"></li>
                    <li data-target="#carousel" data-slide-to="2" class="bg-danger"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/card1.jpg" class="d-block w-100 " style="height: 420px;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/card2.jpg" class="d-block w-100 img-fluid" style="height: 420px;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/card3.jpg" class="d-block w-100">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-danger" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
                <div class="col-lg-1"></div>
        <div class="col-lg-11 col-12">
            <div class="row">
                <?php  $uri; foreach ($produits as $pr): ?>
                    <div class="col-lg-2 mx-4 my-2">
                        <div class="card" style="width: 16rem;">
                            <img src="<?= $pr['imageProduit'] ?>" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5><?= $pr['nomProduit'] ?></h5>
                                <p class="card-text text-danger h5 text-center"><?= $pr['prixProduit'] ?> FCFA</p>
                                <a href="detailproduct-<?= $pr['idProduit']?>" class="btn btn-primary"><i class="fa fa-list"></i>Details</a>
                                <?php if($pr['stockProduit'] != 'epuise'): ?>
                                <a onclick="confirms(<?= $pr['idProduit'] ?>,'<?= $uri ?>','<?= $urs ?>',<?= $url ?>)" class="btn btn-warning"><i class="fa fa-shopping-cart text-light"></i>Ajouter</a>
                                <?php else: ?>
                                <p class="card-text text-danger h5 text-center">Stock epuise</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
            <ul class="pagination offset-4">
                <?php for($i=1; $i<=$nbpage ; $i++ ): ?>
                <li class="page-item"><a class="page-link" href="home-<?= $i ?>"><?=$i ?></a></li>
                <?php endfor; ?>
            </ul>
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
        else if(req !== 'home')
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