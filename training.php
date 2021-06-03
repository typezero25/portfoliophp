<?php

require_once 'config/connect.php';
require_once 'form/trainingform.php';

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--CSS-->
    <link href="css/register.css" rel="stylesheet">

    <title>Training</title>
</head>

<body>

<!--HEADER-->
<header>
    <div id="site-header"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="mx-5 nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="mx-5 nav-link" href="portfolio.php">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="mx-5 nav-link" href="competences.php">Compétences</a>
                </li>
                <li class="nav-item">
                    <a class="mx-5 nav-link" href="login.php">Connexion<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="mx-5 nav-link" href="register.php">S'enregistrer<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="mx-5 nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="mx-5 nav-link " href="about.php">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="mx-5 nav-link " href="training.php">Training</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!--FIN HEADER-->
<!--BODY-->
<main>
<section class="container register">
<form method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="email" name="user_email" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="password" name="user_password" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Adresse</label>
    <input type="text" class="form-control" id="adresse" name="user_adresse" placeholder="Numéro + Rue" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ville</label>
      <input type="text" class="form-control" id="ville" name="user_ville" required> 
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Region</label>
      <select id="region" name="user_region" class="form-control" required>
        <option selected>Choose...</option>
        <option>Bretagne</option>
        <option>Grand Est</option>
        <option>îles de France</option>
        <option>PACA</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Code Postal</label>
      <input type="text" class="form-control" id="postal" name="user_postal" required>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">S'enregistrer</button>
</form>
</section class="container register"><br>
</main>
<!--FIN BODY-->
<!--Debut Footer-->
<footer id="colophon" class="site-footer">
  <div class="footer-basic">
  <ul class="list-inline">
      <li class="list-inline-item"><a href="index.php">Accueil</a></li>
      <li class="list-inline-item"><a href="portfolio.php">Portfolio</a></li>
      <li class="list-inline-item"><a href="competences.php">Compétences</a></li>
      <li class="list-inline-item"><a href="login.php">Connexion</a></li>
      <li class="list-inline-item"><a href="register.php">S'enregistrer</a></li>
      <li class="list-inline-item"><a href="contact.php">Contact</a></li>
      <li class="list-inline-item"><a href="about.php">A propos</a></li>
      <li class="list-inline-item"><a href="training.php">Training</a></li>
  </ul>
</div>

<div class="social-wrapper">
  <ul>
    <li>
      <a href="#" target="_blank">
        <img src="https://cdn3.iconfinder.com/data/icons/2018-social-media-logotypes/1000/2018_social_media_popular_app_logo_twitter-256.png" alt="Twitter Logo" class="twitter-icon"></a>
    </li>
    <li>
      <a href="#" target="_blank">
        <img src="https://cdn3.iconfinder.com/data/icons/2018-social-media-logotypes/1000/2018_social_media_popular_app_logo_instagram-512.png" alt="Instagram Logo" class="instagram-icon"></a>
    </li>
    <li>
      <a href="#" target="_blank">
        <img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Linkedin_unofficial_colored_svg-512.png" alt="Linkedin Logo" class="linkedin-icon"></a>
    </li>
    <li>
      <a href="#" target="_blank">
        <img src="http://www.iconarchive.com/download/i54037/danleech/simple/facebook.ico" alt="Facebook Logo" class="facebook-icon"></a>
    </li>
    <li>
      <a href="#" target="_blank">
        <img src="https://lh3.googleusercontent.com/j_RwVcM9d47aBDW5DS1VkdxUYCkDUCB6wZglv4x-9SmsxO0VaFs7Csh-FmKRCWz9r_Ef=w170" alt="Youtube Logo" class="youtube-icon"></a>
    </li>
  </ul>
</div>

<nav class="footer-nav">
</nav>
<p class="copyright">Copyright © 2021</p>
</footer>
<!--Fin footer-->
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>

</html>