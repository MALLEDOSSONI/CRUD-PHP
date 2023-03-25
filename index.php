<?php 
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
?>
<?php require('inc_connexion.php');?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projet Ville</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
   <div>
        <h1>Accueil</h1>
        <p>Bienvenue sur le mini-site consacre aux villes.</p>
        <p>Ce site utilise PHP et Mysql</p>
        <p>Utilisez le menu de navigation pour consulter les pages du pages site.</p>
        <p>Bonne visite !</p>
   </div>
   <?php require('inc_menu.php')?>
   <?php require('inc_footer.php')?>
   <?php require('ajout.php')?>
   <?php require('edition.php')?>
   <?php require('supprimer.php')?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>


