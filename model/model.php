<?php

require_once("model/modelManager.php");

class FrontManager extends modelManager
{


public function getPosts()
{

$db = $this->dbConnect();
$req = $db->query( 'SELECT  *   FROM posts');

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
    $comments = $db->prepare('INSERT INTO comments_buffer (id_billet, author, comment, date_comment, signalement) VALUES(?, ?, ?, NOW(),0)');
    $affectedLines = $comments->execute(array($postId, $author, $comment));

    return $affectedLines;
}



 public function envoiMailing ($nom, $prenom,$textarea, $adresseMail)
{
    $to  = 'guillaume.morillon@gmx.fr';
    $nom = $nom;
    $prenom = $prenom;
    $message = $textarea;
     

     mail($to, $nom, $prenom, $message);
     Echo 'mail a été envoyé';
    
}


public function loginAdmin($login, $pass)
{
	$db = $this->dbConnect();
	//  Récupération de l'utilisateur et de son pass hashé
$req = $db->prepare('SELECT id, pass, prename, name  FROM admin WHERE login = :login');
$req->execute(array(
    'login' => $login));
$resultat = $req->fetch();


// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($pass, $resultat['pass']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();

        $_SESSION['id'] = $resultat['id'];
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['nom'] = $resultat['name'];
        $_SESSION['prenom'] = $resultat['prename'];
        header('Location: view/indexFrontEnd.php');
        exit();
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}


}


}

?>