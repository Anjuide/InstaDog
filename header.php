<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Instadog - Racontez l'histoire de votre chien">
    <!-- CHARGEMENT PAR CDN de Bootstrap 4.2.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">                     
    <!-- CSS PERSONNALISÉS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>
      <?php 
        if(isset($title) && !empty($title)) { 
          echo $title; 
        } 
        else { 
          echo "Bienvenue sur Instadog"; 
        } 
      ?>
    </title>
</head>
<body>
<header class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">InstaDog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Compagnons</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Races</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Articles</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="ajouterUnChien.php">Ajouter un compagnon</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Rechercher par race, nom ou ville" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="connexion.php">Se connecter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="inscription.php">S'inscrire</a>
      </li>
    </ul>
  </div>
</nav>
</header>