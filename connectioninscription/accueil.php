
<?php

session_start();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>acceuil</title>
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TerreShop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inscription.php">Inscription</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="connexion.php">Connexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Resvation/reservation.php">Réservé</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>


<div class="container overflow-hidden">
  <div class="row gy-4">
    <div class="col-6">
      <div class="p-3 border bg-light">
        <img src="../image/TerreShop/01-Feu.jpg"class="img-fluid" alt="">
      </div>
    </div>
  

    <div class="col-6">
      <div class="p-3 border bg-light"><img src="../image/TerreShop/02-Air.jpg"class="img-fluid" alt=""></div>
    </div>

    <div class="col-6">
      <div class="p-3 border bg-light"><img src="../image/TerreShop/03-Terre.jpg"class="img-fluid" alt=""></div>
      
    </div>

    <div class="col-6">
      <div class="p-3 border bg-light">
        <img src="../image/TerreShop/04-Eau.jpg"class="img-fluid" alt="">
      </div>
        
    </div>


  </div>
  </div>
</div>
</body>
</html>

<?php


