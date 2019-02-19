<?php

class RouterController {

  public function route($method, $action){
    if($method == 'POST'){
      switch($action){
        case 'AjoutJeu':
          include_once('JeuController.class.php');
          $jeu = new JeuController();
          $content = $jeu->AjoutJeu($_POST);
          return $content;
        case 'AjoutUtilisateur':
          include_once('AdminUserController.class.php');
          $utilisateur = new AdminController();
          $content = $utilisateur->AjoutUtilisateur($_POST);
          return $content;
        case 'ModificationUtilisateur':
            include_once('UtilisateurController.class.php');
            $user_id = $_GET['uid'];
            $utilisateur = new UtilisateurController();
            $content = $utilisateur->ModificationUtilisateur($user_id, $_POST);
            return $content;
        default:
          return 'Action inexistante';
      }
    }
    else {
    switch($action){
      case 'ListeJeu':
        include_once('JeuController.class.php');
        $jeu = new JeuController();
        $content = $jeu->ListeJeu();
        return $content;
        break;
      case 'AjoutJeu':
        include_once('JeuController.class.php');
        $jeu = new JeuController();
        ob_start();
        $jeu->AjoutJeu();
        $content = ob_get_clean();
        return $content;
        break;
      case 'AjoutUtilisateur':
        include_once('UtilisateurController.class.php');
        $utilisateur = new UtilisateurController();
        ob_start();
        $content = $utilisateur->AjoutUtilisateur();
        $content = ob_get_clean();
        return $content;
        break;
      case 'ModificationUtilisateur':
          include_once('UtilisateurController.class.php');
          $utilisateur = new UtilisateurController();
          $user_id = $_GET['uid'];
          $content = $utilisateur->ModificationUtilisateur($user_id);
          return $content;
          break;
      case 'SuppressionUtilisateur':
        include_once('UtilisateurController.class.php');
        break;
      case 'VoirUtilisateur':
          include_once('UtilisateurController.class.php');
          break;
      default:
        return 'Action inexistante';
      }
    }
  }
}
