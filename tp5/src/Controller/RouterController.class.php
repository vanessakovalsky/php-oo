<?php

class RouterController {

  public function route($method, $action, $db){
    if($method == 'POST'){
      include_once('JeuController.class.php');
      $jeu = new Jeu($_POST);
      $content = $jeu->AjoutJeu($jeu, $db);
      return $content;
    }
    else {
    switch($action){
      case 'ListeJeu':
        include_once('JeuController.class.php');
        $jeu = new Jeu();
        $content = $jeu->ListeJeu();
        return $content;
      case 'AjoutJeu':
        include_once('JeuController.class.php');
        $jeu = new Jeu();
        ob_start();
        $jeu->AjoutJeu($jeu, $db);
        $content = ob_get_clean();
        return $content;
        break;
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

}
