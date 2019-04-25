<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--Import de la police Montserrat-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/app.css">
    <link href="assets/css/bootstrap/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
    <script defer src="assets/css/fontawesome/js/all.js" ></script>
    <title>GenSchool - Booster votre niveau scolaire</title>
    <style>
        a:visited
        {
            color: white;
        }
        a
        {
            color:red;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php include 'include/course.php'; ?>
        <div class="mainApp">
            <div class="limiter">
                <div class="aboutCourse">
                    <h2><?=$course['libMatiere']; ?></h2>
                    <div class="items">
                        <?php foreach ($sousCourse as $key => $value): ?>
                            <a href="course-<?=$value['idCours']; ?>" <?php if ($value['idCours'] == $course['idCours']) echo "class='active'"; ?>><?=$value['nomCours']; ?></a>
                        <?php endforeach ?>
                    </div>
                    <h3><?=$course['libNiveau']; ?></h3>
                </div>
                <div class="courseItem">
                    <h2 class="title"><?=$course['nomCours']; ?></h2>
                    <div class="course">
                            <?php $cr=html_entity_decode($course['contentCours']); echo $cr; ?>
                    </div>
                    <!--div class="toNext">
                        <h2>J'ai bien lu et compris cette leçon</h2>
                        <span> <i class="fa fa-check"></i> </span>
                    </div-->
                </div>
            </div>
        </div>
    </div>
    <script src="assets/css/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="assets/css/bootstrap/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/css/bootstrap/js/bootstrap.min.js" ></script>
</body>
</html>