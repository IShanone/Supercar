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
<main class="container">
    <section class="py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center text-info mb-4">CONNEXION</h2>

                <div class="card tete">

                    <div class="card-body">
                        <form method="POST" action="?p=connexion">
                            <div>
                                <?= "<p class='text-danger'>" . $erreur . "</p>" ?>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Entrer votre mail" name="mail" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Entrer le mot de passe" name="pass" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100" name="connexion">Connecter</button>
                                <p class="mt-3 text-center"><a href="?p=inscription">S'inscrire</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>