<?php
use Exception\KingoludoException;
use Controller\RouterController;
use Session;

//On initialise la connexion à la base de données
include_once('config.php');

require('src/Autoloader.class.php');
Autoloader::register();

try
{
    $db = new PDO('mysql:host='.$db_host.';dbname='.$db_db.';charset=utf8', $db_user, $db_pass);
}
catch(Exception $e)
{
  $exception = new KingoludoException();
  $exception->showMessage('erreur connexion db');
}
$session = new Session();

$router = new RouterController();
$content = $router->route($_SERVER['REQUEST_METHOD'],$_GET['actions'],$session);

include_once('src/View/template.php');
