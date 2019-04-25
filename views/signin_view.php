<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-COS</title>
    <link href="assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
    <script src="assets/css/fontawesome/js/all.js" ></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home" style="margin-top: -10px;"><img src="assets/img/logo.png" alt="" height="40"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Content" aria-controls="Content">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="Content">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="container-fluid mx-2">
    <div class="row">
        <div class="col-lg-4 offset-lg-4" style="margin-top: 10px;">
            <form action="signin" method="post" class="bg-warning" >
                <h3 class="text-center text-light">INSCRIVEZ-VOUS</h3>
                <div class="form-group">
                    <label for="nom" class="col-form-label col-sm-12 text-center">Nom</label>
                    <div class="col-sm-12">
                        <input type="text" id="nom" name="nom" class="form-control" value="<?= $nom ?>">
                        <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"><?= $nomError ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="prenom" class="col-form-label col-sm-12 text-center">Prenom</label>
                    <div class="col-sm-12">
                        <input type="text" id="prenom" name="prenom" class="form-control" value="<?= $prenom ?>">
                        <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"><?= $prenomError ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mail" class="col-form-label col-sm-12 text-center">Email</label>
                    <div class="col-sm-12">
                        <input type="text" id="mail" name="mail" class="form-control" value="<?= $mail ?>">
                        <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"><?= $mailError ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pays" class="col-form-label col-sm-12 text-center">Pays</label>
                    <div class="col-sm-12">
                        <input type="text" id="pays" name="pays" class="form-control" value="<?= $pays ?>">
                        <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"><?= $paysError ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ville" class="col-form-label col-sm-12 text-center">Ville</label>
                    <div class="col-sm-12">
                        <input type="text" id="ville" name="ville" class="form-control" value="<?= $ville ?>">
                        <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"><?= $villeError ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="quartier" class="col-form-label col-sm-12 text-center">Quartier</label>
                    <div class="col-sm-12">
                        <input type="text" id="quartier" name="quartier" class="form-control" value="<?= $quartier ?>">
                        <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"><?= $quartierError ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="number" class="col-form-label col-sm-12 text-center">Contact</label>
                    <div class="col-sm-12">
                        <input type="number" id="number" name="number" class="form-control" value="<?= $contact ?>">
                        <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"><?= $contactError ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mdp" class="col-form-label text-center col-sm-12">Mot de passe</label>
                    <div class="col-sm-12">
                        <input type="password" id="mdp" name="mdp" class="form-control" value="<?= $mdp ?>">
                        <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"><?= $mdpError ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-form-label col-sm-12 text-center">Adresse</label>
                    <div class="col-sm-12">
                        <input type="text" id="address" name="address" class="form-control" value="<?= $adresse ?>">
                        <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"><?= $adresseError ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success offset-4 my-2">S'inscrire</button>
                </div>
                <div class="form-group">
                    <h5 class="text-light text-center">Deja inscrit</h5>
                    <button type="button" class="btn btn-success offset-4 my-2" onclick="document.location.href='/construction/login'">
                        Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require'include/footer.php'; ?>
    <script src="assets/css/bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="assets/css/bootstrap/js/popper.min.js"></script>
    <script src="assets/css/bootstrap/js/bootstrap.min.js" ></script>
</body>
</html>