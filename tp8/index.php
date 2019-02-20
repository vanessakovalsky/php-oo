<?php
//On initialise la connexion à la base de données
include_once('config.php');
include_once('src/Exception/KingoludoException.class.php');
try
{
    $db = new PDO('mysql:host='.$db_host.';dbname='.$db_db.';charset=utf8', $db_user, $db_pass);
}
catch(Exception $e)
{
  $exception = new KingoludoException();
  $exception->showMessage('erreur connexion db');
}
include_once('./src/Session.php');;
$session = new Session();

include_once('src/Controller/RouterController.class.php');
$router = new RouterController();
$content = $router->route($_SERVER['REQUEST_METHOD'],$_GET['actions'],$session);

include_once('src/View/template.php');
