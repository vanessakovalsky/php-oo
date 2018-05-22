<?php
include_once('src/View/header.html.php');
include_once('src/Controller/JeuController.class.php');

$jeu = new Jeu();
$jeu->AjoutJeu();

include_once('src/View/footer.html.php');
