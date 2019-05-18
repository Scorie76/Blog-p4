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

function loginAdmin()
{
	$db = dbConnect();
	//  Récupération de l'utilisateur et de son pass hashé
$req = $bdd->prepare('SELECT id, pass, prename, name  FROM admin WHERE login = :login');
$req->execute(array(
    'login' => $_POST['login']));
$resultat = $req->fetch();


// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

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
        
        exit();
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}


}




?>