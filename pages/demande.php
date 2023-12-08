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
                        <form method="post">
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