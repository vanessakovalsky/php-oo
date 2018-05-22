<?php

//On initialise la connexion à la base de données
include_once('config.php');
try
{
    $db = new PDO('mysql:host='.$db_host.';dbname='.$db_db.';charset=utf8', $db_user, $db_pass);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

include_once('src/Controller/JeuController.class.php');
$jeu = new Jeu();
$content = $jeu->AjoutJeu();

include_once('src/Controller/UtilisateurController.class.php');
$utilisateur = new Utilisateur();
$content .= $utilisateur->AjoutUtilisateur();

include_once('src/View/template.php');
