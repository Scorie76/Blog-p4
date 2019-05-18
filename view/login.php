
<?php ob_start(); ?>

  <div id="bloc_page">
    <!-- HEADER -->
    <?php include("header.php"); ?>
    <!-- DIAPORAMA -->      
    <div id="titreArticle"><h2>Pour vous connectez à votre d'administration, veuillez renseigner votre Login et Mot de passe</h2></div>
    <section id="cadreLogin">
      <figure id="imageLogin">
        <img src="../images/login.jpg">
      </figure>
      <form action="login_post.php" method="post" target="_blank" > 
        <input type="text" name="login"placeholder="Login"size="25" maxlength="30" /> 
        <input type="password" name="pass"placeholder="Mot de Passe" size="25" maxlength="30"/> 
        <input class="submit" type="submit" value="Valider" />
      </form>
    </section>
    <?php include("footer.php"); ?>
  </div>
  

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
