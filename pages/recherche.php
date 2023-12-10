<?php
if (isset($_GET['search'])) {
    $recherche = $_GET['search'];
    $resultat = recherches();
} elseif (isset($_GET['marque']) && isset($_GET['transmission'])) {
    $mar = $_GET['marque'];
    $transmission = $_GET['transmission'];
} else {
    header('location:?p=search');
}
?>
<main>
    <div class="container mt-5">
        <h2>Résultats <?= $recherche ?>:</h2>
        <div class="row mt-3">
            <?php
            if (!empty($resultat)) :
                foreach ($resultat as $res) :
            ?>

                    <div class="col-sm-4 mb-3">
                        <div class="card">
                            <img class="card-img-top" src="<?= URL_IVOITURES . '/' . $res['url_image'] ?>">
                            <div class="card-body">
                                <h5 class="card-title"> <?= $res['nom_marque'] . " " . $res['nom_voiture'] ?></h5>
                                <a href="?p=detvoiture&idv=<?= $res['id_voiture'] ?>" class="btn btn-primary">En savoir plus</a>
                            </div>
                        </div>
                    </div>

                <?php
                endforeach;
            else : ?>
                <div class="col-sm-4 mb-3">
                    <p style="color:red">Aucune voiture trouvée</p>
                </div>
            <?php
            endif;

            ?>


        </div>
    </div>
</main>