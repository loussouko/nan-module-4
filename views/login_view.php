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
        #lien:hover
        {
          text-decoration: underline;
            cursor: pointer;
            border-radius: 15px;
            background: #1d2124;
            opacity: 0.5;
        }
    </style>
</head>
<body>
<?php require'include/header.php'; ?>
<div class="container-fluid mx-2">
    <div class="row">
   <div class="col-lg-4 offset-lg-4" style="margin-top: 10px;">
       <?php if(!empty($error)): ?>
       <div class="alert alert-success">
           <p class="text-center text-danger"><?= $error ?></p>
       </div>
       <?php endif;?>
       <form action="login" method="post" class="bg-warning" style="border-radius: 25px;">
           <h3 class="text-center text-light">CONNECTEZ VOUS</h3>
       <div class="form-group">
           <label for="mail" class="col-form-label col-sm-12 text-center">Email</label>
           <div class="col-sm-12">
               <input type="email" id="mail" name="mail" class="form-control rounded rounded-pill" value="<?= $mail ?>">
           </div>
       </div>
           <div class="form-group">
               <label for="mdp" class="col-form-label text-center col-sm-12">Mot de passe</label>
               <div class="col-sm-12">
                   <input type="password" id="mdp" name="mdp" class="form-control rounded rounded-pill" value="<?= $mdp ?>">
               </div>
           </div>
           <div class="form-group">
               <button type="submit" class="btn btn-success offset-4 my-2 rounded rounded-pill">Se connecter</button>
           </div>
           <div class="form-group">
               <p class="text-primary text-center" id="lien" data-toggle="modal" data-target="#liens">mot de passe oublie?</p>
               <p class="text-light text-center">Nouveau s'inscrire</p>
               <button type="button" class="btn btn-success rounded rounded-pill offset-4 my-2" onclick="document.location.href='/construction/signin'">S'inscrire!</button>
           </div>
       </form>
       <div class="modal" id="liens">
           <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title text-danger">RENITIALISEZ MOT DE PASSE</h5>
                       <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                   </div>
                   <div class="modal-body">
                       <form action="reset" method="post">
                           <div class="form-group">
                               <div class="col-sm-12">
                                   <input type="email" id="rmail" name="rmail" class="form-control rounded rounded-pill" placeholder="email">
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="col-sm-12">
                                   <input type="password" id="mdp" name="rmdp" class="form-control rounded rounded-pill" placeholder="Mot de passe">
                               </div>
                           </div>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       <button type="submit" class="btn btn-primary">Modifier</button>
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
</body>
</html>