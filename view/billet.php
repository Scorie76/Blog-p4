<!DOCTYPE html>
<html lang="fr" xml:lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Bienvenue sur le site ROuenLOC de location de vélo  de la ville de Rouen. Echappez-vous ! louez un vélo !" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/stylemobile.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="images/favicon2.ico" />
  <title>Blog</title>
</head>

<body>

  <div id="bloc_page">


    <!-- HEADER -->
    <?php include("headerindex.php"); ?>

    <!-- DIAPORAMA -->      

    <section id="contenantdiapo">
</section>
      <!--contenant diaporama --> 
      <div id="titrelivre">
        <div id="boutons">
          <div class="prev">
            <i class="fas fa-angle-left fa-2x"></i>
          </div>
          <div class="next">
            <i class="fas fa-angle-right fa-2x"></i>
          </div>
        </div>
        <div id="billet">
          <img class="images" src="images/titrelivre.png" alt="paysage Alaska">
        </div>
      </div>
      <div id="diaporama">
        <img class="images" src="images/canada1.jpg" alt="paysage Alaska">
        <img class="images" src="images/canada2.jpg" alt="paysage Alaska" >
        <img class="images" src="images/canada3.jpg" alt="paysage Alaska" >
        <img class="images" src="images/canada4.jpg" alt="paysage Alaska" >
      </div>
    </section>

<div class="container-fluid">  
      <div class="row">


<div  id="titreArticle"><h2>Les derniers Articles</h2></div>
    <section class="col-md-offset-1 col-md-5" id="listeArticle">
      <?php

      
        while ($donnees = $req->fetch())
        {
        ?>
        <div id="onearticle">
            <p >
            <?php
            echo htmlspecialchars($donnees['id_author']);?> le 
             <?php

            echo htmlspecialchars($donnees['date_publi']);?></p>
           
             <h4><?php
            echo htmlspecialchars($donnees['Title']);
            ?></h4>
           
            <a href="index.php?action=post&amp;billet=<?php echo $donnees['id']; ?>">Lire le billet</a>
            </p>
          </div>
        <?php
        }
        $req->closeCursor();
        ?>
    </section>

    <div id="photos" class="col-md-offset-1 col-md-5" >
      <div class="col-lg-12" id="photo"><img src="images/ours2.jpg"></div>
      <div class="col-lg-12" id="photo"><img src="images/canoe.jpg"></div>
      <div class="col-lg-12" id="photo"><img src="images/cerf.jpg"></div>
      <div class="col-lg-12" id="photo"><img src="images/montagne.jpg"></div>
    </div>
    
    
    <?php include("footer.php"); ?>



</div>
  </div>


  <!-- liens pour les fichiers javascript-->
  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/diaporama.js"></script>
  

</body>

</html>