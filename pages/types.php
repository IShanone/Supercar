<?php
# Récupère l'ID du type s'il existe sinon mettre valeur par defaut
$_GET['idt'] = isset($_GET['idt']) ? (int)$_GET['idt'] : (int)types()[0]['id_type'];
$voiture_types = voitures_type();
?>
<main>
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Voitures de type <?= $voiture_types[0]['nom_type'] ?></h1>
                <img src="<?= $voiture_types[0]['image_type']; ?>" width="150" height="130">
                <div class="text-center">

                    <div class="container" style="margin-top:46px;">
                        <div class="row">
                            <div class="col-md-4 col-xl-4" style="width:434px;"></div>
                            <div class="col-md-4 col-xl-4">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" aria-label="Previous" href="?p=types&idt=<?php if ($_GET['idt'] > 1) {
                                                                                                                                echo ($_GET['idt'] - 1);
                                                                                                                            } else {
                                                                                                                                $previous = count($types);
                                                                                                                                echo $previous;
                                                                                                                            }
                                                                                                                            ?>"><span aria-hidden="true">«</span></a></li>

                                        <?php

                                        foreach ($types as $keys => $type) {
                                            $active = ($type['id_type'] == $_GET['idt']) ? "active" : "";
                                        ?>

                                            <li class="page-item <?= $active ?>"><a class="page-link" href="?p=types&idt=<?= $type['id_type'] ?>"><?= $keys + 1 ?></a></li>

                                        <?php
                                        };
                                        ?>
                                        <li class="page-item"><a class="page-link" aria-label="Next" href="?p=types&idt=<?php
                                                                                                                        if ($_GET['idt'] < count($types)) {
                                                                                                                            echo ($_GET['idt'] + 1);
                                                                                                                        } else {
                                                                                                                            echo "1";
                                                                                                                        }
                                                                                                                        ?>"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-4 col-xl-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                foreach ($voiture_types as $voiture) :
                ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- voiture image-->
                            <img class="card-img-top" src="<?= URL_IVOITURES . '/' . $voiture['url_image'] ?>" alt="" />
                            <!-- voiture details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- voiture name-->
                                    <h5 class="fw-bolder"><?= $voiture['nom_marque'] . " " . $voiture['nom_voiture'] ?></h5>
                                    <!-- voiture price-->
                                    <?= $voiture['prix_voiture'] ?> RS
                                </div>
                            </div>
                            <!-- voiture actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="?p=detvoiture&idv=<?= $voiture['id_voiture'] ?>">détail</a></div>
                            </div>
                        </div>
                    </div>

                <?php
                endforeach;
                ?>

            </div>
        </div>
    </section>



</main>