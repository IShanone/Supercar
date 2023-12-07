
<main class="container py">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="?p=services">SERVICES</a></li>
          <li class="breadcrumb-item active" aria-current="page"><?=$service['nom_service']?></li>
        </ol>
      </nav>
    </div>



    <div class="col-lg-12">
        <img src="<?=$service['image_service']?>" alt="Mon image" class="w-50 h-50">
        <p>
        <?=$service['description']?>
         </p>        
    </div>


</main>