<?php

require('model/model.php');

function listPosts()
{
    $req = getPosts();

    require('view/billet.php');
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

function connection()
{
    $req = loginAdmin();
    require ('view/login.php');
}