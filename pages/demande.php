<?php
$remaque = '';

$mail = $_SESSION['utilisateur']['mail'];
if (isset($_GET['idv']) && $_GET['idv'] != null) {
    $detail_voiture = detail_voiture();
    $image = (!empty($detail_voiture['url_image'])) ? '<div style="width: 100%; height: 300px; overflow: hidden;">
        <img style="object-fit: cover; width: 100%; height: 100%;" src="' . URL_IVOITURES . '/' . $detail_voiture['url_image'] . '" alt="Image de couverture"></div>' : '';
    if (isset($_POST['demande'])) {
        $_POST['idc'] = $_SESSION['utilisateur']['id_client'];
        $_POST['idv'] = $detail_voiture['id_voiture'];
        $remaque = demande();
    }
} else {
    $_GET['idv'] = null;

    if (isset($_POST['demande'])) {
        $remaque = "<p style='color:red;'>vous devez séléctionner une voiture</p>";
    }

    $image = '<a href="?p=marques" class="btn btn-dark d-block w-100" required>Choisir voiture</a>';
}
?>
<section class="position-relative py-4 py-xl-5">
    <div class="container position-relative">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <h2 class="text-center mb-4">Demande d'essai:
                </h2>
            </div>
            <div class="col-md-4">
                <div class="card">

                    <div class="card-body p-sm-5">
                        <form method="post" action="?p=demande&idv=<?= $_GET['idv'] ?>">
                            <div class="mb-3"></div>
                            <div class="mb-3">
                                <p><?= $remaque ?></p>
                                <p><?= $mail ?></p>
                                <p>Adresse d'essaie</p>
                                <input class="form-control" type="text" id="name-2" name="adresse" placeholder="Adresse" required>
                                <p>Date de d'essaie</p>
                                <input class="form-control" type="date" id="adresse" name="Date" required>
                                <p>Heure d'essaie</p>
                                <input class="form-control" type="time" id="heure" name="heure" required>

                            </div>
                            <div class="mb-3"></div>
                            <div>
                                <input type="submit" class="btn btn-primary d-block w-100" value="Envoyer" name="demande">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"><?= $image ?></div>

        </div>
    </div>
</section>