<?php
$detail_voiture = detail_voiture();
$images = detail_image_voiture();
?>
<main>

    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="?p=accueil"><i class="fa fa-home"></i> ACCEUIL</a> /
                        <a href="?p=marques&idm=<?= $detail_voiture['id_marque'] ?>"><?= $detail_voiture['nom_marque'] ?></a> /
                        <span><?= $detail_voiture['nom_voiture'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bg-dark border rounded border-0 border-dark overflow-hidden">
            <div class="row g-0">
                <div class="col-md-5">
                    <div class="text-white p-4 p-md-5" style="min-height:500px">


                        <h2 class="fw-bold text-white mb-3"><?= $detail_voiture['nom_voiture'] ?></h2>
                        <p class="mb-4" style="display:inline-block;">Marque : <?= $detail_voiture['nom_marque'] ?>
                        <div style="width:150px;height:100px;display:inline-block;margin-left:10px;"><img class="w-100" src="<?= $detail_voiture['url_marque'] ?>" /></div>
                        </p>
                        <p class="mb-4" style="display:inline-block;">Type : <?= $detail_voiture['nom_type'] ?>
                        <div style="width:150px;height:100px;display:inline-block;margin-left:10px;"><img class="w-100" src="<?= $detail_voiture['image_type'] ?>" /></div>
                        </p>
                        <p class="mb-4">ANNEE de la voiture :<?= $detail_voiture['annee_voiture'] ?></p>
                        <p class="mb-4" style="display:inline-block;">Couleur de la voiture : <?= $detail_voiture['couleur_voiture'] ?>
                        <div style="background-color:<?= $detail_voiture['couleur_voiture'] ?>;border-radius:50%;width:15px;height:15px;display:inline-block;margin-left:10px;"></div>
                        </p>
                        <p class="mb-4">Transmission : <?= $detail_voiture['transmission'] ?></p>
                        <p class="mb-4">Km : <?= $detail_voiture['km'] ?></p>
                        <p class="mb-4">Prix de la voiture: <?= $detail_voiture['prix_voiture'] ?> RS</p>
                        <p class="mb-4">Pays d'importation : <?= $detail_voiture['pays_importation'] ?></p>
                        <div class="my-3">
                            <a type="submit" class="btn btn-primary mr-2 car-test-drive-btn " href="?p=demande&idv=<?= $detail_voiture['id_voiture'] ?>">Demande d'essai</a>
                            <a class="btn btn-light btn-lg" role="button" href="?p=marques&idm=<?= $detail_voiture['id_marque'] ?>">retour</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 order-first order-md-last" style="min-height: 200px ;">

                    <div class="container-fluid">
                        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="0">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                <?php
                                foreach ($images as $num => $url) :

                                    if ($num == 0) :
                                ?>
                                        <div class="carousel-item col-md-3 active"><img class="img-fluid mx-auto d-block" src="<?= URL_IVOITURES . '/' . $url['url_image'] ?>" alt="slide <?= $num ?>" /></div>
                                    <?php else : ?>
                                        <div class="carousel-item col-md-3"><img class="img-fluid mx-auto d-block" src="<?= URL_IVOITURES . '/' . $url['url_image'] ?>" alt="slide <?= $num ?>" /></div>
                                <?php endif;

                                endforeach;

                                ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev"><i class="fa fa-chevron-left fa-lg text-muted"></i><span class="sr-only">Previous</span></a>
                            <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next"><i class="fa fa-chevron-right fa-lg text-muted"></i><span class="sr-only">Next</span></a>
                        </div>
                    </div>

                </div>

                <div class="row order-last">
                    <?php
                    foreach ($images as $num => $url) :
                    ?>

                        <div class="col-md-3" style="min-height: 200px;  background-size:cover ;"><img class="car-img w-100" src="<?= URL_IVOITURES . '/' . $url['url_image'] ?>" width="500" height="200" /></div>
                    <?php
                    endforeach;
                    ?>

                </div>

            </div>

        </div>
    </div>

</main>