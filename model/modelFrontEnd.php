<?php

require_once("modelManager.php");


class BackManager extends modelManager
{

 public function getPosts()
{

$db = $this->dbConnect();
$req = $db->query( 'SELECT  *   FROM posts');( 'SELECT  *   FROM comments_buffer');

return $req;


}





 public function getPost($postId)
{

$db = $this->dbConnect();
$req = $db->prepare('SELECT id, Title, Content, date_publi FROM posts WHERE id = ?');
$req->execute(array($postId));
$post = $req->fetch();

return $post;


}



public function getComments($postId)
{


$db = $this->dbConnect();
$comments = $db->prepare('SELECT id, id_billet, author, comment, date_comment FROM comments WHERE id_billet = ? ORDER BY date_comment');
$comments->execute(array($postId));
return $comments;


}

public function postComment($postId, $author, $comment)
{
    $db = $this->dbConnect();
    $comments = $db->prepare('INSERT INTO comments (id_billet, author, comment, date_comment) VALUES(?, ?, ?, NOW())');
    $affectedLines = $comments->execute(array($postId, $author, $comment));

    return $affectedLines;
}



public function postPost($Title, $Content, $date_publi, $id_author)

{

   $db = $this->dbConnect();
   // Insertion du message à l'aide d'une requête préparée
$posts = $db->prepare('INSERT INTO posts (Title, Content, date_publi, id_author) VALUES( ?,?,?,?)');
$affectedLines = $posts->execute(array($Title, $Content, $date_publi, $id_author ));

return $affectedLines;
    
}


public function updatePost ($Title, $Content, $date_publi, $id_author, $id )

{

   $db = $this->dbConnect();
   // modification du message à l'aide d'une requête préparée
$req = $db->prepare('UPDATE posts SET Title = :nvtitle, Content = :nvcontent, date_publi = :nvdate_publi, id_author = :nvid_author WHERE id = :id ');
$req->execute(array(
	'nvtitle'=> $Title,
	'nvcontent'=> $Content,
	'nvdate_publi'=> $date_publi,
	'nvid_author'=> $id_author,
	'id'=> $id
	));

return $req;

    
}

public function deletePost($postId)

{
$db = $this->dbConnect();
	
$req = $db->prepare('DELETE FROM  posts WHERE id = ?');
$req->execute(array($postId));
$post = $req->fetch();

return $post;


}

public function deleteComment($id)

{
	
$db = $this->dbConnect();
$req = $db->prepare('DELETE FROM  comments WHERE id = ?');
$req->execute(array($id));
$post = $req->fetch();

return $post;


}




public function getavComments()
{

$db = $this->dbConnect();
$req = $db->query( 'SELECT  *   FROM comments_buffer');

return $req;


}



public function deleteBufferComment($id)

{
	
$db = $this->dbConnect();
$req = $db->prepare('DELETE FROM  comments_buffer WHERE id = ?');
$req->execute(array($id));
$post = $req->fetch();

return $post;


}

public function validateBufferComment($id)

{
	
$db = $this->dbConnect();
$req = $db->prepare('INSERT INTO  comments (id,id_billet, author, comment, date_comment, signalement) SELECT id, id_billet, author, comment, date_comment, signalement FROM comments_buffer WHERE id = ?');
$req->execute(array($id));
$post = $req->fetch();
return $post;
}



public function MessageValidateBufferComment()
{
	echo "<script>alert(\"la variable est nulle\")</script>";
	
}






public function validateSignalComment($id)

{
  $db = $this->dbConnect();
   // modification du message à l'aide d'une requête préparée
$req = $db->prepare('UPDATE comments SET signalement = :nvsignalement WHERE id = :id ');
$req->execute(array(
	'nvsignalement'=> 1,
	'id'=> $id
	));

return $req;


}

public function DisplayReportsComment()
{

$db = $this->dbConnect();
$req = $db->query( 'SELECT  *   FROM comments WHERE signalement=1');

return $req;


}

public function deleteSignalComment($id)

{
	
$db = $this->dbConnect();
$req = $db->prepare('DELETE FROM  comments WHERE id = ?');
$req->execute(array($id));
$post = $req->fetch();

return $post;



}

public function cancelSignalComment($id)

{
	
  $db = $this->dbConnect();
   // modification du message à l'aide d'une requête préparée
$req = $db->prepare('UPDATE comments SET signalement = :nvsignalement WHERE id = :id ');
$req->execute(array(
	'nvsignalement'=> 0,
	'id'=> $id
	));

return $req;


}



}

?>