

<?php
session_start(); // On démarre la session AVANT toute chose
?>

<?php ob_start(); ?>

<body>

  <div id="bloc_page">
    <!-- HEADER -->
    <?php include("header.php"); ?>
    <div id="titresession">
   
  </div>

 
    <div class="container-fluid">  

      <div class="row">

        <section id="nouvelarticle" class="col-lg-offset-1 col-lg-10" >
          <p><a href="indexFrontEnd.php">Retour</a></p>
          <div class="col-lg-12" id="titreArticle2"></div>
            <h3> <p>Le <?= nl2br(htmlspecialchars($post['date_publi']))?></p></h3><h2><?=   htmlspecialchars($post['Title']) ?></h2>
          <form class=" col-lg-12" action="indexFrontEnd.php?action=UDPost" method="post">
            <div class="bloctiny" >
              <input type="hidden" name="id" id="id" value="<?php echo ($_GET['billet']);?>">
              <label  for="auteur">
                <p>Auteur :</p>
              </label>
              <input class="col-md-offset-1 col-md-9 col-md-offset-1" type="text" class="form-control" name="auteur" value="Jean Forteroche" id="auteur" /><br />
            </div>
            <div class="bloctiny">
              <label for="titre">
                <p>Titre :</p>
              </label>
              <input class="col-md-offset-1 col-md-9 col-md-offset-1" type="text" class="form-control" name="titre" id="titre" value="<?= nl2br(htmlspecialchars($post['Title']))?>" /><br />
            </div>
            <div class="bloctiny">
              <label for="date">
                <p>Date : </p>
              </label>
              <input  class="col-md-offset-1 col-md-9 col-md-offset-1" type="date" class="form-control" name="date" id="date" /><br />
            </div>
            <label for="mytextarea"><p>Message :</p></label><textarea id="mytextarea" type="text" name="mytextarea"><p><?= nl2br(htmlspecialchars($post['Content']))?></p></textarea>
            <input class="submit" type="submit" value="Valider"  />
            <p><a href="indexFrontEnd.php">Retour</a></p>
          </form> 


        </section>
        

   
    </div>  
    <?php include("footer.php"); ?>
  </div>
  <?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>