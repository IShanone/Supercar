<main class="container">
  <section class="jumbotron text-center" style="background-image: url('assets/images/services/service.jpg'); background-size: cover;height:500px ; border-radius: 30px 30px 30px 30px;margin-top:10px;">
    <div class="container fond">
      <h1 class="jumbotron-heading">Bienvenue sur la page service</h1>
      <p class="lead text-muted"> <b>Découvrez nos services de qualité pour votre besoin </b></p>
      <p>
        <a href="/connexion/index.php" class="btn btn-primary my-2">Se connecter</a>
        <a href="/contact/index.php" class="btn btn-primary my-2">Nous contacter</a>
      </p>
    </div>
  </section>

  <section class="container">

    <h2>Supercar</h2>
    <p>Bienvenue chez supercar Services, votre partenaire de confiance pour tous vos besoins en matière de garantie, d'entretien et de maintenance, ainsi que de pièces d'origine. Notre équipe de professionnels expérimentés est là pour vous aider à maintenir vos équipements en excellent état de fonctionnement et à prolonger leur durée de vie.</p>

  </section>

  <section class="container mt-4">
    <div class="row">
      <h2 class="text-center">Nos services</h2>
      <?php
      foreach ($services as $service) :
      ?>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow h-100">
            <img src="<?= $service['image_service'] ?>" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title"><?= $service['nom_service'] ?></h4>
              <p class="card-text"><?= $service['petitePhrases'] ?></p>
              <a href="?p=detservice&ids=<?= $service['id_service'] ?>" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
        </div>
      <?php
      endforeach;
      ?>
    </div>
  </section>

  <section class="container">

    <h2>Pourquoi chez nous?</h2>
    <p>Chez supercar Services, nous sommes fiers d'offrir des services de qualité supérieure à des prix compétitifs. Nous sommes là pour vous aider à maintenir vos équipements en excellent état de fonctionnement et à prolonger leur durée de vie. Si vous avez des questions ou des besoins spécifiques, n'hésitez pas à nous contacter. Nous sommes toujours là pour vous aider.</p>

  </section>

</main>