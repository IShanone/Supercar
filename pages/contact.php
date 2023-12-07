<style>
		main{
			background-color: #cfe2ff;
		}
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
        <div class="block-heading text-center">
            <h2 class="text-info">Contactez nous</h2>
            <p>Remplissez le formulaire ci-dessous pour garder contact avec nous.</p>
        </div>

        <div class="row justify-content-center">

            <div class="col-md-9">
                <div class="container contacts">
                    <div class="row">

                        <div class="col-md-9">

                            <form id="contact" action="traitement_contact.php" method="post">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input class="form-control" type="nom" name="name" id="name"
                                                placeholder="Nom" autocomplete="on" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input class="form-control" type="surname" name="surname" id="surname"
                                                placeholder="Prénom" autocomplete="on" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input class="form-control" type="text" name="email" id="email"
                                                pattern="[^ @]*@[^ @]*" placeholder="Email" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input class="form-control" type="subject" name="subject" id="subject"
                                                placeholder="Objet" autocomplete="on">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea class="form-control" name="message" type="text"
                                                class="form-control" id="message" placeholder="Message"
                                                required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button class="btn btn-primary w-100" type="submit" id="form-submit"
                                                class="main-button" name="contacter">ENVOYER</button>
                                        </fieldset>
                                    </div>
                                </div>

                            </form>

                        </div>

                        <div class="col-md-3">
                            <div class="contact-info">
                                <ul>
                                    <li>
                                        <div>
                                            <img src="../assets/images/logo/contact-icon-01.png" alt="email icon">
                                        </div>
                                        <a href="#">supercar@company.com</a>
                                    </li>
                                    <li>
                                        <div>
                                            <img src="../assets/images/logo/contact-icon-02.png" alt="phone">
                                        </div>
                                        <a href="#">+230 55 123 456</a>
                                    </li>
                                    <li>
                                        <div>
                                            <img src="../assets/images/logo/contact-icon-03.png" alt="location">
                                        </div>
                                        <a href="#">cybercity</a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

<div class="container">
	<div class="row text-center">
		
		<div class="col-lg-12">
			
			<p><u><i>Voici la localisation:<i></u></p>

		</div>
		<div class="col-lg-12">
			<div class="mapouter">
				<div class="gmap_canvas">
					<iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Maurice%20,Avenue%20des%20capucines%20Quatre%20%20bornes&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
					</iframe>
					<style>
						.mapouter{position:relative;}
						.gmap_canvas {overflow:hidden;background:none!important;}
					</style>
				</div>
			</div>
		</div>

	</div>
	
</div>
</main>

