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
    
      <!-- HEADER -->
      <?php include("headerindex.php"); ?>
      <!-- DIAPORAMA -->      
      <section id="contenantdiapo">
        <!--contenant diaporama --> 
        <div id="titrelivre">
          <div id="boutons">
            <div class="prev">
              <i class="fas fa-angle-left fa-2x"> 
              </i>
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
      <div  id="titreArticle">
        <h2><?=   htmlspecialchars($post['Title']) ?></h2>
      </div>
      <section class="col-md-offset-1 col-md-6" id="listeArticle"> 
             
        <div class="news">
            <h3> <p>Le <?= nl2br(htmlspecialchars($post['date_publi']))?></p></h3>
            <p><?= nl2br(htmlspecialchars($post['Content']))?></p>
        </div>
      </section>

      <section class="col-md-offset-1 col-md-4" id="listeCommentaires">
          <div id="titreComments">
            <h3>Commentaires</h3>
          </div>
           
			       <?php
            while ($comment = $comments->fetch())
            {
            ?>
              <div id="comment">
                <p>
                <strong><?= htmlspecialchars($comment['author']) ?></strong>
                 le <?= $comment['date_comment'] ?>
                </p>
                <p>
                <?= nl2br(htmlspecialchars($comment['comment'])) ?>
                </p>
              </div>
            <?php
             }// Fin de la boucle des commentaires
            ?>
      </section>
    </div>
  </div>

  <div id="Cfluid" class="container-fluid">

    <div class="row">

      <section id="formulaire2" class="col-lg-12">
        
        <form class="col-md-offset-1 col-md-6" action="index.php?action=addComment&amp;billet=<?= $post['id'] ?>" method="post">
          <p>Ajouter un commentaire</p>
            <div class="form-group">
                <label for="author">Auteur</label><br />
                <input type="text" id="author" name="author" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="comment">Commentaire</label><br />
                <textarea id="comment" name="comment" class="form-control"></textarea><br />
             </div> 
             <div > 
               <input id="submit" type="submit" />
              </div>
        </form>
      </section>
    </div>
  </div>

  <?php include("footer.php"); ?>
    



      
<!-- liens pour les fichiers javascript-->
<script src="js/jquery-3.3.1.js"></script>
<script src="js/diaporama.js"></script>
</body>

</html>