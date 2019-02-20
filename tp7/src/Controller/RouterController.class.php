<?php

class RouterController {

  public function route($method, $action){
    if($method == 'POST'){
      switch($action){
        case 'Connexion':
          include_once('AdminUserController.class.php');
          $content = AdminUser::connexion($_POST);
          return $content;
          break;
        case 'AjoutJeu':
          include_once('JeuController.class.php');
          $jeu = new JeuController();
          $content = $jeu->AjoutJeu($_POST);
          return $content;
        case 'AjoutUtilisateur':
          include_once('AdminUserController.class.php');
          $utilisateur = new AdminUser();
          $content = $utilisateur->AjoutUtilisateur($_POST);
          return $content;
        case 'ModificationUtilisateur':
            include_once('AdminUserController.class.php');
            $user_id = $_GET['uid'];
            $utilisateur = new AdminUser();
            $content = $utilisateur->ModificationUtilisateur($user_id, $_POST);
            return $content;
        default:
          return 'Action inexistante';
      }
    }
    else {
    switch($action){
      case 'Connexion';
        include_once('AdminUserController.class.php');
        ob_start();
        $content = AdminUser::connexion();
        $content = ob_get_clean();
        return $content;
        break;
      case 'ListeJeu':
        include_once('JeuController.class.php');
        $jeu = new JeuController();
        ob_start();
        $content = $jeu->ListeJeu();
        $content = ob_get_clean();
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
        include_once('AdminUserController.class.php');
        $utilisateur = new AdminUser();
        ob_start();
        $content = $utilisateur->AjoutUtilisateur();
        $content = ob_get_clean();
        return $content;
        break;
      case 'ModificationUtilisateur':
          include_once('AdminUserController.class.php');
          $utilisateur = new AdminUser();
          $user_id = $_GET['uid'];
          $content = $utilisateur->ModificationUtilisateur($user_id);
          return $content;
          break;
      case 'SuppressionUtilisateur':
        include_once('AdminUserController.class.php');
        break;
      case 'VoirUtilisateur':
          include_once('AdminUserController.class.php');
          break;
       case 'VoirJeu':
          include_once('JeuController.class.php');
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
