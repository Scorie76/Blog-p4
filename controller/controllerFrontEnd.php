<?php

require('../model/modelFrontEnd.php');

function listPosts()
{
    $req = getPosts();

    require('../view/redactor.php');
}

function post()
{
    $post = getPost($_GET['billet']);
    $comments = getComments($_GET['billet']);

    require('view/billet_lecture.php');
}

function addComment($postId, $author, $comment)
{
    $affectedLines = postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&billet=' . $postId);
    }
}

function addPost($Title, $Content, $date_publi, $id_author)

{
    $affectedLines = postPost($Title, $Content, $date_publi, $id_author);

    if ($affectedLines === false) {
        die('Impossible d\'ajouter le billet !');
    }
    else {
        header('Location: indexFrontEnd.php');
    }
}