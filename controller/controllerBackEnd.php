<?php

// Chargement des classes

require_once('../model/modelBackEnd.php');

function listPosts()
{
    $backManager = new BackManager(); // Création d'un objet
    $req = $backManager -> getPosts(); // Appel d'une fonction de cet obj

    require('../view/backend/redactor.php');
}

function post()
{
    $backManager = new BackManager(); // Création d'un objet
    $post = $backManager ->getPost($_GET['billet']);
    $comments = $backManager ->getComments($_GET['billet']);

    require('../view/backend/redactor_lecture.php');
}

function mPost()
{
    $backManager = new BackManager(); // Création d'un objet
    $post = $backManager ->getPost($_GET['billet']);
    $comments = $backManager ->getComments($_GET['billet']);

    require('../view/backend/redactor_modification.php');
}



function addComment($postId, $author, $comment)
{
     $backManager = new BackManager(); // Création d'un objet
    $affectedLines = $backManager ->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&billet=' . $postId);
    }
}

function addPost($Title, $Content, $date_publi, $id_author)

{
    $backManager = new BackManager(); // Création d'un objet
    $affectedLines = $backManager ->postPost($Title, $Content, $date_publi, $id_author);

    if ($affectedLines === false) {
        die('Impossible d\'ajouter le billet !');
    }
    else {
        //header('Location: indexFrontEnd.php');
        ?>
    <script language="javascript">document.location="indexBackEnd.php"</script>;<?php
    }
}


function UDPost($Title, $Content, $date_publi, $id_author,$id)
{
    $backManager = new BackManager(); // Création d'un objet
    $affectedLines = $backManager ->updatePost($Title, $Content, $date_publi, $id_author, $id);

    if ($affectedLines === false) {
        die('Impossible de modifier le billet !');
         
    }
    else {
        //header('Location: indexFrontEnd.php' );
        ?>
    <script language="javascript">document.location="indexBackEnd.php"</script>;<?php
    }
}

function dpost()
{
    $backManager = new BackManager();
    $post = $backManager ->deletePost($_GET['billet']);
   

    //header('Location: indexFrontEnd.php' );
    ?>
    <script language="javascript">document.location="indexBackEnd.php"</script>;<?php

}

function dComment()
{
    $backManager = new BackManager();
    $post = $backManager ->deleteComment($_GET['id']);
   

    //header('Location: indexFrontEnd.php' );
    ?>
    <script language="javascript">document.location="indexBackEnd.php"</script>;<?php

}

function avComment()
{
    $backManager = new BackManager();
    $req = $backManager ->getavComments();

    require('../view/backend/redactor_AVComments.php');
}

function dBufferComment()
{
    $backManager = new BackManager();
    $post = $backManager ->deleteBufferComment($_GET['id']);

   //header('Location: indexFrontEnd.php?action=avComment' );
    ?>
    <script language="javascript">document.location="indexBackEnd.php?action=avComment"</script>;<?php
}

function vBufferComment()
{
    $backManager = new BackManager();
   
    $post = $backManager ->validateBufferComment($_GET['id']);
            $backManager ->deleteBufferComment($_GET['id']);
    //header('Location: indexFrontEnd.php?action=avComment' );

    ?>
    <script language="javascript">document.location="indexBackEnd.php?action=avComment"</script>;<?php



    
}

function mBufferComment()
{
    $backManager = new BackManager();
    $backManager ->MessageValidateBufferComment();
   
}



function signalerComment()
{
    $backManager = new BackManager();
    $post = $backManager ->validateSignalComment($_GET['id']);
    //header("Location: ../index.php?action=post&billet= 10 " );
   
    ?>
    <script language="javascript">history.go(-1)</script>;<?php
   
}

function DisplaySComment()
{
    
    $backManager = new BackManager();
    $req = $backManager ->DisplayReportsComment();
   

   require('../view/backend/redactor_signalComments.php');

}

function dSignalComment()
{
    $backManager = new BackManager();
    $post = $backManager ->deleteSignalComment($_GET['id']);
   

   //header('Location: indexFrontEnd.php?action=DisplaySComment' );
    ?>
    <script language="javascript">document.location="indexBackEnd.php?action=DisplaySComment"</script>;<?php
}

function cSignalComment()
{
    $backManager = new BackManager();
    $post =  $backManager ->cancelSignalComment($_GET['id']);
   

   //header('Location: indexFrontEnd.php?action=DisplaySComment' );
     ?>
    <script language="javascript">document.location="indexBackEnd.php?action=DisplaySComment"</script>;<?php
}


function disconnect()
{
    $backManager = new BackManager();
    $backManager ->disconnectSession();

   
}

function verificationS()
{
    $backManager = new BackManager();
    $backManager ->verificationSession();

   
}
