<!-- La presentation de ce qu'offre supercar -->
<section class="p-5 text-center bg-image rounded-3" style="
    background-image: url('<?= URL_IMAGE ?>/fond.jpg');
    background-size: cover;
    background-position: center center;
    height: 400px;
    ">
    <!-- Contexte de supercar -->
    <div class="mask mx-auto mx-lg-0" style="background-color: rgba(73, 96, 135, 0.507); width: 100%; max-width: 500px;">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
                <h1 class="mb-3 display-9">Bienvenue sur SUPERCAR</h1>
                <h4 class="mb-3 lead">Découvrez la voiture de vos rêves dès aujourd'hui !<br>
                    Ne manquez pas l'occasion d'essai gratuit chez SuperCar.</h4>
                <!-- Direction vers demande  -->
                <a class="btn btn-outline-light btn-lg mb-3" href="#!" role="button">
                    Réservation <span class="animation_accueil"></span>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Contenu de presentation -->
<section>
    <div class="container text-center py-5">
        <h1 class="text-uppercase text-primary">Nos offres</h1>
    </div>

    <div class="container">
        <div class="row">
            <!-- Presentation de ce que l'on peut faire dans supercar -->
            <div class="col-lg-3 mb-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            Marques de voitures
                            <span class="app-feature-icon glyphicon glyphicon-globe">
                                <img src="assets/images/logo/rechercher.png" alt="Rechercher" width="32" height="32">
                            </span>
                        </h4>
                        <p class="card-text">Nous avons des voitures de différentes marques connue dans le monde</p>
                        <a href="#">regarder <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>
                    </div>
                </div>
                <h4></h4>

                <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            SERVICES
                            <span class="app-feature-icon glyphicon glyphicon-globe">
                                <img src="assets/images/logo/rechercher.png" alt="Rechercher" width="32" height="32">
                            </span>
                        </h4>
                        <p class="card-text">Une large gamme de services à tous vos besoins en matière de voiture</p>
                        <a href="#">détails <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
            <!-- carousel ds voiture ainsi marque type  -->
            <div class="col-lg-6 mb-3">

                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner row w-100 mx-auto">
                        <div class="carousel-item col-md-3 active">
                            <img class="img-fluid mx-auto d-block" src="<?= $marques[0]['url_marque'] ?>" height="500px" alt="slide 1" />
                        </div>

                        <div class="carousel-item col-md-3">
                            <img class="img-fluid mx-auto d-block" src="<?= $types[0]['image_type'] ?>" height="500px" alt="slide 2" />
                        </div>

                        <div class="carousel-item col-md-3">
                            <img class="img-fluid mx-auto d-block" src="<?= URL_IVOITURES . $voitures[0]['url_image'] ?>" height="500px" alt="slide 3" />
                        </div>

                        <div class="carousel-item col-md-3">
                            <img class="img-fluid mx-auto d-block" src="<?= $services[0]['image_service'] ?>" height="500px" alt="slide 4" />
                        </div>
                    </div>
                </div>

            </div>

            <!-- Suite du presentation de ce qu'offre supercar -->
            <div class="col-lg-3 mb-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            Types de voitures
                            <span class="app-feature-icon glyphicon glyphicon-globe">
                                <img src="assets/images/logo/rechercher.png" alt="Rechercher" width="32" height="32">
                            </span>
                        </h4>
                        <p class="card-text">Proposons des types de voitures aux besoins des consommateurs</p>
                        <a href="#">voir <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>
                    </div>
                </div>
                <h4></h4>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            Contacts
                            <span class="app-feature-icon glyphicon glyphicon-globe">
                                <img src="assets/images/logo/rechercher.png" alt="Rechercher" width="32" height="32">
                            </span>
                        </h4>
                        <p class="card-text">Si vous avez des questions n'hésite pas à nous demandez</p>
                        <a href="#">contacter <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>