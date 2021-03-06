<!DOCTYPE html>
<html lang="fr" xml:lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Bienvenue sur le site ROuenLOC de location de vélo  de la ville de Rouen. Echappez-vous ! louez un vélo !" />
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
    <!-- DIAPORAMA -->      

    <section id="contenantdiapo">

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
        <div class="col-lg-12" id="titreArticle">
          <h2>L'Auteur
          </h2>
        </div>


        <section id="Auteur" class="col-lg-12">


          <div id="texteAuteur"class="col-lg-8 col-sm-12"><p>

            Douglas Reeman est un écrivain français. 

            Il a publié nombre de ses œuvres sous le pseudonyme d'Alexander Kent.

            A l'âge de 16 ans, il s'engage dans la Royal Navy avec laquelle il servira lors de la Seconde Guerre mondiale dans les campagnes de l'Atlantique et de la Méditerranée. Il débute sa carrière maritime comme aspirant de marine sur un destroyer et sera transféré par la suite sur un navire lance-torpilles. A la fin de la guerre, il exerce plusieurs métiers, tels que loueur de bateaux ou policier. Il retourne dans l'armée active pour la Guerre de Corée puis est versé dans la réserve.

            En 1957, après avoir publié deux courtes nouvelles il écrit son premier roman "A Prayer for the Ship" qui est publié l'année suivante et qui est le début d'une longue carrière d'écrivain. 

            Dix ans plus tard, après avoir publié plusieurs romans, il retourne à son sujet de prédilection, à savoir les romans maritimes de l'époque napoléonienne et commence une longue série de romans qu'il signe sous le pseudonyme d'Alexander Kent (du nom d'un camarade tué pendant la guerre). 

            En juin 1968, le premier de ces romans "Cap sur la gloire" (To Glory we Steer) est publié, permettant à ses lecteurs de découvrir le personnage de Richard Bolitho.

            Outre la série "Bolitho", de loin celle qui a le plus connu le succès, Douglas Reeman a signé les livres de la série "Blackwood" (1982-2004) ainsi que "L'attaque vient de la mer" (Against the Sea, 1971), un recueil de ses premiers romans autobiographiques.

            En 2005, en plus de 36 romans racontant les exploits de Richard et Adam Bolitho, Reeman a écrit 35 autres romans, traduits dans 14 langues différentes. 34 millions d'exemplaires auraient été vendus, dans une vingtaine de langues. 

          Douglas Reeman était marié depuis 1985 à l'écrivaine canadienne Kimberley Jordan.</p></div>
          <figure id="photoAuteur" class="col-lg-4 col-sm-12"><img src="images/photoJF.jpg">
            <figcaption>Jean Forteroche</figcaption>
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