<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <link href="assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style2.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
    <script src="assets/css/fontawesome/js/all.js"></script>
</head>

<body>
 <div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>E-COS</h3>
            <strong>EC</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="admindash">
                    <i class="fas fa-home"></i>
                    Acceuil
                </a>
            </li>
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-store"></i>
                    Gestion des produits
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="addproduct">Ajouter des produits</a>
                    </li>
                    <li>
                        <a href="admin">Liste des produits</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="user">
                    <i class="fas fa-user-alt"></i>
                    Clients </a>
            </li>
            <li>
                <a href="addcategorie">
                    <i class="fas fa-copy"></i>
                    Categories
                </a>
            </li>
            <li>
                <a href="commandes">
                    <i class="fas fa-list"></i>
                    Commande
                </a>
            </li>
            <li>
                <a href="avis">
                    <i class="fas fa-inbox"></i>
                    Message
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
                <div class="card col-md-3" style="align-items:center;background-color: aqua;" onclick="window.location.href='/construction/user'">
                    <i class="fas fa-user-secret" style="font-size:150px;color:aliceblue;margin-top:20px;" ></i>
                    <div class="card-body">
                        <?php
                        $nbreUser = count(User::getAllUsers());
                        ?>
                        <h4 class="card-title"> <?= $nbreUser; ?> Client(e) <?php echo ($nbreUser >1)? 's':''; ?></h4>
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card col-md-3" style="align-items:center;background-color:darkorange;" onclick="window.location.href='/construction/admin'">
                    <i class="fa fa-cart-plus" style="font-size:150px;color:aliceblue;margin-top:20px;" ></i>
                    <div class="card-body">
                        <?php
                        $nbrepro = count(Product::getAllProduct());
                        ?>
                        <h4 class="card-title" > <?= $nbrepro; ?> produits </h4>
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card col-md-3 bg-danger" style="align-items:center;" onclick="window.location.href='/construction/addcategorie'">
                    <i class="fa fa-list" style="font-size:150px;color:aliceblue;margin-top:20px;" ></i>
                    <div class="card-body">
                        <?php
                        $cat = count(Category::getAllCategory());
                        ?>
                        <h4 class="card-title"> <?= $cat;?> Categories </h4>
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card col-md-3" style="align-items:center;background-color:#7286d4;" onclick="window.location.href='/construction/commandes'">
                    <i class="fa fa-qrcode" style="font-size:150px;color:aliceblue;margin-top:20px;" ></i>
                    <div class="card-body">
                        <?php
                        $cm = count(Commande::getAll());
                        ?>
                        <h4 class="card-title"> <?= $cm;?> Commandes </h4>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="assets/css/bootstrap/js/jquery-3.3.1.min.js"></script>
<script src="assets/css/bootstrap/js/popper.min.js"></script>
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
