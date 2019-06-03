

<?php
session_start(); // On démarre la session AVANT toute chose
?>

<?php ob_start(); ?>

<body>

  <div id="bloc_page">
    <!-- HEADER -->
    <?php include("header.php"); ?>
    
    <div class="container-fluid">  
      <div class="row">
        <div  id="titreArticle" class=" col-lg-12">
          <h3>
           <p>Le <?= nl2br(htmlspecialchars($post['date_publi']))?></p>
          </h3>
          <h2><?=   htmlspecialchars($post['Title']) ?>  
          </h2> 
          <p><a href="indexFrontEnd.php">Retour</a></p>
        </div>
        <section class="col-lg-offset-2 col-lg-6" id="listeArticle"> 
             
        <div class="news">
          <p><?= nl2br(htmlspecialchars($post['Content']))?></p> 
        </div>
        </section>

        <section class="col-lg-offset-2 col-lg-4" id="listeCommentaires">
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
                 le <?= $comment['date_comment'] ?> identifiant : <?= $comment['id'] ?>
              </p>
              <p>
                <?= nl2br(htmlspecialchars($comment['comment'])) ?>
              </p>
             <a href="indexFrontEnd.php?action=dComment&amp;id=<?php echo $comment['id']; ?>">Supprimer</a>
          </div>
            <?php
             }// Fin de la boucle des commentaires
            ?>
            <p>
              <a href="indexFrontEnd.php">Retour</a>
            </p>   
        </section>
      </div>
    </div>
  </div> 
      
     
  <?php include("footer.php"); ?> 
  <?php $content = ob_get_clean(); ?>
  <?php require('template.php'); ?>

</body>