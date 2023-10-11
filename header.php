
<nav id="mainNav" class="navbar navbar-light navbar-expand-lg">
    
    <div class="container">
        
        <img class="navbar-brand" src="/assets/images/logo/logo.png" width="100" height="80" />
        
        <button class="navbar-toggler navbar-toggler-right" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
        
        <div id="navbarResponsive" class="collapse navbar-collapse">
                
            <ul class="navbar-nav me-auto">
                
                <li class="nav-item"><a class="nav-link" href="/index.php">ACCUEIL</a></li>
                
                <li class="nav-item dropdown">
                    
                    <a class="nav-link dropdown-toggle-no-caret" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          VOITURES
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            
                            <li>
                                <a class="dropdown-item" href="/voiture/index.php?idm=1">Toutes les marques</a>
                            </li>    
                            <li>
                                <a class="dropdown-item" href="/voiture/types.php?idt=1">Toutes les types</a>
                            </li>  
                    </ul>
                
                </li>

                <li class="nav-item"><a class="nav-link" href="/services/index.php">SERVICES</a></li>
                       
                <li class="nav-item"><a class="nav-link" href="/demande/index.php">DEMANDE ESSAI</a></li>
                
                <li class="nav-item" ><a class="nav-link" href="/contact/index.php">CONTACT</a></li>
            
            </ul>

            <div class="main d-flex">
                <div class="form-group has-search">
                    <form action="/recherche/index.php" method="get">  
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" name='search' placeholder="recherche">
                    </form> 
                </div>
            </div>   
                
            <div class="d-flex">
                    
                <?php 
                    if (!isset($_SESSION['utilisateur'])):
                ?>
                    <a class="btn nav-link" type="button" href="/connexion/index.php"><img src="/assets/images/logo/login.png" width="30px" height="30px">Login</a>
                <?php else:?>
                    <li class="dropdown" style="list-style-type: none;">
                    
                        <a class="nav-link dropdown-toggle-no-caret" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/assets/images/logo/login.png" width="30px" height="30px"><?= $_SESSION['utilisateur']['username']?>
                        </a>
                    
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/connexion/detaildemande.php">demande</a></li>
                            <li><a class="dropdown-item" href="/connexion/deconnexion.php">Déconnexion</a></li>
                        </ul>
                    </li>  
                <?php endif;?>
            </div>

        </div>
            
    </div>
    
</nav>