<?php
include_once('src/Controller/RouterController.class.php');
$router = new RouterController();
$content = $router->route($_GET['actions']);

include_once('src/View/template.php');
