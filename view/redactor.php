

<?php
session_start(); // On démarre la session AVANT toute chose
?>

<!DOCTYPE html>
<html lang="fr" xml:lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  
  <link rel="stylesheet" href="../css/tiny.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  
  <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=u682ajjtchblk3l9wwujfnabzjwrum4doif77io9a82nmwmi"></script>
  <script>tinymce.init({forced_root_block : false,selector: '#mytextarea'});
  </script>
  

<link rel="icon" href="../images/favicon2.ico" />
<title>Blog</title>
</head>

<body>

  <div id="bloc_page">
    <!-- HEADER -->
    <?php include("header.php"); ?>
    <div id="titresession">
    <h2>
      Bienvenue  <?php echo  $_SESSION['nom'] . '  ' . $_SESSION['prenom'];
      ?>

       sur votre page d'administration 
    </h2>
  </div>

  
    <div class="container-fluid">  
      <div class="row">
        <section id="nouvelarticle" class="col-lg-offset-1 col-lg-5" >
          <div class="col-lg-12" id="titreArticle2"><h2>Créer un billet</h2></div>
          <form class=" col-lg-12" action="indexFrontEnd.php?action=addPost" method="post">
            <div class="bloctiny" >
              <label  for="auteur">
                <p>Auteur :</p>
              </label>
              <input class="col-md-offset-1 col-md-9 col-md-offset-1" type="text" class="form-control" name="auteur" id="auteur" /><br />
            </div>
            <div class="bloctiny">
              <label for="titre">
                <p>Titre :</p>
              </label>
              <input class="col-md-offset-1 col-md-9 col-md-offset-1" type="text" class="form-control" name="titre" id="titre" /><br />
            </div>
            <div class="bloctiny">
              <label for="date">
                <p>Date : </p>
              </label>
              <input  class="col-md-offset-1 col-md-9 col-md-offset-1" type="date" class="form-control" name="date" id="date" /><br />
            </div>
            <label for="mytextarea"><p>Message :</p></label><textarea id="mytextarea" type="text" name="mytextarea"></textarea>
            <input class="submit" type="submit" value="Valider"  />
          </form>  
        </section>
        <section id="listebilletsenligne"  class="col-lg-offset-1 col-lg-4 col-lg-offset-1">
          <div id="commentaires" ><h2>billets en ligne</h2></div>



        
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
        
      </div> 
      <section id="listeCommentairesAV" class="col-lg-offset-2 col-lg-8" >
          <div id="commentaires" ><h2>Commentaires à valider</h2></div>
        </section>
    </div>  
    <?php include("footer.php"); ?>
  </div>
  <!-- liens pour les fichiers javascript-->
  <script src="../js/jquery-3.3.1.js"></script>
  <script src="../js/diaporama.js"></script>
</body>

</html>