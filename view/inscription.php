<!DOCTYPE html>
<html lang="fr" xml:lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  
  <link rel="icon" href="images/favicon2.ico" />
  <title>Blog</title>
</head>

<body>

  <div id="bloc_page">


    <!-- HEADER -->
    
<?php include("header.php"); ?>
        



 <div class="container-fluid">  
  <div class="row">
<div class="col-lg-12" id="titreArticle">
  <h2>Formulaire d'inscription
  </h2>
</div>
<section id="formulaire" class="col-lg-12">
<form class="col-lg-7  col-xs-12" action="inscription_post.php" method="post">
  
    <div class="form-group">
      <label for="nom">Nom : </label>
      <input id="nom" name="nom" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="prenom">Prénom : </label>
      <input id="prenom" name="prenom" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="pseudo">Votre Pseudo : </label>
      <input id="pseudo" name="pseudo" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="mdp">mot de passe : </label>
      <input id="mdp" name="mdp" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="email">Adresse email : </label>
      <input id="email" name="email"  type="text" class="form-control">
    </div>
    <input class="submit" type="submit" value="Valider" />
</form>
<figure id="photocontact" class="col-lg-5 col-md-12"><img src="images/inscription.png">
  
</figure>
      
    </section>

</div>
</div>

    
    
<?php include("footer.php"); ?>



  </div>
  <!-- liens pour les fichiers javascript-->
  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/diaporama.js"></script>
  

</body>

</html>