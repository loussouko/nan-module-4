<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
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
        <div class="col-12 my-2">
            <p class="text-center text-warning h4" style="border-bottom: 5px solid orange">QUI SOMMES NOUS</p>
            <ul class="nav nav-pills d-flex justify-content-center">
                <li class="nav-item"><a href="#vison" class="nav-link text-warning">Notre Vison</a></li>
                <li class="nav-item"><a href="#story" class="nav-link text-warning">Notre Histoire</a></li>
            </ul>
        </div>
        <div class="col-12" style="background: url('assets/img/banniere.png') no-repeat ; background-size:cover; height: 240px;" id="vison">
            <div class="offset-6 col-6" style="background: orange; height: 240px; position:absolute; opacity: 0.8;">
                <p class="text-center" style="border: 2px solid white; border-radius: 10px; width: 500px; margin: 80px auto;" ><i class="fas fa-glasses text-light fa-2x"></i><br>
                    <span class="h4 text-light" style="margin-top:15px;">Notre vision </span><br>
                    <strong class="text-center text-light" style="padding-top: 15px;">Promouvoir la construction en Afrique.</strong></p>
            </div>
        </div>
        <div class="col-12 " id="story" style="margin-top: 60px;">
              <div class="jumbotron">
                  <p class="text-center text-warning h4" style="margin-top: -100px;"><img src="assets/img/story.png" alt=""><br>
                  Notre histoire</p>
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-6 col-lg-6">
                              <ul>
                                  <li style="font-size: 15px;">E-COS le site de e-commerce N° 1 en Côte d'Ivoire a été créé en mai 2019 dans le but
                                      de faciliter l'achat des materiaux pour la construction ce qui serait une reduction du manque de logement en Cote d'ivoire.
                                  </li>
                                  <li style="font-size: 15px;">Nos moyens de paiement sont bases sur le cash pour l'instant car nous privilegions la securite, avec
                                  les arnaques auquels nous assistons sur l'internet.</li>
                              </ul>
                          </div>
                          <div class="col-6 col-lg-6">
                              <ul>
                                  <li style="font-size: 15px;">Initialement realise sur la demande de l'ecole de programmation Nan, cette plateforme
                                      a ete realise par un etudiant de cette ecole dans les plus brefs delais.
                                  </li>
                                  <li style="font-size: 15px;">Nous effectuons notre livraison des produits dans les plus brefs delais, le maximum une semaine
                                  pour satisfait nos clients.</li>
                              </ul>
                          </div>
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

</script>
</body>
</html>