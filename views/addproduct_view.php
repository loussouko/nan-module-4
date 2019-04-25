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
                <div class="col-12 bg-light">
                    <form action="addproduct" method="post" enctype="multipart/form-data">
                        <h1 class="text-warning text-center">Ajouter des Produits</h1>
                        <p class="text-center text-danger h6"><?= $error ?></p>
                        <fieldset>
                            <div class="form-group">
                                <label for="nom" class="col-form-label h5 col-sm-12 text-center" >Nom du produit:</label>
                                <input type="text" class="form-control shadow" name="nom" id="nom" placeholder="votre nom" value="<?= $nom ?>">
                            </div>
                            <div class="form-group">
                                <label for="cat" class="col-form-label h5 col-sm-12 text-center" >Categorie:</label>
                                <select class="form-control custom-select shadow" name="cat" id="cat">
                                    <option value="">-- Selectionnez la categorie --</option>
                                    <?php
                                    $category = Category::getAllCategory();
                                    //debug($niveau);
                                    foreach($category as $cate):?>
                                        <option value="<?= $cate['idCategorie']; ?>"><?= $cate['nomCategorie']; ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="stock" class="col-form-label h5 col-sm-12 text-center" >Stock:</label>
                                <select class="form-control custom-select shadow" name="stock" id="stock">
                                    <option value="">-- Selectionnez le stock --</option>
                                        <option value="disponible">Disponible</option>
                                    <option value="epuise">epuise</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="img" class="col-form-label h5 col-sm-12 text-center">Image du produit</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="img" name="img" accept="image/*">
                                    <label class="custom-file-label" for="img">Choisir image</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prix" class="col-form-label h5 col-sm-12 text-center" >Prix du produit:</label>
                                <input type="number" class="form-control shadow" name="prix" id="prix" placeholder="prix du produit" value="<?= $prix ?>">
                            </div>
                        </fieldset>
                        <fieldset>
                        <legend class="text-center text-primary">Details</legend>
                        <div class="form-group">
                            <textarea name="cont" class= "form-control shadow" id="cont" rows="20"><?= $cont ?></textarea>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary ">Ajouter</button>
                        </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="assets/css/bootstrap/js/jquery-3.3.1.min.js"></script>
<script src="assets/css/bootstrap/js/popper.min.js"></script>
<script src="assets/css/bootstrap/js/bootstrap.min.js" ></script>
<script src="assets/ckeditor5/ckeditor.js"></script>
<script>
    ClassicEditor.create(document.getElementById('cont'));
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>

</html>
