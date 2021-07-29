<?php
session_start();
include('function.php');
$article = getArticles();
$title = "Accueil | GAMERCASH";
include('./components/header.php'); 

?>

<body>

<section class="py-2 text-center container-fluid bgAccueil">
    <div class="row py-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light text-white">Bienvenu chez GAMERCASH</h1>
        <p class="lead text-white">Votre spécialiste consoles de jeux next generation, livraison rapide et frais de port imbatable!</p>
        <p>
          <a href="panier.php" class="btn btn-light my-2">Voir mon panier</a>
          
        </p>
      </div>
    </div>
</section>

<div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3d-flex justify-content-between">
            <div class="col ">
      <?php showArticles(); ?>
            </div>
      </div>
</div>
                  
                        

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>