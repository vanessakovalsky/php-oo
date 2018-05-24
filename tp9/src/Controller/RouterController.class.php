<?php

namespace Controller;

use Controller\JeuController as Jeu;
use Controller\AdminUserController as AdminUser;
use Controller\MembreUserController as MembreUser;

class RouterController {

  public function route($method, $action, $db){
    if($method == 'POST'){
      switch($action){
        case 'AjoutJeu':
          $jeu = new Jeu($_POST);
          $content = $jeu->AjoutJeu($jeu, $db);
          return $content;
        case 'AjoutUtilisateur':
          $utilisateur = new MembreUser($_POST);
          $content = $utilisateur->AjoutUtilisateur($utilisateur, $db);
          return $content;
        default:
          return 'Action inexistante';
      }
    }
    else {
    switch($action){
      case 'Connexion':
        $login = AdminUser::login_check('patate','password');
        return $login;
      case 'ListeJeu':
        $jeu = new Jeu();
        ob_start();
        $jeu->ListeJeu($db);
        $content = ob_get_clean();
        return $content;
      case 'AjoutJeu':
        $jeu = new Jeu();
        ob_start();
        $jeu->AjoutJeu($jeu, $db);
        $content = ob_get_clean();
        return $content;
      case 'VoirJeu':
        $jeu = new Jeu();
        ob_start();
        $jeu->VoirJeu($_GET['id'], $db);
        $content = ob_get_clean();
        return $content;
      case 'ModificationJeu':
        $jeu = new Jeu();
        ob_start();
        $jeu->ModificationJeu();
        $content = ob_get_clean();
        return $content;
      case 'SuppresionJeu':
        $jeu = new Jeu();
        ob_start();
        $jeu->SuppressionJeu();
        $content = ob_get_clean();
        return $content;
      case 'AjoutUtilisateur':
        $utilisateur = new AdminUser();
        ob_start();
        $content = $utilisateur->AjoutUtilisateur();
        $content = ob_get_clean();
        return $content;
      default:
        return 'Action inexistante';
    }
  }
}

}
