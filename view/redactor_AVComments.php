

<?php
session_start(); // On démarre la session AVANT toute chose
?>
<?php ob_start(); ?>


<div id="bloc_page">
    <!-- HEADER -->
  <?php require("header.php"); ?>
  <div id="titresession">
    <h2>
      Liste des commentaires à valider
    </h2>
    <p>
      <a href="indexFrontEnd.php">Retour</a>
    </p>
  </div>
       
  <section class="col-xl-offset-1 col-xl-5" id="listeArticle">
      <?php

        while ($donnees = $req->fetch())
        {
        ?>
        <div id="onearticle">
            <p >


            <?php
            echo htmlspecialchars($donnees['author']);?> le 

            <?php
            echo htmlspecialchars($donnees['date_comment']);?></br>
             <?php

            echo htmlspecialchars($donnees['comment']);?></p>
          <a href="indexFrontEnd.php?action=vBufferComment&amp;id=<?php echo $donnees['id']; ?>">Valider </a>
          <a href="indexFrontEnd.php?action=dBufferComment&amp;id=<?php echo $donnees['id']; ?>">Supprimer </a>
  
            </p>
        </div>
        <?php
        }
        $req->closeCursor();
        ?>
  </section>
        
    
  <?php include("footer.php"); ?>
</div>
  <?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>