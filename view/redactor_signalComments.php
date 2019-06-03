

<?php
session_start(); // On démarre la session AVANT toute chose
?>



    <!-- HEADER -->
  <?php require("header.php"); ?>
  <div id="titresession">
    <h2>
      Liste des messages signalés par les lecteurs  
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
          
          <a href="indexFrontEnd.php?action=dSignalComment&amp;id=<?php echo $donnees['id']; ?>">Supprimer </a>
          <a href="indexFrontEnd.php?action=cSignalComment&amp;id=<?php echo $donnees['id']; ?>">ignorer le signal </a> 
          </p>
          </div>
        <?php
        }
        $req->closeCursor();
        ?>
  </section>
          
    


<?php include("footer.php"); ?>

  <?php $content = ob_get_clean(); ?>

  <?php require('template.php'); ?>
  