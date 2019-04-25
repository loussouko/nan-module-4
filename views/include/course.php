<div class="navbar" style="color: white; background: #009e69;">
            <div class="limiter" style="display: flex; justify-content: space-between;">
                <h2 onclick="document.location.href = 'cours' " style="cursor: pointer;">GenSchool</h2>
                <div class="search">
                    <form action="cours" method="POST">
                        <input type="text" name="search" placeholder="Rechercher un cour..."><button type="submit"> <i class="fas fa-search"></i> </button>
                    </form>
                </div>
                <div class="userT">
                    <h2><?=$_SESSION['user']['prenomUser'].' '.$_SESSION['user']['nomUser']; ?></h2>
                    <span class="userImg"> <img src="<?= $_SESSION['user']['imgUser']; ?>" height="40" width="40" onclick="document.location.href = 'profile' " class="rounded-circle"> </span>
                    <span class="logout" onclick="document.location.href = 'logout' "> <i class="fas fa-sign-out-alt"></i> </span>
                </div>
            </div>
        </div>