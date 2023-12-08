<nav class="navbar navbar-light navbar-expand-lg" id="mainNav">
    <div class="container">
        <img class="navbar-brand d-flex align-items-center" src="assets/images/logo/logo.png" width="50" height="50" alt="logo">
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="?p=accueil">ACCUEIL</a></li>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle-no-caret" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        VOITURES
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <li>
                            <a class="dropdown-item" href="?p=marques">Toutes les marques</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="?p=types">Toutes les types</a>
                        </li>
                    </ul>

                </li>

                <li class="nav-item"><a class="nav-link" href="?p=services">SERVICES</a></li>

                <li class="nav-item"><a class="nav-link" href="?p=demande">DEMANDE ESSAI</a></li>

                <li class="nav-item"><a class="nav-link" href="?p=contact">CONTACT</a></li>

                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                        <i class="fa fa-search form-control-feedback"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end p-2 animated--grow-in" aria-labelledby="searchDropdown" style="width: 400px;">
                        <form class="me-auto navbar-search w-100">
                            <div class="input-group">
                                <input class="bg-light form-control border-0 not-outline" type="text" placeholder="Recherche de voiture" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary py-2" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

            </ul>
            <?php
            if (isset($_SESSION["utilisateur"])) :
            ?>
                <li class="dropdown" style="list-style-type: none;">

                    <a class="nav-link dropdown-toggle-no-caret" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images/logo/login.png" width="30px" height="30px"><?= $_SESSION['utilisateur']['username'] ?>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/superpacr/connexion/detaildemande.php">demande</a></li>
                        <li><a class="dropdown-item" href="/superpacr/connexion/deconnexion.php">Déconnexion</a></li>
                    </ul>
                </li>
            <?php
            else :
            ?>
                <a class="btn nav-link" role="button" href="?p=connexion" style="font-size: 1.3em">
                    <img src="assets/images/logo/login.png" width="30px" height="30px">
                    connexion
                </a>
            <?php
            endif;
            ?>


        </div>
    </div>
</nav>