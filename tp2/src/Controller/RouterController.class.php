<?php

class RouterController {

  public function route($action){
    switch($action){
      case 'ListeJeu':
        include_once('JeuController.class.php');
        $jeu = new Jeu();
        $content = $jeu->ListeJeu();
        return $content;
        break;
      case 'AjoutUtilisateur':
        include_once('UtilisateurController.class.php');
        $utilisateur = new Utilisateur();
        $content = $utilisateur->AjoutUtilisateur();
        return $content;
        break;
      default:
        return 'Action inexistante';
    }
  }

}
