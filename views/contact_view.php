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
</head>
<body>
<?php require'include/header.php'; ?>
<section>
    <div class="container-fluid">
        <div class="row">
            <?php if(!empty($_SESSION['success'])):?>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p class="text-center"><?= $_SESSION['success']; ?></p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
                <?php endif;?>
            <div class="col-md-4 col-lg-4 col-xl-4 d-none d-md-block d-xl-block d-lg-block">
                <img src="assets/img/tour.jpg" class=" img-fluid" alt="" style="height: 800px;">
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-xl-4 bg-light">
                <form action="contact" method="post">
                    <h1 class="text-warning text-center">Nous contacter !!!</h1>
                    <fieldset>
                        <legend class="text-primary text-center">Informations personnelles</legend>
                        <div class="form-group">
                            <label for="nom" class="col-form-label h5 col-sm-8" >Votre nom:</label>
                            <input type="text" class="form-control shadow" name="nom" id="nom" placeholder="votre nom" value="<?= $nom ?>">
                            <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"><?= $nomError ?></span>
                        </div>
                        <div class="form-group">
                            <label for="prenom" class="col-form-label h5 col-sm-4" >Votre prénom:</label>
                            <input type="text" class="form-control shadow" name="prenom" id="prenom" placeholder="votre prenom" value="<?= $prenom ?>">
                            <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"><?= $prenomError ?></span>
                        </div>
                        <div class="form-group">
                            <label for="mail" class="col-form-label h5 col-sm-8" >Votre adresse email:</label>
                            <input type="email" class="form-control shadow" name="mail" id="mail" placeholder="votre email" value="<?= $mail ?>">
                            <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"><?= $mailError ?></span>
                        </div>
                        <div class="form-group">
                            <label for="contact" class="col-form-label h5 col-sm-8" >Votre contact:</label>
                            <input type="number" class="form-control shadow" name="contact" id="contact" placeholder="votre contact" value="<?= $contact ?>">
                            <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"><?= $contactError ?></span>
                        </div>
                    </fieldset>
                   <fieldset>
                        <legend class="text-center text-primary">Votre message</legend>
                        <div class="form-group">
                            <label for="message" class="col-form-label h5">Votre message</label>
                            <textarea class="form-control shadow" name="message" id="message" rows="5" "><?= $message ?></textarea>
                            <span class="form-text text-danger" style="font-weight: normal; font-style: italic;" id="text"><?= $messageError ?></span>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary ">Soumettre</button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 d-none d-md-block d-xl-block d-lg-block">
                <img src="assets/img/tour.jpg" class=" img-fluid" alt="" style="height: 800px;">
            </div>
        </div>
    </div>

</section>
<?php require'include/footer.php'; ?>
<script src="assets/css/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="assets/css/bootstrap/js/popper.min.js"></script>
<script src="assets/css/bootstrap/js/bootstrap.min.js" ></script>
<script>

</script>
</body>
</html>