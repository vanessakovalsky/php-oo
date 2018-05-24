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

include_once('src/Controller/RouterController.class.php');
$router = new RouterController();
$content = $router->route($_SERVER['REQUEST_METHOD'],$_GET['actions'], $db);

include_once('src/View/template.php');
