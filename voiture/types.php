<?php
session_start();
require_once("../requetes/bdconnect.php");

include("../requetes/voitures.php");

$bdd = bdconnect();
$voiture_types = voitures_type();
$types = types();
    

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/logo/logo.png" type="image/png">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
     
     <link rel="stylesheet" href="../assets/Style/Style.css">
     <link rel="stylesheet" href="../assets/Style/acceuil.css">
    <title>voiture</title>
</head>
<body>
    <?php
    include("../header.php");
    ?>
    <main>
    <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Voitures de type <?=$voiture_types[0]['nom_type']?></h1>
                    <img src="/<?=$voiture_types[0]['image_type'];?>" width="150">
                    <div class="text-center">
    
                <div class="container" style="margin-top:46px;">
                    <div class="row">
                        <div class="col-md-4 col-xl-4" style="width:434px;"></div>  
                        <div class="col-md-4 col-xl-4">
                            <nav>
                                <ul class="pagination">
                                        <li class="page-item"><a class="page-link" aria-label="Previous" href="types.php?idt=<?php if($_GET['idt']>1)
                                        {echo ($_GET['idt']-1);} else{
                                            $previous = count($types);
                                            echo $previous;
                                        }
                                        ?>"><span aria-hidden="true">«</span></a></li>

                                    <?php
                                    
                                        foreach ($types as $type){   
                                            $active = ($type['id_type'] == $_GET['idt'] ) ? "active" : "" ;                           
                                    ?>
                                    
                                                <li class="page-item <?=$active?>"><a class="page-link" href="types.php?idt=<?=$type['id_type']?>"><?=$type['id_type']?></a></li>
                                    
                                    <?php
                                       };
                                    ?>
                                        <li class="page-item"><a class="page-link" aria-label="Next" href="types.php?idt=<?php
                                        if ($_GET['idt'] < count($types)) {
                                            echo ($_GET['idt']+1);
                                        }else{
                                            echo"1";
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
                        foreach ($voiture_types as $voiture):
                    ?>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- voiture image-->
                                <img class="card-img-top" src="<?=$voiture['url_image']?>" alt="" />
                                <!-- voiture details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- voiture name-->
                                        <h5 class="fw-bolder"><?=$voiture['nom_marque']." ".$voiture['nom_voiture']?></h5>
                                        <!-- voiture price-->
                                        <?=$voiture['prix_voiture']?> RS
                                    </div>
                                </div>
                                <!-- voiture actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="detail.php?idv=<?=$voiture['id_voiture']?>">détail</a></div>
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
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p>Copyright © 2023 SUPERCAR</p>
          </div>
        </div>
      </div>
    </footer>
    <script>
        var voiture = document.querySelector('.navbar-nav .nav-item:nth-child(2) a');
    		voiture.classList.add('active');
    </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>