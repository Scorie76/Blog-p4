<?php

function getPosts()
{

$db = dbConnect();
$req = $db->query( 'SELECT  *   FROM posts');

return $req;


}





function getPost($postId)
{

$db = dbConnect();
$req = $db->prepare('SELECT id, Title, Content, date_publi FROM posts WHERE id = ?');
$req->execute(array($postId));
$post = $req->fetch();

return $post;


}

?>

<?php

function getComments($postId)
{


$db = dbConnect();
$comments = $db->prepare('SELECT id, id_billet, author, comment, date_comment FROM comments WHERE id_billet = ? ORDER BY date_comment');
$comments->execute(array($postId));
return $comments;


}

function postComment($postId, $author, $comment)
{
    $db = dbConnect();
    $comments = $db->prepare('INSERT INTO comments (id_billet, author, comment, date_comment) VALUES(?, ?, ?, NOW())');
    $affectedLines = $comments->execute(array($postId, $author, $comment));

    return $affectedLines;
}



function postPost($Title, $Content, $date_publi, $id_author)

{

   $db = dbConnect();
   // Insertion du message à l'aide d'une requête préparée
$posts = $db->prepare('INSERT INTO posts (Title, Content, date_publi, id_author) VALUES( ?,?,?,?)');
$affectedLines = $posts->execute(array($Title, $Content, $date_publi, $id_author ));

return $affectedLines;
    
}

// Nouvelle fonction qui nous permet d'éviter de répéter du code
function dbConnect()
{
	    try
	{$db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
	   
	    return $db;

	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}
}






?>