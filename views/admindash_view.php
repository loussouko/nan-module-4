<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>

    <link href="assets/css/bootstrap/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/style2.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
    <!-- Font Awesome JS -->
    <script defer src="assets/css/fontawesome/js/all.js" ></script>
</head>

<body>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Genschool</h3>
            <strong>SC</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="dashboard">
                    <i class="fas fa-home"></i>
                    Acceuil
                </a>
            </li>
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-briefcase"></i>
                    Gestion des cours
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="addcourse">Ajouter des cours</a>
                    </li>
                    <li>
                        <a href="admin">Liste des cours</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="user">
                    <i class="fas fa-user-alt"></i>
                    Élèves </a>
            </li>
            <li>
                <a href="addmatiere">
                    <i class="fas fa-copy"></i>
                    Matieres
                </a>
            </li>
        </ul>

    </nav>

    <!-- Page Content  -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span></span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>
                <a class="btn btn-outline-dark my-2 my-sm-0" href="logout">Deconnexion</a>
            </div>
        </nav>

        <div class="container-fluid">
        <div class="row">
                <div class="card col-md-3" style="align-items:center;background-color: aqua;" onclick="window.location.href='/education/user'">
                    <i class="fas fa-user-graduate" style="font-size:150px;color:aliceblue;margin-top:20px;" ></i>
                    <div class="card-body">
                        <?php
                                $nbreUser = count(User::getAllUsers());
                        ?>
                    <h4 class="card-title"> <?= $nbreUser; ?> ETudiant(e) <?php echo ($nbreUser >1)? 's':''; ?></h4>
                    <p class="card-text"></p>
                    </div>
                </div>
                <div class="card col-md-3" style="align-items:center;margin-left:15px;margin-right:15px;background-color:antiquewhite;" onclick="window.location.href='/education/admin'">
                    <i class="fas fa-book" style="font-size:150px;color:aliceblue;margin-top:20px;" ></i>
                    <div class="card-body">
                    <?php
                                $nbreCou = count(Cours::getAllCours());
                    ?>
                    <h4 class="card-title" > <?= $nbreCou; ?> Cours </h4>
                    <p class="card-text"></p>
                    </div>
                </div>
                <div class="card col-md-3" style="align-items:center;background-color:#7286d4;" onclick="window.location.href='/education/user'">
                    <i class="fas fa-university" style="font-size:150px;color:aliceblue;margin-top:20px;" ></i>
                    <div class="card-body">
                    <?php
                                $nbreN = count(Niveau::getAllNiveau());
                    ?>
                    <h4 class="card-title"> <?= $nbreN; ?> Niveau </h4>
                    <p class="card-text"></p>
                    </div>
                </div>
        </div>  
        </div>
    </div>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="assets/css/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<!-- Popper.JS -->
<script src="assets/css/bootstrap/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/css/bootstrap/js/bootstrap.min.js" ></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>

</html>
