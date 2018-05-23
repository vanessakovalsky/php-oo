<?php

class RouterController {

  public function route($method, $action, $db){
    if($method == 'POST'){
      switch($action){
        case 'AjoutJeu':
          include_once('JeuController.class.php');
          $jeu = new Jeu($_POST);
          $content = $jeu->AjoutJeu($jeu, $db);
          return $content;
        case 'AjoutUtilisateur':
          include_once('MembreUserController.class.php');
          $utilisateur = new MembreUser($_POST);
          $content = $utilisateur->AjoutUtilisateur($utilisateur, $db);
          return $content;
        default:
          return 'Action inexistante';
      }
    }
    else {
    switch($action){
      case 'ListeJeu':
        include_once('JeuController.class.php');
        $jeu = new Jeu();
        ob_start();
        $jeu->ListeJeu($db);
        $content = ob_get_clean();
        return $content;
      case 'AjoutJeu':
        include_once('JeuController.class.php');
        $jeu = new Jeu();
        ob_start();
        $jeu->AjoutJeu($jeu, $db);
        $content = ob_get_clean();
        return $content;
      case 'VoirJeu':
        include_once('JeuController.class.php');
        $jeu = new Jeu();
        ob_start();
        $jeu->VoirJeu($_GET['id'], $db);
        $content = ob_get_clean();
        return $content;
      case 'ModificationJeu':
        include_once('JeuController.class.php');
        $jeu = new Jeu();
        ob_start();
        $jeu->ModificationJeu();
        $content = ob_get_clean();
        return $content;
      case 'SuppresionJeu':
        include_once('JeuController.class.php');
        $jeu = new Jeu();
        ob_start();
        $jeu->SuppressionJeu();
        $content = ob_get_clean();
        return $content;
      case 'AjoutUtilisateur':
        include_once('AdminUserController.class.php');
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
