<style>
    .contacts {
        margin-top: 10px;
        padding: 40px;
        border-top: 2px solid blue;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
        background-color: white;
    }

    input:focus,
    textarea:focus {

        box-shadow: none !important;
    }

    fieldset {
        padding: 10px;
    }

    .contact-info {
        border: 1px solid rgba(0, 0, 0, 0.5);

        display: inline-block;
    }

    ul {
        list-style-type: none;
        padding: 10px;


    }

    button:hover {
        background-color: white !important;
        color: black !important;
    }
</style>
<main>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-9">
                <div class="container contacts">
                    <div class="row">
                        <form id="contact" action="traitement_contact.php" method="post">
                            <div class="block-heading text-center">
                                <h2 class="text-info">CONNEXION</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input class="form-control" type="nom" name="name" id="name" placeholder="Nom" autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input class="form-control" type="surname" name="surname" id="surname" placeholder="Prénom" autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input class="form-control" type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input class="form-control" type="subject" name="subject" id="subject" placeholder="Objet" autocomplete="on">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea class="form-control" name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button class="btn btn-primary w-100" type="submit" id="form-submit" class="main-button" name="contacter">ENVOYER</button>
                                    </fieldset>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>


</main>