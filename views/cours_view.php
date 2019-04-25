<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GenSchool</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/app.css">
    <link href="assets/css/bootstrap/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
    <style>
      .main-container{
        background: url(assets/css/back-bg.jpg) no-repeat center ; 
        background-size: cover;
        height: 150vh;
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
    <?php include 'include/course.php'; ?>
  </div>
  <div class="container-fluid mt-5">
    <div class="row text-center text-lg-left">
      <?php foreach ($matieres as $matiere ): ?>
        <div class="col-lg-3">
    <div class="card mx-auto my-5" style="width: 18rem;">
      <img class="card-img-top" style="height: 150px" src="<?=$matiere['imgMatiere'];?>" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?=$matiere['libMatiere'];?></h5>
      </div>
      <?php $cours = Cours::getAllCourseByMatiere($matiere['idMatiere'], $_SESSION['user']['idNiveau']); ?>
      <ul class="list-group list-group-flush">
        <?php foreach ($cours as $cour ): ?>
          <li class="list-group-item"><?=$cour['nomCours']?> | <a href="course-<?=$cour['idCours'];?>" class="card-link text-info">GO ></a></li>
        <?php endforeach ?>
      </ul>
    </div>


  </div>

  <?php endforeach ?>
  </div>
  </div>

</div>

</body>
</html>