<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
    
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


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
        header('Location: indexFrontEnd.php');
        exit();
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}

