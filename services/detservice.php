<?php
session_start();
require_once("../requetes/bdconnect.php");
include("../requetes/voitures.php");

include("../requetes/services.php");
$bdd = bdconnect();
$marques = marques();
if (isset($_GET['ids'])) {
  $service = service();
}else{
  header("Location : ../index.php");
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Pour mettre le logo de supercar sur le net-->
	<link rel="shortcut icon" href="/assets/images/logo/logo.png" type="image/png">
    

    <!--Autres style-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
       
     <link rel="stylesheet" href="../assets/Style/style.css">
     <link rel="stylesheet" href="../assets/Style/voiture.css">

     <style>
      footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 60px;
  background-color: #f5f5f5;
}

  
     </style>

    <title><?=$service['nom_service']?></title>
</head>

<body>
    <?php
    include("../header.php");
    ?>


<main class="container py">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">SERVICES</a></li>
          <li class="breadcrumb-item active" aria-current="page"><?=$service['nom_service']?></li>
        </ol>
      </nav>
    </div>



    <div class="col-lg-12">
        <img src="../<?=$service['image_service']?>" alt="Mon image" class="w-50 h-50">
        <p>
        <?=$service['description']?>
         </p>        
    </div>


</main>



<footer>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <p>Copyright © 2023 SUPERCAR</p>
      </div>
    </div>
  </div>
</footer>
<script>
        var service= document.querySelector('.navbar-nav .nav-item:nth-child(3) a');
    		service.classList.add('active');
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
</body>
</html>