<style>
    input:focus {

        box-shadow: none !important;
    }

    button:hover {
        background-color: white !important;
        color: black !important;
    }

    .tete {
        border-top: 2px solid blue;
    }
</style>
<main>
    <div class="container">
        <div class="block-heading text-center">
            <h2 class="text-info">INSCRIPTION</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="container contacts">
                    <div class="row">
                        <div class="card tete">

                            <div class="card-body">
                                <form method="post" action="?p=inscription">
                                    <div>
                                        <?= $erreur ?>
                                        <p class='erreur' style="color:red"></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="nom" class="form-label">Votre nom</label>
                                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Malto" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="prenom" class="form-label">Votre prénom</label>
                                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Martin" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="adr" class="form-label">Votre adresse</label>
                                                <input type="text" class="form-control" id="adr" name="adr" placeholder="36 avenue trianon quatreborne" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Votre e-mail</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="monadresse@mail.com" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="num" class="form-label">Votre numéro mobile</label>
                                                <div class="input-group">
                                                    <select id="pays" name="pays" class="form-select">
                                                        <option value="+230">Maurice (+230)</option>
                                                    </select>
                                                    <input type="tel" class="form-control" id="num" name="num" placeholder="55433423" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="mdp1" class="form-label">Votre mot de passe</label>
                                                <input type="password" class="form-control item mdp1" id="mdp1" name="mdp1" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="mdp2" class="form-label">Confirmation du mot de passe</label>
                                                <input type="password" class="form-control mdp2" id="mdp2" name="mdp2" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary w-100" id="form-submit" name="creer">Créer mon compte</button>
                                                <div class="mt-3">
                                                    <a href="?p=connexion">connexion</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>