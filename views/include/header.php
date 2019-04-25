<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home" style="margin-top: -8px;"><img src="assets/img/logo.png" alt="" height="40"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Content">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="Content">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ciment">Ciments</a>
                </li>
                <li class="nav-item">
                    <a href="brique" class="nav-link">Briques</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="pelle">Pelles</a>
                </li>
                <li class="nav-item">
                    <a href="brouette" class="nav-link">Brouettes</a>
                </li>
                <li class="nav-item">
                    <a href="truelle" class="nav-link">Truelles</a>
                </li>
                <form class="form-inline my-2 my-lg-0" action="home" method="post">
                    <input class="form-control" type="search" placeholder="rechercher" name="search">
                    <button class="btn btn-outline-success " type="submit"><i class=" fa fa-search"></i></button>
                </form>
                <div class="d-flex justify-content-end" style="margin-left: 90px">
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link text-success" role="button" data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-user fa-2x  mr-2"></i>Mon compte
                        </a>
                        <ul class="dropdown-menu">
                            <?php if(isset($_SESSION['user'])): ?>
                            <li class="dropdown-item"><a href="modifprofil"><i class="fa fa-user mr-2"></i>Profil</a></li>
                            <?php endif; ?>
                            <li class="dropdown-item"><a href="panier"><i class="fa fa-shopping-cart mr-2"></i>Panier</a></li>
                            <?php if(!isset($_SESSION['user'])): ?>
                            <li class="dropdown-item"><a href="login"><i class="fa fa-unlock-alt mr-2"></i>Se connecter</a></li>
                            <?php endif; ?>
                            <?php if(!isset($_SESSION['user'])): ?>
                            <li class="dropdown-item"><a href="signin"><i class="fa fa-user-plus mr-2"></i>S'inscrire</a></li>
                            <?php endif; ?>
                            <?php if(isset($_SESSION['user'])): ?>
                            <li class="dropdown-item"><a href="logout"><i class="fa fa-lock mr-2"></i>Deconnecter</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="panier" class="nav-link text-warning"><i class="fa fa-shopping-cart fa-2x"></i>
                            <span class="badge badge-danger"><?= Panier::count();?></span> Panier</a>
                    </li>
                    <?php if(isset($_SESSION['user'])): ?>
                    <li class="nav-item ">
                        <a href="modifprofil" class="nav-link"><i class="fa fa-user-circle fa-2x"></i><span class="h6 ml-2"><?= $_SESSION['user']['nomUser'] ?></span class="h6 ml-2"></a>
                    </li>
                    <?php endif; ?>
                </div>
            </ul>
        </div>
    </nav>
</header>