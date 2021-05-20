<?php

require_once '../vendor/autoload.php';
require_once '../vendor/fzaninotto/faker/src/autoload.php';
require_once '../form/configuration.php';
require_once '../config/connect.php';
require_once '../config/slug.php';


$number = isset ($_GET['faker']) && is_numeric($_GET['faker']) && ($_GET['faker']) >= 1 ? $_GET['faker'] : null;
if (null !== $number) {
    //echo $number;
    for ($i = 1; $i <= $number; ++$i) {
        $faker = Faker\Factory::create('fr_FR');
        $name = $faker->name;
        $description = $faker->text($maxNbChars = 255);
        $image = 'blank.png'; 
        $time_at = new \DateTime();
        $time_at = date_format($time_at, 'Y-m-d H:i:s');
        $slug = $faker->slug;
        $techno = json_encode(['html']);
        $github = 'https://github.com/'. $faker->userName;
        $lien = $faker->url;
        $statut = $faker->boolean;
        $sql = "INSERT INTO projets(name,description,image,time_at,slug,techno,github,lien,statut) VALUES ('$name','$description','$image','$time_at','$slug','$techno','$github','$lien','$statut')";
      if ($mysqli->query($sql) === true) {
        echo '<h4>Profil '.$i.'</h4>';
        echo '<strong>pseudo:</strong> '.$faker->name.'<br>';
        echo '<strong>description:</strong> '.$faker->text($maxNbChars = 255).'<br>';
        echo '<strong>image:</strong> '.'<img src = "blank.png">'.'<br>';
        echo '<strong>Time:</strong> '.$time_at.'<br>';
        echo '<strong>slug:</strong> '.$faker->name.'<br>';
        echo '<strong>github:</strong> '.'https://github.com/'. $faker->userName.'<br>';
        echo '<strong>lien:</strong> '.$faker->url.'<br>';
        echo '<strong>statut:</strong>'.$statut;
      }
    }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Projet</title>
  </head>
  <body>
    <h1>Projet</h1>

    <form>
  <div class="form-group">
    <label for="formGroupExampleInput">Nombre de projet</label>
    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="renseigner le nombre de projet" name="faker" min="0"><br>
    <button type="submit" class="btn btn-primary">Valider</button>
  </div>
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>