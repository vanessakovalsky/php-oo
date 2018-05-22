<?php

class RouterController {

  public function route($method, $action){
    if($method == 'POST'){
      include_once('JeuController.class.php');
      $jeu = new Jeu();
      $content = $jeu->AjoutJeu($_POST);
      return $content;
    }
    else {
    switch($action){
      case 'ListeJeu':
        include_once('JeuController.class.php');
        $jeu = new Jeu();
        $content = $jeu->ListeJeu();
        return $content;
        break;
        case 'AjoutJeu':
          include_once('JeuController.class.php');
          $jeu = new Jeu();
          ob_start();
          $jeu->AjoutJeu();
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
