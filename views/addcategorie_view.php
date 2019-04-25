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
                <div class="col-lg-12 col-md-12 col-sm-12" id="mess" style="display:none; transition-duration: 10s;">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p class="text-center">Categorie supprimer</p>
                        <button type="button" class="close"  aria-label="Close"  onclick="fermer()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="col-6 bg-light">
                    <form action="addcategorie" method="post">
                        <h1 class="text-warning text-center">Ajouter des produits</h1>
                        <fieldset>
                            <div class="form-group">
                                <label for="nom" class="col-form-label h5 col-sm-8" >Nom du produit:</label>
                                <input type="text" class="form-control shadow" name="nom" id="nom" placeholder="votre nom">
                            </div>
                        </fieldset>
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary ">Ajouter</button>
                        </div>
                    </form>
                </div>
                <div class="col-6">
                    <table class="table table-bordered table-striped ">
                        <tr>
                            <th>Nom</th>
                            <th>Actions</th>
                        </tr>
                        <tr>
                            <?php $categories=Category::getAllCategory(); foreach($categories as $categorie):?>
                            <th><?= $categorie['nomCategorie'] ?></th>
                            <th>
                                <a href="editcategorie-<?= $categorie['idCategorie'] ?>"><i class="fa fa-edit text-primary  fa-2x mr-4"></i></a>
                                <a onclick="confirms(<?= $categorie['idCategorie'] ?>);"><i class="fa fa-trash text-danger fa-2x mr-4"></i></a>
                            </th>
                        </tr>
                        <?php endforeach;?>
                    </table>
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
<script>
        function confirms(id)
        {
            var mess = $('#mess');
            var action = confirm("Voulez vous supprimer cette categorie?");
            if(action)
            {
                document.location.href= 'addcategorie-'+id;
                mess.css('display', 'block');
                mess.css('transition-delay', '10ms');
            }
        };
        function fermer()
        {
            var mess = $('#mess');
            mess.css('display','none');
        };

</script>
</body>

</html>
