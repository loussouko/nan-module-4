<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="assets/css/app.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GenSchool</title>
    <style>
      .main-container{
        background: url(assets/css/back-bg.jpg) no-repeat center;
        background-size: cover;
        height: 100vh;
      }
      nav{
          padding:0;
          margin:0;
      }
      .container{
          margin-top:90px;
      }
     
    </style>
</head>

<body>

<div class="main-container">
  <div class="container-fluid">
    <?php include 'include/header.php'; ?>
  </div>

  <br>
  <?php foreach ($foundCours as $found ): ?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $found['nomCours'] ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<?php endforeach ?>

</div>

</body>
</html>