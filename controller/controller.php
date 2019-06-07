<?php

// Chargement des classes

require_once('model/model.php');

function listPosts()
{
    $frontManager = new FrontManager(); // Création d'un objet
    $req = $frontManager -> getPosts(); // Appel d'une fonction de cet objet

    require('view/billet.php');
}



function post()

{

    $frontManager = new FrontManager(); // Création d'un objet


    $post = $frontManager->getPost($_GET['billet']);
    $comments = $frontManager->getComments($_GET['billet']);

    require('view/billet_lecture.php');
}

function addComment($postId, $author, $comment)
{
    $frontManager = new FrontManager(); // Création d'un objet

    $affectedLines = $frontManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
    }
    else {
      //header('Location: index.php?action=post&billet=' . $postId);
     
        ?>
    <script language="javascript">window.history.back(); </script>;<?php
    }
    
}

function connection($login, $pass)
{

    $frontManager = new FrontManager(); // Création d'un objet

    $affectedLines = $frontManager->loginAdmin($login, $pass);
    ?>
    <script language="javascript">document.location="index.php"</script>;<?php
}

function mailing($nom, $prenom,$textarea, $adresseMail)
{
    $frontManager = new FrontManager(); // Création d'un objet

    $affectedLines = $frontManager->envoiMailing($nom, $prenom,$textarea, $adresseMail);
   
    if ($affectedLines === false) {
        die('Impossible d\'envoyer le message !');
    }
    else {
        ?>
    <script language="javascript">document.location="index.php"</script>;<?php
    }
}

