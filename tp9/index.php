<?php
use Exception\KingoludoException;

//On initialise la connexion à la base de données
include_once('config.php');

require('src/Autoloader.class.php');
Autoloader::register();

try
{
    $db = new PDO('mysql:host='.$db_host.';dbname='.$db_db.';charset=utf8', $db_user , $db_pass);
}
catch(KingoludoException $e)
{
    $e->showMessage('Erreur de connexion à la DB');
}

$router = new Controller\RouterController();
$content = $router->route($_SERVER['REQUEST_METHOD'],$_GET['actions'], $db);

include_once('src/View/template.php');
