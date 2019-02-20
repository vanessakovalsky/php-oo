<?php
namespace Controller;

use Session\Session;
use Controller\AdminUserController;
use Controller\JeuController;

class RouterController {

  public function route($method, $action, Session $session){
    if($method == 'POST'){
      switch($action){
        case 'Connexion':
          $content = AdminUserController::connexion($session);
          return $content;
          break;
        case 'AjoutJeu':
          $jeu = new JeuController();
          $content = $jeu->AjoutJeu($_POST);
          return $content;
        case 'AjoutUtilisateur':
          $utilisateur = new AdminUserController($session);
          $content = $utilisateur->AjoutUtilisateur($_POST);
          return $content;
        case 'ModificationUtilisateur':
            $user_id = $_GET['uid'];
            $utilisateur = new AdminUserController($session);
            $content = $utilisateur->ModificationUtilisateur($user_id, $_POST);
            return $content;
        default:
          return 'Action inexistante';
      }
    }
    else {
    switch($action){
      case 'Connexion';
        ob_start();
        $content = AdminUserController::connexion($session);
        $content = ob_get_clean();
        return $content;
        break;
      case 'Deconnexion';
        ob_start();
        $content = AdminUserController::deconnexion($session);
        $content = ob_get_clean();
        return $content;
        break;
      case 'ListeJeu':
        $jeu = new JeuController();
        ob_start();
        $content = $jeu->ListeJeu();
        $content = ob_get_clean();
        return $content;
        break;
      case 'AjoutJeu':
        $jeu = new JeuController();
        ob_start();
        $jeu->AjoutJeu();
        $content = ob_get_clean();
        return $content;
        break;
      case 'AjoutUtilisateur':
        $utilisateur = new AdminUserController($session);
        ob_start();
        $content = $utilisateur->AjoutUtilisateur();
        $content = ob_get_clean();
        return $content;
        break;
      case 'ModificationUtilisateur':
          $utilisateur = new AdminUserController($session);
          $user_id = $_GET['uid'];
          $content = $utilisateur->ModificationUtilisateur($user_id);
          return $content;
          break;
      case 'SuppressionUtilisateur':
        break;
      case 'VoirUtilisateur':
          break;
       case 'VoirJeu':
          $jeu = new JeuController();
          ob_start();
          $content = $jeu->voirJeu(1);
          $content = ob_get_clean();
          return $content;
      default:
        return 'Action inexistante';
      }
    }
  }
}
