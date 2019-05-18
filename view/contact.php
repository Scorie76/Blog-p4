
<?php ob_start(); ?>
  


    <!-- HEADER -->
    
    <?php include("header.php"); ?>


    <div class="container-fluid">  
      <div class="row">
        <div class="col-lg-12" id="titreArticle">
          <h2>Formulaire de contact
          </h2>
        </div>
        <section id="formulaire" class="col-lg-12">
          <form class="col-md-offset-1 col-md-4  col-xs-12">
            <div class="form-group">
              <p> Envoyez-nous un message</p>
              <label for="texte">Nom : </label>
              <input id="text" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="texte">Prénom : </label>
              <input id="text" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="textarea">Votre message : </label>
              <textarea id="textarea" type="textarea" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="select">Votre Email : </label>
              <input id="text" type="text" class="form-control">
            </div>
            <input class="submit" type="submit" value="Valider" />
          </form>
          <figure id="photocontact" class="col-md-offset-2 col-md-5 "><img src="../images/contact.jpg">
          </figure>
        </section>

      </div>
    </div>
    <?php include("footer.php"); ?>
 

   <?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

